<?php

namespace App\Listeners;

use App\Events\CreateCurrencies;
use App\Models\Currency;
use App\Notifications\TelegramCurrencyChangeDown;
use App\Notifications\TelegramCurrencyChangeUp;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class ChangeCurrencyNotification
{
    private array $supportedCurrencies = [
        'eur',
        'usd',
    ];
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CreateCurrencies  $event
     * @return void
     */
    public function handle(CreateCurrencies $event)
    {
        $newCurrency = $event->currency;
        $oldCurrency = Currency::where('id', '!=', $newCurrency->id)->orderBy('id', 'desc')->first();

        foreach ($this->supportedCurrencies as $currency) {
            $byeCurrency = $currency . '_b';
            if ($newCurrency->$byeCurrency > $oldCurrency->$byeCurrency) {
                // send currency up notification
                Notification::send('', new TelegramCurrencyChangeUp($currency, $oldCurrency->$byeCurrency, $newCurrency->$byeCurrency));
            } elseif ($newCurrency->$byeCurrency < $oldCurrency->$byeCurrency) {
                // send currency down notification
                Notification::send('', new TelegramCurrencyChangeDown($currency, $oldCurrency->$byeCurrency, $newCurrency->$byeCurrency));
            }
        }
    }
}
