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
     public function home(){
         return view('layout.home');
     }
     public function about(){
        return view('layout.about');
    }
    public function contact(){
        return view('layout.contact');
    }
    public function login(){
        return view('layout.login');
    } public function register(){
        return view('layout.register');
    }

 public function AboutArray(){
    $group=array('one'=>'Majd','two'=>'Bahaa','three'=>'Hadi','four'=>'Obada');
    
    return view('layout.about')->with($group) ;
}


}




