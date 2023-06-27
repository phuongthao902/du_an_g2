<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerName extends Controller
{
    public function index(){
        return view('layout');
    }
    public function userProfile(){
        return view('profile');
    }
}
