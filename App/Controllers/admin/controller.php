<?php

namespace App\Controllers\admin;

class controller
{
    protected $secondary = [];
    public function display($content, $data=[]){

        $pageData['secondary'] = $this->secondary;
        $pageData['tpl'] = [
            'main' => $content,
        ];
        $pageData['menu'] = config("menu");;
        $pageData['seo'] = [
            'title' => '后台管理界面',
        ];
        if (!empty($data)){
            $pageData = array_merge($pageData, $data);
        }
        $tpl = 'main.html';
//        prd($pageData);
        response(200, $pageData, "html", $tpl);
    }
}