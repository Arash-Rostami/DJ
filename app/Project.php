<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = [
        'title_project', 'text_project', 'description_project',
        'date_project', 'audio_address', 'title_project_f',
        'text_project_f', 'description_project_f', 'date_project_f'
    ];

    public static function updateTitle($text, $text_f)
    {
        return Project::find(1)->update(
            ['title_project' => $text, 'title_project_f' => $text_f]);
    }

    public static function updateProject($id, $property, $value)
    {
        Project::find($id)->update([$property => $value]);
    }
}
