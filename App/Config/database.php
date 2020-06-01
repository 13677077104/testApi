<?php
return [
    /**
     * 数据库配置
     */
    'database' => [
        'master' => [
            "drive"   => "mysql",
            "host"    => "localhost",
            "dbname"  => "test_api",
            "user"    => "root",
            "pwd"     => "root",
            "charset" => "utf8"
        ],

        'slave' => [
        ]
    ]
];