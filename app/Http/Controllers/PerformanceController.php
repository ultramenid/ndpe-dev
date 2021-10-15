<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerformanceController extends Controller
{
    public function index(){
        $title = 'Performance - NDPE Transparency Platform';
        $nav = 'performance';
        return view('frontend.tools', compact('title', 'nav'));
    }
}
