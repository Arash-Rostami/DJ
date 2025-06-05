<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class myEmail extends Notification
{
    use Queueable;

    public $subject, $message, $attachment, $path;


    public function __construct($subject, $message, $attachment)
    {
        $this->subject = $subject;
        $this->message = $message;
        $this->attachment = $this->getPath() . $attachment;
    }

    public function getPath()
    {
        return $this->path = public_path('attachment/');
    }

    public function hasNoFile()
    {
        return $this->attachment == $this->getPath();
    }


    public function via($notifiable)
    {
        return ['mail'];
    }

    public function sendEmail(): MailMessage
    {
        return (new MailMessage)->subject($this->subject)->line($this->message)
            ->from('info@davood-jafari.com', 'Davood Jafari');
    }

    public function toMail($notifiable)
    {
        // if there is no attached file after the path, skip attach()
        if ($this->hasNoFile()) {
            return $this->sendEmail();
        }
        return $this->sendEmail()->attach($this->attachment);
    }
}
