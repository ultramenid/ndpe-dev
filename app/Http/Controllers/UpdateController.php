<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
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
        ->where('isActive', 1)
        ->orderBy('publishdate','desc')
        ->limit(3)
        ->get();
    }

    public function index(){
        // dd($this->getContentInternal());
        $title = 'Update - NDPE Transparency Platform';
        $internals = $this->getContentInternal();
        $nav = 'update';
        return view('frontend.update', compact('title', 'nav', 'internals'));
    }
}
