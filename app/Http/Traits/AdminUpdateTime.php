<?php


namespace App\Http\Traits;


trait AdminUpdateTime
{
    // show the time of the last update inside admin modal
    function showUpdate($value)
    {
        // load the table switch class
        $model = App('App\Utility\UpdatedTable');

        // emit event to alpine to show or change the table according to request
        return $this->dispatchBrowserEvent('time-update', ['time' => $model->showTime($value)]);
    }
}
