<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $title = 'About - NDPE Transparency Platform';
        $nav = 'about';
        return view('frontend.about', compact('title','nav'));
    }
}
