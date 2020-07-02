<?php

namespace App\Controllers\admin;

class controller
{
    public function display($content, $data=[]){
        $pageData['tpl'] = [
            'main' => $content,
        ];
        $pageData['seo'] = [
            'title' => '后台管理界面',
        ];
        if (!empty($data)){
            $pageData = array_merge($pageData, $data);
        }

        $tpl = 'main.html';
        response(200, $pageData, "html", $tpl);
    }
}