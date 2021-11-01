<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InternalController extends Controller
{
    public function index(){
        $title = 'Internal Update - NDPE Transparency Platform';
        $nav = 'updates';
        return view('backend.internal', compact('title','nav'));
    }

    public function edit($id){
        $title = 'Editing Internal News - Responsible Mining Index';
        $nav = 'updates';
        $id = $id;
        return view('backend.editinternal', compact('title','nav', 'id'));
    }
}
