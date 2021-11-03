<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EksternalController extends Controller
{
    public function index(){
        $title = 'Update - NDPE Transparency Platform';
        $nav = 'updates';
        return view('backend.eksternal', compact('title','nav'));
    }
    public function edit($id){
        $title = 'Editing Updates - Responsible Mining Index';
        $nav = 'updates';
        $id = $id;
        return view('backend.editeksternal', compact('title','nav', 'id'));
    }
}
