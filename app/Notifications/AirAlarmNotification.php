<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;

class AirAlarmNotification extends Notification
{
    use Queueable;

    private string $status;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(private string $region, private int $telegramId, bool $alarm)
    {
        $this->status = $alarm
            ? '🚨 🚀 повітряна тривога❗' . PHP_EOL . 'пройдіть, будь-ласка, до найближчого укриття'
            : '✅ відбій повітрячної тривоги';
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
            ->to($this->telegramId)
            ->content("$this->region *$this->status*");
    }
}
