<?php


namespace App\Http\Traits;


use App\Me;

trait AdminAboutMe
{

    public function saveAboutMeTitle()
    {
        Me::updateTitle($this->me['title_me'], $this->me['title_me_f']);

        return showSuccessReturn();
    }

    public function saveAboutMeText()
    {

        Me::updateText($this->me['text_me'], $this->me['text_me_f']);

        return showSuccessReturn();
    }

    public function saveMissionTitle()
    {
        Me::updateMissionTitle($this->me['title_mis'], $this->me['title_mis_f']);

        return showSuccessReturn();
    }

    public function saveMissionText()
    {

        Me::updateMissionText($this->me['text_mis'], $this->me['text_mis_f']);

        return showSuccessReturn();
    }
}
