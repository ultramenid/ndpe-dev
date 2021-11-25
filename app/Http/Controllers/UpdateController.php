<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
{
    public function getSelecteksternal(){
        if (App::getLocale() == 'id') {
            return 'id, titleID as title, slugID as slug, img, publishdate, sourcename,sourceurl, descID as description, tags';
        }elseif(App::getLocale() == 'jp'){
            return 'id, titleJP as title, slugJP as slug, img,publishdate, sourcename, sourceurl, descJP as description, tags';
        }else{
            return 'id, titleEN as title, slugEN as slug, img,publishdate, sourcename,  sourceurl, descEN as description, tags';
        }
    }

    public function getContenteksternal(){
        return DB::table('eksternalnews')
        ->selectRaw($this->getSelecteksternal())
        ->where('publishdate', '<', Carbon::now('Asia/Jakarta'))
        ->where('isActive', 1)
        ->orderBy('publishdate','desc')
        ->get();
    }

    public function setHighlight(){
        $items = [];
        foreach($this->getContenteksternal() as $item){
            array_push($items, $item->id);
        }
        return $items;
    }

    public function getAnothereksternal(){
        return DB::table('eksternalnews')
        ->selectRaw($this->getSelecteksternal())
        ->where('publishdate', '<', Carbon::now('Asia/Jakarta'))
        ->where('isActive', 1)
        ->whereNotIn('id', $this->setHighlight())
        ->orderBy('publishdate','desc')
        ->get();
    }

    public function index(){

        // dd($this->getAnothereksternal());
        $title = 'News & NDPE Implement Updates';
        $anotherUpdate = $this->getAnothereksternal();
        $eksternals = $this->getContenteksternal();
        $nav = 'update';
        return view('frontend.update', compact('title', 'nav', 'eksternals','anotherUpdate'));
    }
}
