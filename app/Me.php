<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Me extends Model
{
    protected $table = 'me';
    protected $fillable = [
        'title_me', 'text_me', 'title_mis',
        'text_mis', 'title_me_f', 'text_me_f',
        'title_mis_f', 'text_mis_f',
        'pic', 'pic_caption'
    ];

    public static function updateTitle($title, $title_f)
    {
        return Me::find(1)->update(
            ['title_me' => $title, 'title_me_f' => $title_f]);
    }

    public static function updateText($text, $text_f)
    {
        return Me::find(1)->update(
            ['text_me' => $text, 'text_me_f' => $text_f]);
    }

    public static function updateMissionTitle($title, $title_f)
    {
        return Me::find(1)->update(
            ['title_mis' => $title, 'title_mis_f' => $title_f]);
    }

    public static function updateMissionText($text, $text_f)
    {
        return Me::find(1)->update(
            ['text_mis' => $text, 'text_mis_f' => $text_f]);
    }
}
