<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
{

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

        // dd($this->getAnothereksternal());
        $title = 'News & NDPE Implement Updates';


        $nav = 'update';
        $footer = $this->getFooter();
        return view('frontend.update', compact('title', 'nav', 'footer'));
    }
}
