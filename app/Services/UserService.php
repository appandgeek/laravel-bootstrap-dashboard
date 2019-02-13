<?php

namespace App\Services;

use App\User;



class UserService
{
    public function __construct()
    {

    }
    /**
     * 
     */
    public function getUserInfo($id)
    {
        $result = User::find($id);

        return $result;
    }

    /**
     * Getting user basic information
     */

}