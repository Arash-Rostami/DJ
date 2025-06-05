<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';

    protected $fillable = [
        'name', 'email', 'subject', 'text'
    ];

    public static function saveMessage($name, $to, $subject, $message)
    {
        return Contact::create(
            ['name' => $name, 'email' => $to, 'subject' => $subject, 'text' => $message]);
    }
}
