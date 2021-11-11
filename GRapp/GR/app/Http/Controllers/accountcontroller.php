<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class accountController extends Controller
{
    public function home(){
        return view('user.home');

    }
    public function schedule(){
        return view('user.schedule');
    }
    public function budget(){
        return view('user.budget');
    }
    public function chat(){
        return view('user.chat');
    }
    public function bridalfair(){
        return view('user.bridal_fair');
    }
    public function column(){
        return view('user.column');
    }
    public function onlinereserve(){
        return view('user.online_reserve');
    }
}
