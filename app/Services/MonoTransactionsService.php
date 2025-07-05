<?php

namespace App\Services;

use App\Notifications\MonoTransactionNotification;
use Illuminate\Support\Facades\Notification;

class MonoTransactionsService
{
    /**
     * @param array $data
     *
     * @return void
     */
    public function handler(array $data): void
    {
        Notification::send('', new MonoTransactionNotification(json_encode($data)));
    }
}
