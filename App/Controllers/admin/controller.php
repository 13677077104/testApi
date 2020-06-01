<?php

namespace App\Controllers\admin;

class controller
{
    public function display($tpl){
        $pageData = [
            'title' => '后台管理界面',
        ];
        response(200, $pageData, "html", $tpl);
    }
}