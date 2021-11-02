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
            return 'id, titleID as title, slugID as slug, img, publishdate, sourcename,sourceurl, descID as description, tags';
        }elseif(App::getLocale() == 'jp'){
            return 'id, titleJP as title, slugJP as slug, img,publishdate, sourcename, sourceurl, descJP as description, tags';
        }else{
            return 'id, titleEN as title, slugEN as slug, img,publishdate, sourcename,  sourceurl, descEN as description, tags';
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

    public function setHighlight(){
        $items = [];
        foreach($this->getContentInternal() as $item){
            array_push($items, $item->id);
        }
        return $items;
    }

    public function getAnotherInternal(){
        return DB::table('internalnews')
        ->selectRaw($this->getSelectInternal())
        ->where('publishdate', '<', Carbon::now('Asia/Jakarta'))
        ->where('isActive', 1)
        ->whereNotIn('id', $this->setHighlight())
        ->orderBy('publishdate','desc')
        ->limit(3)
        ->get();
    }

    public function index(){

        // dd($this->getAnotherInternal());
        $title = 'Update - NDPE Transparency Platform';
        $anotherUpdate = $this->getAnotherInternal();
        $internals = $this->getContentInternal();
        $nav = 'update';
        return view('frontend.update', compact('title', 'nav', 'internals','anotherUpdate'));
    }
}
