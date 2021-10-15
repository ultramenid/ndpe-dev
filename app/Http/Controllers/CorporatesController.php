<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorporatesController extends Controller
{
    public function index(){
        $title = 'Djarum - NDPE Transparency Platform';
        $nav = 'corporates';
        return view('frontend.index', compact('title', 'nav'));
    }

    public function detail(){
        $title = 'Djarum - NDPE Transparency Platform';
        $nav = 'corporates';
        return view('frontend.profile', compact('title', 'nav'));
    }
}
