<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function korindo(){
        return view('maps.korindo');
    }
}
