<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    protected $table = 'homepage';
    protected $fillable = [
        'title', 'text', 'title_f', 'text_f'
    ];

    public static function updateTitle($title, $title_f)
    {
        return Homepage::find(1)->update(
            ['title' => $title, 'title_f' => $title_f]);
    }

    public static function updateText($text, $text_f)
    {
        return Homepage::find(1)->update(
            ['text' => $text, 'text_f' => $text_f]);
    }
}
