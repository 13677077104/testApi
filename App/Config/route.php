<?php

return [
    "admin" => [
        '/' => [
            'GET' => 'admin\Index@index'
        ],
    ],

    /**-----------登陆---------------*/
    "/login" => [
        "GET"  => ["admin\Login@login", ""],
        "POST"  => ["admin\Login@doLogin", ""],
    ],

];