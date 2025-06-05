<?php

namespace App\Http\Livewire;

use App\Http\Traits\AdminGallery;
use Illuminate\Http\Request;
use Livewire\Component;

class AddPhoto extends Component
{
    use AdminGallery;

    protected $listeners = ['deleteImage' => 'delete'];

    public function mount(Request $request)
    {
        if (self::storeImage($request))

            return showAddReturn();
    }
}
