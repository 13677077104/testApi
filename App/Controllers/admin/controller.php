<?php

namespace App\Controllers\admin;

class controller
{
    public function display($tpl, $data=[]){
        $pageData = [
            'title' => '后台管理界面',
        ];
        if (!empty($data)){
            $pageData = array_merge($pageData, $data);
        }
        response(200, $pageData, "html", $tpl);
    }

    public function paging($table, $current=1, $pageSize=5){
        $beg = ($current - 1 ) * $pageSize;
        $content = TB($table)->limit($beg, $pageSize)->select();
        $total = TB($table)->count('id')->select('id');
        $page = [
            'total' => $total[0]['id'],
            'current' => $current,
            'data' => $content,
        ];
        return $page;
    }
}