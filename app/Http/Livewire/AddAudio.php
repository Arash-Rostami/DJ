<?php


namespace App\Http\Livewire;

use App\Http\Traits\AdminAudio;
use App\Project;
use Illuminate\Http\Request;
use Livewire\Component;


class AddAudio extends ShowAdmin
{
    use AdminAudio;

    public function mount()
    {
        if (self::checkAudio())
            return showAddReturn();
    }
}
