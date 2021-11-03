<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesBenchmarkController extends Controller
{
    public function index(){
        $title = 'Benchmark Pages - NDPE Transparency Platform';
        $nav = 'pages';
        return view('backend.benchmark', compact('title','nav'));
    }
}
