<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function CandyView($id,$name){
        return "id: ".$id."<br>name: ".$name;
    }


    public function Task2($id,$user){
        echo "id: ".$id. '<br> user: '.$user;
     }
}
