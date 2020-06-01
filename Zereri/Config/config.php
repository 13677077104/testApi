<?php
return [
    'log' => [
        'daily'  => __ROOT__ . '/logs/' . date('Y-m-d') . '.txt',
        'single' => __ROOT__ . '/logs/log.txt'
    ],

    'session' => [
        'path' => __ROOT__ . '/App/Session/'
    ],

    'smarty' => [
        "template_dir" => __ROOT__ . '/public/Views/',
        "compile_dir"  => __ROOT__ . '/public/Smarty/templates_c/',
        "config_dir"   => __ROOT__ . '/public/Smarty/configs/',
        "cache_dir"    => __ROOT__ . '/public/Smarty/cache/'
    ]
];