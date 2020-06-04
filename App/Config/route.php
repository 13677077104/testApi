<?php

return [
    "admin" => [
        '/' => [
            'GET' => 'admin\Index@index',
            'POST' => 'admin\Index@ajaxGetData'
        ],
    ],

    /**-----------登陆---------------*/
    "/login" => [
        "GET"  => ["admin\Login@login", ""],
        "POST"  => ["admin\Login@doLogin", ""],
    ],

];