<?php

return [
    "admin" => [
        '/'=>[
            'GET' => 'admin\article\Article@getList',
        ],
        '/article/list' => [
            'GET' => 'admin\article\Article@getList',
            'POST' => 'admin\article\Article@ajaxGetData'
        ],
        '/article/add' => [
            'GET' => 'admin\article\Article@showAdd',
            'POST' => 'admin\article\Article@doSave',
        ],
        '/article/{id}' => [
            'DELETE' => 'admin\article\Article@delete',
            'GET' => 'admin\article\Article@showUpdate',
        ],
        '/category/list' => [
            'GET' => 'admin\Category@cateList',
            'POST' => 'admin\article\Article@ajaxGetData'
        ],
    ],

    /**-----------登陆---------------*/
    "/login" => [
        "GET"  => ["admin\Login@login", ""],
        "POST"  => ["admin\Login@doLogin", ""],
    ],

];