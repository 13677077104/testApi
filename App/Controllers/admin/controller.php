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

    public function paging($table, $orderBy, $start=0, $pageSize=5){
        $content = TB($table)->orderBy($orderBy)->limit($start, $pageSize)->select();
        $total = TB($table)->count('id')->select('id');
        $page = [
            'iTotalDisplayRecords' => $total[0]['id'],
            'sEcho' => $start,
            'data' => $content,
        ];
        return $page;
    }
}