<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class PagesGroupsController extends Controller
{

    public function index(){
        $title = 'Groups Pages - NDPE Transparency Platform';

        $nav = 'pages';
        return view('backend.pagegroups', compact('title','nav'));
    }
}
