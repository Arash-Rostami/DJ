<?php


namespace App\Http\Traits;


use App\Post;


trait AdminPost
{

    public function storePost($request)
    {
        list ($image, $audio) = self::setFilesName($request);

        return self::storeInDb(
            $request, // http request
            self::saveFiles($image, $audio), // get folder name
            $image, $audio // get files' names
        );
    }


    public static function setFilesName($request): array
    {
        return array(
            self::setFileName($request, 'image'),
            self::setFileName($request, 'audio')
        );
    }


    public static function setFileName($request, $file): string
    {
        return uniqid() . $request->file($file)->getClientOriginalName();
    }


    public function saveFiles($image_name, $audio_name): string
    {
        $folder = self::getFolder($image_name);

        self::moveFiles(self::getPath() . $folder, $image_name, $audio_name);

        return $folder;
    }


    public static function getFolder(string $name): string
    {
        return substr($name, 0, -4) . '/';
    }


    public static function getPath(): string
    {
        return 'posts/';
    }


    public static function moveFiles(string $path, $image, $audio): void
    {
        self::moveFile($path, $image, 'image');

        self::moveFile($path, $audio, 'audio');
    }


    public static function moveFile(string $path, string $name, string $file)
    {
        return request()->file($file)->storeAs($path, $name, 'post');
    }


    public static function storeInDb($request, string $folder, $image_name, $audio_name)
    {
        return Post::create([
            'title_post' => $request->title, 'title_post_f' => $request->title_f,
            'pic_caption' => $request->description,
            'text_post' => self::getPath() . $folder . $audio_name,
            'post_folder' => self::getPath() . $folder,
            'pic' => self::getPath() . $folder . $image_name,
        ]);
    }
}
