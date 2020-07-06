<?php

namespace App\Models;

use Zereri\Lib\Db\Model;

class Category extends Model
{
    //声明该模型指定student表
    protected $table = "category";

    public static function getRow($where){
        $key = key($where);
        $val = $where[$key];
        $res = self::where($key,'=', $val)->select();

        return $res[0];
    }
    /**
     * @param array $data
     * @return mixed
     */
    public static function save(array $data)
    {
        if (!isset($data['create_time'])){
            $data['create_time'] = time();
        }
        $data['update_time'] = time();
        $data['status'] = 1;
        if (isset($data['id'])){
            $res = self::where('id', '=', $data['id'])->update($data);
        }else{
            $res = self::insert($data);
        }
        return $res[0];
    }

    public static function Page($start, $pageSize, $orderBy){
        $content = self::orderBy($orderBy)->limit($start, $pageSize)->select();

        foreach ($content as &$item){
            $item['create_time'] = date("Y-m-d H:i:s", $item['create_time']);
            $item['update_time'] = date("Y-m-d H:i:s", $item['update_time']);
        }

        $total = self::count();

        $page = [
            'iTotalDisplayRecords' => $total,
            'sEcho' => $start,
            'data' => $content,
        ];

        return $page;
    }

    /**
     * 返回总条数
     * @return mixed
     */
    public static function count(){
       $res = parent::select('id');
       return count($res);
    }
}