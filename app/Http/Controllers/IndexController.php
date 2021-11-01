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
            return 'id, titleID as title, slugID as slug, img';
        }elseif(App::getLocale() == 'jp'){
            return 'id, titleJP as title, slugJP as slug, img';
        }else{
            return 'id, titleEN as title, slugEN as slug, img';
        }
    }

    public function getContentInternal(){
        return DB::table('internalnews')
        ->selectRaw($this->getSelectInternal())
        ->where('publishdate', '<', Carbon::now('Asia/Jakarta'))
        ->orderBy('publishdate','desc')
        ->limit(3)
        ->get();
    }

    public function getSelect(){
        if (App::getLocale() == 'id') {
            return 'id, name, descID as description, corporateSLUG';
        }elseif(App::getLocale() == 'jp'){
            return 'id, name, descJP as description, corporateSLUG';
        }else{
            return 'id, name,descEN as description, corporateSLUG';
        }
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
        $nav = 'index';
        return view('frontend.index', compact('title', 'nav','corporates', 'updates'));
    }
}
