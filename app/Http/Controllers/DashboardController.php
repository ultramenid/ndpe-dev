<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $title = 'Dashboard - NDPE Transparency Platform';
        $nav = 'dashboard';
        return view('backend.dashboard', compact('title','nav'));
    }
}
