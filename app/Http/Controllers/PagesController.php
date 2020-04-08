<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function index(){

        $images = [
            'bollywood'=> ['bhuladunga.jpg' , 'ikvari.jpg','bang.jpg', 'tumhiana.jpg', 'chal.jpg'],
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
