<?php

namespace App\Console\Commands;

use App\Models\Currency;
use Illuminate\Console\Command;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Symfony\Component\Console\Command\Command as CommandAlias;

class ExchangeRate extends Command
{
    private const USD_A_CODE = 840;
    private const EUR_A_CODE = 978;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'exchange:rate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get and save exchange rate';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     * @throws RequestException
     */
    public function handle(): int
    {
        $uri = 'https://api.monobank.ua/bank/currency';
        $currencies = Http::retry(3, 1000)->get($uri)->throw()->json();

        $usd = Arr::first($currencies, function ($value) {
            return $value['currencyCodeA'] === self::USD_A_CODE;
        });

        $eur = Arr::first($currencies, function ($value) {
            return $value['currencyCodeA'] === self::EUR_A_CODE;
        });

        Currency::create([
            'usd_b' => $usd['rateBuy'] ?: null,
            'usd_s' => $usd['rateSell'] ?: null,
            'eur_b' => $eur['rateBuy'] ?: null,
            'eur_s' => $eur['rateSell'] ?: null,
        ]);

        return CommandAlias::SUCCESS;
    }
}
