<?php
/**
 * Created by PhpStorm.
 * User: Arash Rostami
 * Date: 5/3/2021
 * Time: 2:42 PM
 */

namespace App\Utility;


class Direction
{

    public function changeToRtl($locale)
    {
        if ($locale == 'pr') {
            echo "style='direction:rtl; text-align:right;'";
        }

        if (session('region') == 'Iran') {
            return $this->checkLingo($locale);
        }
    }

    public function checkLingo($locale): string
    {
        if ($locale != 'en') {

            session(['locale' => 'pr']);

            return "style='direction:rtl; text-align:right;'";
        }
        session(['locale' => 'en']);

        return "style='direction:ltr;'";

    }
}
