<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function index(){

        $images = [
            'new release'=> ['1.jpg' , '2.jpg','3.jpg', '4.jpg', '5.jpg', '6.jpg', '7.jpg'],
            'pop' =>['1.jpg', '2.jpg', '3.jpg', '4.jpg','5.jpg', '6.jpg', '7.jpg'],
            'hindi song' => ['1.jpg', '2.jpg', '3.jpg', '4.jpg','5.jpg', '6.jpg'],
            'top hits' => ['1.jpg', '2.jpg', '3.jpg', '4.jpg','5.jpg', '6.jpg'],
            'punjabi' => ['1.jpg', '2.jpg', '3.jpg', '4.jpg','5.jpg', '6.jpg'],
            'loved song' => ['1.jpg', '2.jpg', '3.jpg', '4.jpg','5.jpg', '6.jpg'],
        ];
        return view('pages.index')->with('images',$images);
    }

    public function signup(){
        return view('pages.signup');
    }

    public function login(){
        return view('pages.login');
    }

    public function musicplayer(){
        return view('pages.musicplayer');
    }
}
