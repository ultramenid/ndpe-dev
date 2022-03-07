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
    public function getFooterSelect(){
        if (App::getLocale() == 'id') {
            return 'textFooterID as textfooter';
        }elseif(App::getLocale() == 'jp'){
            return 'textFooterJP as textfooter';
        }else{
            return 'textFooterEN as textfooter';
        }
    }
    public function getFooter(){
        return DB::table('cmsfooter')
                ->selectRaw($this->getFooterSelect())
                ->where('id', 1)
                ->first();
    }
    public function index(){
        // $corporates = $this->getContent();
        // $title = 'Performance - NDPE Transparency Platform';
        // $nav = 'performance';
        // $footer = $this->getFooter();
        // return view('frontend.tools', compact('title', 'nav', 'corporates', 'footer'));
        return redirect()->route('index', app()->getlocale() );
    }
}
