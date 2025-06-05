<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = [
        'title_page', 'title_post', 'text_post',
        'pic', 'pic_caption', 'title_page_f',
        'title_post_f', 'post_folder', 'pic_f',
        'pic_caption_f'
    ];

    public static function updateTitle($title, $title_f)
    {
        return Post::find(1)->update(
            ['title_page' => $title, 'title_page_f' => $title_f]);
    }
}
