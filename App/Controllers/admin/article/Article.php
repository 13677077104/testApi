<?php

namespace App\Controllers\admin\article;



use App\Controllers\admin\controller;
use App\Models\Content;
use http\Exception;

class Article extends controller
{
    public function index(){
        $this->display('article/add.html');
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
        $data = Content::Page($start,$pageSize, $orderBy);

        response(200, $data);
    }


    public function save(){
        $status = ['status'=>true, "msg"=>'success！'];
        try {
            if (!$_POST['title']){
                throw new \Exception('title is not null！');
            }
            if (!$_POST['content']){
                throw new \Exception('content is not null！');
            }
            $data = [
                'title'=> $_POST['title'],
                'content'=> $_POST['content'],
            ];
            if (isset($_POST['id'])){
                $data['id'] = $_POST['id'];
            }
            Content::save($data);
        } catch (\Exception $e) {
            $msg = $e->getMessage();
            $status = ['status'=>false, "msg"=>$msg];
        }
        $status['url'] = '/admin/';
        response(200, $status);
    }

    public function delete($id){
        if ($id){
            Content::where('id', '=', $id)->delete();
            $msg = ['status'=>true,'msg'=>'删除成功！'];
        }else{
            $msg = ['status'=>false,'msg'=>'删除失败！'];
        }
        response(200, $msg);
    }

    public function showUpdate($id){
        $pageData['id'] = $id;
        $pageData = Content::getRow(['id' => $id]);
        $this->display('article/add.html', $pageData);
    }


}