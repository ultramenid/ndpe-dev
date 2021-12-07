<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class TagsController extends Controller
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
    public function getTags($tag){
        try{
           $tag =  DB::select("select ".$this->getSelectInternal() ." from eksternalnews where CONCAT(',', tags, ',') like '%,".$tag.",%' and publishdate <= '".Carbon::now('Asia/Jakarta')."' and isActive = 1 order by publishdate DESC;");
        } catch (\Throwable $th) {
            $tag = [];
        }
        return $tag;
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
    public function detail($lang, $tag){
        $tag = $tag;
        // dd($this->getTags($tag));
        $tags = $this->getTags($tag);
        $nav = 'update';
        $footer = $this->getFooter();
        $title = $tag.' -  NDPE Transparency Platform';
        return view('frontend.tags', compact('title', 'tags','tag','nav', 'footer'));
    }
}
