<?php

namespace App\Controllers\admin;


class Index extends controller
{
    public function index(){
        $this->display('index.html');
        //response(200, [], "html", "index.html");
    }

}