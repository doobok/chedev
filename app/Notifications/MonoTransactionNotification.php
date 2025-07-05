<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;

class MonoTransactionNotification extends Notification
{
    use Queueable;

    private string $status;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(private string $body)
    {
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array
     */
    public function via(): array
    {
        return [TelegramChannel::class];
    }

    /**
     * @return TelegramMessage
     */
    public function toTelegram(): TelegramMessage
    {

        return TelegramMessage::create()
            ->to(config('services.telegram.channel.mono-transactions'))
            ->content("$this->body");
    }
}
