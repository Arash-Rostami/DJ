<?php


namespace App\Http\Livewire;


use App\Http\Traits\AdminPost;
use Illuminate\Http\Request;
use Livewire\Component;


class AddPost extends Component
{
    use AdminPost;

    public function mount(Request $request)
    {
        if (self::storePost($request))

            return showAddReturn();
    }
}
