<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    protected $table = 'occupation';
    protected $fillable = [
        'title_ocu', 'text_date', 'text_place',
        'text_job', 'title_ocu_f', 'text_date_f',
        'text_place_f', 'text_job_f'

    ];

    public static function updateTitle($text, $text_f)
    {
        return Occupation::find(1)->update(
            ['title_ocu' => $text, 'title_ocu_f' => $text_f]);
    }

    public static function updateOccupation($id, $property, $value)
    {
        Occupation::find($id)->update([$property => $value]);
    }
}
