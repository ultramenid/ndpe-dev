<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function index(){
        $title = 'Update - NDPE Transparency Platform';
        $nav = 'update';
        return view('frontend.update', compact('title', 'nav'));
    }
}
