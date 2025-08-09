<?php

namespace App\Services;

use App\Notifications\MonoTransactionNotification;
use Illuminate\Support\Facades\Notification;

class MonoTransactionsService
{
    private const MASTER_MODE_ENABLED = false;
    private const MASTER_MODE_LIMIT = 5000000;
    private const UAH_CURRENCY_CODE = 980;
    private const FILTERED_TRANSACTIONS = [
        'З гривневого рахунку ФОП',
    ];
    private int $currencyCode = 0;
    private int $balance = 1000000;
    private int $operationAmount = 0;
    private string $description;

    /**
     * @param array $data
     *
     * @return void
     */
    public function handler(array $data): void
    {
        $this->parseData($data);

        if ($this->currencyCode !== self::UAH_CURRENCY_CODE) {
            return;
        }
        if (in_array($this->description, self::FILTERED_TRANSACTIONS)) {
            return;
        }
        if (!self::MASTER_MODE_ENABLED && $this->balance > self::MASTER_MODE_LIMIT) {
            return;
        }

        Notification::send('', new MonoTransactionNotification(
            self::formatUahAmount($this->operationAmount),
            self::formatUahAmount($this->balance),
            $this->description
        ));
    }

    /**
     * @param array $data
     *
     * @return void
     */
    private function parseData(array $data): void
    {
        $operation = data_get($data, 'data.statementItem');

        if (!$operation) {
            return;
        }

        $this->operationAmount  = $operation['operationAmount'] ?? 0;
        $this->balance          = $operation['balance'] ?? 0;
        $this->currencyCode     = $operation['currencyCode'] ?? 0;
        $this->description      = $operation['description'] ?? '';
    }

    /**
     * @param int $amount
     *
     * @return string
     */
    private static function formatUahAmount(int $amount): string
    {
        $hryvnia = intdiv($amount, 100);
        $kopecks = $amount % 100;

        $formattedHryvnia = number_format($hryvnia, 0, '', ' ');

        if ($kopecks == 0) {
            return $formattedHryvnia . ' грн';
        }

        return $formattedHryvnia . ',' . sprintf('%02d', $kopecks) . ' грн';
    }
}
