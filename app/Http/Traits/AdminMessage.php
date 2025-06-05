<?php


namespace App\Http\Traits;


use App\Contact;
use App\Notifications\myEmail;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Notification;

trait AdminMessage
{
    public function sendEmailMessage(string $file): void
    {
        Notification::route('mail', $this->message['to'] ?? $this->message['email'])
            ->notify(new myEmail($this->message['subject'], $this->message['text'], $file));
    }

    public function saveMessage(): string
    {
        Contact::saveMessage(
            $this->message['name'], $this->message['to'] ?? $this->message['email'],
            $this->message['subject'], $this->message['text']);

        return $this->saveAttachment();
    }

    public function saveAttachment()
    {
        $file = '';
        if ($this->attachment) {
            $file = $this->attachment->getClientOriginalName();
            $this->attachment->storeAs('attachment', $file, 'post');
        }
        return $file;
    }

    public function deleteAttachment(): void
    {
        if (File::exists(public_path('attachment/')))
            File::deleteDirectory(public_path('attachment/'));
    }
}
