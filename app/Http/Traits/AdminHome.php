<?php


namespace App\Http\Traits;


use App\Homepage;

trait AdminHome
{
    public function saveHomeTitle()
    {
        Homepage::updateTitle($this->homepage['title'], $this->homepage['title_f']);

        return showSuccessReturn();
    }

    public function saveHomeText()
    {
        Homepage::updateText($this->homepage['text'], $this->homepage['text_f']);

        return showSuccessReturn();
    }
}
