<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function mypage(){
        return view('mypage');
    }

    public function setting(){
        return view('setting');
    }

    // public function personal-info(){


    //     return view('personal-info');
    // }
}
