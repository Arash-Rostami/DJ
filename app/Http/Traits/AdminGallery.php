<?php


namespace App\Http\Traits;

use App\Slider;

trait AdminGallery
{

    public static function storeImage($request)
    {
        list($path, $file_name) = self::savePicture($request);

        return $slider = Slider::create([
            'caption' => $request->description,
            'picture' => 'images/' . $path . $file_name,
        ]);
    }

    public static function savePicture($request): array
    {
        list($path, $file_name) = self::namePicture($request);

        request()->file('filename')->storeAs($path, $file_name, 'personal');

        return array($path, $file_name);
    }

    public static function namePicture($request): array
    {
        $path = 'slider/';

        $file_name = uniqid() . $request->file('filename')->getClientOriginalName();

        return array($path, $file_name);
    }

    public function deleteImage()
    {
        if (Slider::deletePicture($this->image))
            return showDeleteReturn();
    }
}
