<?php


namespace App\Utility;


class Geo
{

    public function findGeo()
    {
        $query = $this->getFile();

        $this->changeRegion($query);
    }

    public function getIp()
    {
//        return $ip = request()->ip();
        return $ip = '93.117.185.50';
    }

    public function getFile()
    {
        return json_decode(file_get_contents(
                'http://api.ipapi.com/' . $this->getIp() . '?access_key=c91266fd235ebad6a748d28dad085b48'
            ) ?? ' ');
    }


    public function changeRegion($query)
    {
        if ($query->country_name == 'Iran') {
            session(['region' => $query->country_name]);
            return session(['locale' => 'pr']);
        }
        return session(['locale' => 'en']);
    }
}
