<?php


namespace App\Http\Traits;


use App\Project;

trait AdminAudio
{

    public static function checkAudio()
    {
        return (request()->file('filename') == Null) ? self::storePiece() : self::storeAudio();
    }

    public static function storePiece()
    {
        return Project::create([
            'title_project' => request()->title, 'title_project_f' => request()->title_f,
            'date_project' => request()->date, 'date_project_f' => request()->date,
            'text_project' => request()->description, 'text_project_f' => request()->description_f,
        ]);
    }

    public static function storeAudio()
    {
        list($path, $file_name) = self::saveAudio();

        $project = self::storePiece();

        return $project->update(['audio_address' => 'audio/' . $path . $file_name,]);
    }

    public static function saveAudio(): array
    {
        $path = 'projects/';

        $file_name = uniqid() . request()->file('filename')->getClientOriginalName();

        request()->file('filename')->storeAs($path, $file_name, 'audio');

        return array($path, $file_name);
    }
}
