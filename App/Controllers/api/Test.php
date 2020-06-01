<?php
namespace App\Controllers\api;

class Test
{
    public function test($id)
    {
        echo 'api -- v1 test-arg: '.$id;
    }
}