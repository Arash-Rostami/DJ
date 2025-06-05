<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Gate;

trait PolicyController
{
    use HandlesAuthorization;

    public $admin;


    public function __construct()
    {
        $this->admin = 'admin';
    }


    public function isAdmin(): \Illuminate\Contracts\Auth\Access\Gate
    {
        return Gate::define('isAdmin', function () {
            return request()->path() == $this->admin;
        });
    }
}
