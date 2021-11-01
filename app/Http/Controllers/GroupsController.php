<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupsController extends Controller
{
    public function index(){
        $title = 'Groups - NDPE Transparency Platform';
        $nav = 'groups';
        return view('backend.groups', compact('title','nav'));
    }
    public function edit($id){
        $title = 'Editing Corporate - Responsible Mining Index';
        $nav = 'corporates';
        $id = $id;
        return view('backend.editcorporate', compact('title','nav', 'id'));
    }
}
