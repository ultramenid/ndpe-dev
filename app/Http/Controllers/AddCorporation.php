<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddCorporation extends Controller
{
    public function index(){
        $title = 'Adding Corporation - NDPE Transparency Platform';
        $nav = 'groups';
        return view('backend.addcorporation', compact('title','nav'));
    }
}
