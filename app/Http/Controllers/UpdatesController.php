<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdatesController extends Controller
{
    public function index(){
        $title = 'Updates - NDPE Transparency Platform';
        $nav = 'updates';
        return view('backend.updates', compact('title','nav'));
    }
}
