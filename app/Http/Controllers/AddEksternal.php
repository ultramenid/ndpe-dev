<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddEksternal extends Controller
{
    public function index(){
        $title = 'Adding Eksternal Updates - NDPE Transparency Platform';
        $nav = 'updates';
        return view('backend.addeksternal', compact('title','nav'));
    }
}
