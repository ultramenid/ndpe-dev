<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function detail(){
        $title = 'Djarum - NDPE Transparency Platform';
        $nav = 'updates';
        return view('frontend.article', compact('title', 'nav'));
    }
}
