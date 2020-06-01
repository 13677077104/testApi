<?php
namespace App\Controllers;

class Student
{
    public function getList()
    {
        echo "StudentList";
    }

    public function getInfo($id, $nickname)
    {
        echo "ID:" . $id;
        echo "Name:" . $nickname;
    }

}