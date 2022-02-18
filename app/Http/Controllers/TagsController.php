<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class TagsController extends Controller
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
    public function detail($lang, $tag){
        $tag = $tag;
        // dd($this->getTags($tag));
        // $tags = $this->getTags($tag);
        $nav = 'update';
        $footer = $this->getFooter();
        $title = $tag.' -  NDPE Transparency Platform';
        return view('frontend.tags', compact('title','tag','nav', 'footer'));
    }
}
