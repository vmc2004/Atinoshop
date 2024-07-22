<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(){
        return view('user.sigin');
    }
    public function signup(){
        return view('user.sigup');
    }
}
