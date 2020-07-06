<?php

namespace App\Controllers\admin;


use Zereri\Lib\Cache\Redis;

class Category extends controller
{
    public function __construct()
    {
        $this->secondary['action'] ='article';
    }

    public function cateList(){

        $this->secondary['child_action'] ='category-list';
        /*
        $redis = new Redis();
        $menu = $GLOBALS['admin_left_menu'];
        $redis->set('admin_left_menu', serialize($menu));*/

//        prd();
        $this->display('category/list.html');
    }
}