<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddInternal extends Controller
{
    public function index(){
        $title = 'Adding Internal Updates - NDPE Transparency Platform';
        $nav = 'updates';
        return view('backend.addinternal', compact('title','nav'));
    }
}
