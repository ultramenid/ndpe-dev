<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class PerformanceController extends Controller
{

    public function getSelect(){
        return 'id, name, img, deforestation, biodiversityloss, peatlanddestruc, socialconflict, corporateSLUG';
    }

    public function getContent(){
        return DB::table('corporateprofile')
        ->selectRaw($this->getSelect())
        ->get();
    }
    public function index(){
        $corporates = $this->getContent();
        $title = 'Performance - NDPE Transparency Platform';
        $nav = 'performance';
        return view('frontend.tools', compact('title', 'nav', 'corporates'));
    }
}
