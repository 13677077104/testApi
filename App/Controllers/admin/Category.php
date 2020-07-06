<?php

namespace App\Controllers\admin;


use Zereri\Lib\Cache\Redis;

class Category extends controller
{
    public function cateList(){


        /*
        $redis = new Redis();
        $menu = $GLOBALS['admin_left_menu'];
        $redis->set('admin_left_menu', serialize($menu));*/

//        prd();
        $this->display('category/list.html');
    }
}