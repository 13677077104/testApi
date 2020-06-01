<?php
namespace App\Middles;

use Zereri\Lib\Cache\Cache;

class CheckLogin implements MiddleWare
{
    public function before($request)
    {
        try {
            if (!isset($_SERVER['HTTP_AUTHORIZATION'])) {
                throw new \Exception('Authorization error!');
            }
            $token = explode(' ', $_SERVER['HTTP_AUTHORIZATION'])[1];
            if (!Cache::get($token)) {
                throw new \Exception("can't find token!");
            }
        } catch (\Exception $e) {
            $msg = $e->getMessage();
            response(200, ['status' => false, 'msg'=>$msg]);
        }
    }

    public function after($request)
    {
        //
    }
}