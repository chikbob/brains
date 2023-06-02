<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderNotification extends Notification
{
    use Queueable;

    private string $hash;

    public function __construct(string $hash)
    {
        $this->hash = $hash;
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage())
            ->markdown('email', [
                'hash' => $this->hash
                
            ]);
    }

    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
