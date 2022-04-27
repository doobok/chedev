<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;

use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;

class TelegramNewComplain extends Notification
{
    use Queueable;

    private $comment;
    private $complain;
    private $user_comment;
    private $user_complain;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($comment, $complain, $user_comment, $user_complain)
    {
        $this->comment = $comment;
        $this->complain = $complain;
        $this->user_comment = $user_comment;
        $this->user_complain = $user_complain;
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
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toTelegram($notifiable)
    {

        return TelegramMessage::create()
            ->to(config('supp.telegramchat'))
            ->content("⚠️ *скарга на коментар користувача!* \n*$this->user_comment* \n___$this->comment ___ \n*текст скарги:*\n___$this->complain ___\nвід *$this->user_complain*");
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
