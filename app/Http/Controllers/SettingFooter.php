<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingFooter extends Controller
{
    public function index(){
        $title = 'Settings - NDPE Transparency Platform';
        $nav = 'settings';
        $sidenav = 'footer';
        return view('backend.settingfooter', compact('title','nav','sidenav'));
    }
}
