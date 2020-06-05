<?php

namespace App\Controllers\admin;


use App\Models\Content;

class Index extends controller
{
    public function index(){


        $this->display('index.html');
        //response(200, [], "html", "index.html");
    }

    public function ajaxGetData(){

        $order = $_POST['order'][0];
        $rowName = $_POST['columns'][$order['column']]['data'];
        $orderBy = "{$rowName} {$order['dir']}";

        if ($_POST['search']['value']){
            $keys = $_POST['search']['value'];
        }
        $start = $_POST['start']?:0;
        $pageSize = $_POST['length']?:10;
        //数据分页
        $data = $this->paging('content', $orderBy, $start , $pageSize);

        response(200, $data);
    }



}