<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CallController extends Controller
{
    public function index(){
        $title = 'Benchmark - NDPE Transparency Platform';
        $nav = 'benchmark';
        return view('frontend.call', compact('title','nav'));
    }
}
