<?php
/**
 * Created by PhpStorm.
 * User: Arash Rostami
 * Date: 4/6/2022
 * Time: 6:25 PM
 */

namespace App\Http\Traits;


use App\Post;
use Illuminate\Support\Facades\File;

trait AdminBlog
{

    public function changeBlogTitle()
    {
        Post::updateTitle($this->blog_title['title_page'], $this->blog_title['title_page_f']);

        return showSuccessReturn();
    }

    public function deletePost()
    {
        File::deleteDirectory(public_path($this->getDirectoryName()));

        Post::destroy($this->post['delete']);

        $this->reset('post');

        return showDeleteReturn();
    }

    public function getDirectoryName()
    {
        // drop the final slash from string that is in DB
        return substr(Post::find($this->post['delete'])->post_folder, 0, -1);
    }
}
