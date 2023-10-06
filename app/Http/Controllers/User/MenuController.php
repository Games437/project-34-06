<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function corndog(){
        return view('user.menu.menu1');
    }
    public function pizza(){
        return view('user.menu.menu2');
    }
    public function sticky(){
        return view('user.menu.menu3');
    }
    public function promotion(){
        return view('user.menu.menu4');
    }
}
