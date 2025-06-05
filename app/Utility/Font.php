<?php
/**
 * Created by PhpStorm.
 * User: Arash Rostami
 * Date: 5/3/2021
 * Time: 3:59 PM
 */

namespace App\Utility;


class Font
{

    public function changeToYekan($locale)
    {
        if ($this->checkLocal($locale)) {
            echo $this->makeCSS();
        }
    }

    public function makeCSS(): string
    {
        return $tags = '<style>strong, p, span, label, input {font-family: BYekan !important;}</style>';
    }

    public function checkLocal($locale): bool
    {
        return $locale == 'pr' or session('region') == 'Iran' and $locale != 'en';
    }
}
