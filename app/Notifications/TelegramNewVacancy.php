<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;

use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;

class TelegramNewVacancy extends Notification
{
    use Queueable;

    private $phone;
    private $slug;
    private $name;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($phone, $name, $lname, $specialty, $age, $comment, $link)
    {
        $this->phone = $phone;
        $this->name = $name;
        $this->lname = $lname;
        $this->specialty = $specialty;
        $this->age = $age;
        $this->comment = $comment;
        $this->link = $link;

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
            ->content("👩‍💼 *Новая вакансия!* \n от *$this->name $this->lname* \n специальность *$this->specialty*, возраст *$this->age* лет
            \n __$this->comment __ \n ```$this->phone``` \n ```$this->link```");
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
