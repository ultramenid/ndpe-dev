<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{


    public function index(){
        $title = 'Login - NDPE Transparency Platform';
        return view('backend.login', compact('title'));
    }
}
