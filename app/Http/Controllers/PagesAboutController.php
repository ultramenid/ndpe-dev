<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesAboutController extends Controller
{
    public function index(){
        $title = 'About Pages - NDPE Transparency Platform';
        $nav = 'pages';
        return view('backend.about', compact('title','nav'));
    }
}
