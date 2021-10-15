<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $title = 'Index - NDPE Transparency Platform';
        $nav = 'index';
        return view('frontend.index', compact('title', 'nav'));
    }
}
