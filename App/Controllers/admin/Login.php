<?php

namespace App\Controllers\admin;

use App\Lib\Token;
use App\Models\User;
use Zereri\Lib\Cache\Cache;
use Zereri\Lib\Session;

class Login
{
    public function login(){
        response(200, [], "html", "login/login.html");
    }
    public function doLogin($request){
        try {
            if (empty($request)){
                throw new \Exception('Params Errors');
            }
            $username = $request['username'];
            $password = $request['password'];

            $res = User::where('username', '=', $username)->select();
            if (!$res) {
                throw new \Exception('用户名不存在');
            }
            if ($res[0]['password'] !== $password){
                throw new \Exception('密码错误！');
            }
        } catch (\Exception $e) {
            $msg = $e->getMessage();
            response(200, ['status'=>false, 'msg'=>$msg]);
        }

        $token = Token::create($username);
        $userData = json_encode($res[0]);
        Cache::set($token, $userData);
        response(200, ['status'=>true, 'token'=>$token]);
    }

}