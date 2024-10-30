<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    function index(){
        $data = ['title'=>'Home page','content'=> 'Lorem ipsum'];
        $data['fruits']=["Mango","Orange","Banana","Jambura"];
        
        return view('home', $data);
    }

    function about(){
        return view('about');
    }
    function contact(){
        return view('contact');
    }
}