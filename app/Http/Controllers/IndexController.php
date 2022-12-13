<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function getSelectInternal(){
        if (App::getLocale() == 'id') {
            return 'id, titleID as title, slugID as slug, img, sourceurl';
        }elseif(App::getLocale() == 'jp'){
            return 'id, titleJP as title, slugJP as slug, img, sourceurl';
        }else{
            return 'id, titleEN as title, slugEN as slug, img, sourceurl';
        }
    }

    public function getContentInternal(){
        return DB::table('eksternalnews')
        ->selectRaw($this->getSelectInternal())
        ->where('publishdate', '<', Carbon::now('Asia/Jakarta'))
        ->where('isActive', 1)
        ->orderBy('publishdate','desc')
        ->limit(3)
        ->get();
    }

    public function getSelect(){
        if (App::getLocale() == 'id') {
            return 'id, name, descID as description, corporateSLUG, overviewEN as overview';
        }elseif(App::getLocale() == 'jp'){
            return 'id, name, descJP as description, corporateSLUG, overviewJP as overview';
        }else{
            return 'id, name,descEN as description, corporateSLUG, overviewID as overview';
        }
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

    public function getContent(){
        return DB::table('corporateprofile')
        ->selectRaw($this->getSelect())
        ->get();
    }


    public function index(){
        // dd($this->getContent());
        $updates = $this->getContentInternal();
        $title = 'Index - NDPE Transparency Platform';
        $corporates = $this->getContent();
        $footer = $this->getFooter();
        $nav = 'index';
        return view('frontend.index', compact('title', 'nav','corporates', 'updates', 'footer'));
    }
}
