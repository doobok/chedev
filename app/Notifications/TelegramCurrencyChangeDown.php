<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Str;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;

class TelegramCurrencyChangeDown extends Notification
{
    use Queueable;

    private $oldCurrency;
    private $newCurrency;
    private $diff;
    private $currencyName;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($currencyName, $old, $new)
    {
        $this->currencyName = Str::upper($currencyName);
        $this->oldCurrency = $old;
        $this->newCurrency = $new;
        $this->diff = $old - $new;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [TelegramChannel::class];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     */
    public function toTelegram($notifiable)
    {
        return TelegramMessage::create()
            ->to(config('supp.telegramchat'))
            ->content("📉 курс *$this->currencyName* упав на *$this->diff* і тепер становить *$this->newCurrency* \nСтарий курс: $this->oldCurrency");
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
