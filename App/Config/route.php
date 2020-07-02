<?php

return [
    "admin" => [
        '/' => [
            'GET' => 'admin\Index@index',
            'POST' => 'admin\Index@ajaxGetData'
        ],
        '/article' => [
            'GET' => 'admin\article\Article@index',
            'POST' => 'admin\article\Article@save',
        ],
        '/article/{id}' => [
            'DELETE' => 'admin\article\Article@delete',
            'GET' => 'admin\article\Article@showUpdate',
        ]
    ],

    /**-----------登陆---------------*/
    "/login" => [
        "GET"  => ["admin\Login@login", ""],
        "POST"  => ["admin\Login@doLogin", ""],
    ],

];