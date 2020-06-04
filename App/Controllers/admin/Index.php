<?php

namespace App\Controllers\admin;


use App\Models\Content;

class Index extends controller
{
    public function index(){


        $this->display('index.html');
        //response(200, [], "html", "index.html");
    }

    public function ajaxGetData($params){
        $current = $params['current'];
        $pageSize = $params['pageSize'];
        //数据分页
        $data = $this->paging('content', $current , $pageSize);
        //prd($data);
        response(200, $data);
    }



}