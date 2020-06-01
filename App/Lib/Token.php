<?php

namespace App\Lib;

class Token
{
    public static function create($username)
    {
        $token = hash('sha256', $username . time() . mt_rand(10000, 99999));
        return $token;
    }
}