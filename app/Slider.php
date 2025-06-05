<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Slider extends Model
{
    protected $table = 'sliders';
    protected $fillable = ['caption', 'picture'];

    public static function deletePicture($id)
    {
        File::delete(Slider::find($id)->picture);

        return Slider::find($id)->delete();
    }
}
