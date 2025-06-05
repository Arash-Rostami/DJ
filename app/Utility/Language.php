<?php
/**
 * Created by PhpStorm.
 * User: Arash Rostami
 * Date: 5/1/2021
 * Time: 8:07 PM
 */

namespace App\Utility;


class Language
{

    // $x as the first choice is English, whereas $y as the second choice
    // is the Persian; this works as a helper to switch the lingo
    public function localizeLanguage($x, $y)
    {
        if ($this->checkIfLingoIsEng()) {
            return (session('locale') == 'en') ? $x : $y;
        }

        if ($this->checkIfLingoIsFarsi()) {
            return $y;
        }
        return $x;
    }

    public function checkIfLingoIsEng(): bool
    {
        return session()->exists('region') && session('region') == 'Iran';
    }

    public function checkIfLingoIsFarsi(): bool
    {
        return session()->exists('locale') && session()->get('locale') == 'pr';
    }
}

