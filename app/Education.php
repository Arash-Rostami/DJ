<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'education';

    protected $fillable = [
        'title_edu', 'text_date', 'text_place',
        'text_course', 'title_pro', 'text_pro',
        'title_edu_f', 'title_pro_f', 'text_pro_f',
        'text_date_f', 'text_place_f', 'text_course_f'
    ];

    public static function updateTitle($text, $text_f)
    {
        return Education::find(1)->update(
            ['title_edu' => $text, 'title_edu_f' => $text_f]);
    }

    public static function updateEducation($id, $property, $value)
    {
        Education::find($id)->update([$property => $value]);
    }
}
