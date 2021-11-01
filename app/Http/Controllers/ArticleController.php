<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function getSelectInternal(){
        if (App::getLocale() == 'id') {
            return 'id, titleID as title, slugID as slug, img, descID as description, contentID as content';
        }elseif(App::getLocale() == 'jp'){
            return 'id, titleJP as title, slugJP as slug, img, descJP as description, contentJP as content';
        }else{
            return 'id, titleEN as title, slugEN as slug, img, descEN as description, contentEN as content';
        }
    }

    public function getSelectRelatedInternal(){
        if (App::getLocale() == 'id') {
            return 'id, titleID as title, slugID as slug, img';
        }elseif(App::getLocale() == 'jp'){
            return 'id, titleJP as title, slugJP as slug, img';
        }else{
            return 'id, titleEN as title, slugEN as slug, img';
        }
    }

    public function getContentInternal($id){
        return DB::table('internalnews')
        ->selectRaw($this->getSelectInternal())
        ->where('id', $id)
        ->first();
    }

    public function getRelatedInternal($id){
        return DB::table('internalnews')
        ->selectRaw($this->getSelectRelatedInternal())
        ->where('publishdate', '<', Carbon::now('Asia/Jakarta'))
        ->where('isActive', 1)
        ->where('id', '!=' , $id)
        ->orderBy('publishdate','desc')
        ->limit(3)
        ->get();
    }

    public function detail($lang,$id, $slug){
        $relatedinternal = $this->getRelatedInternal($id);
        $id = $id;
        $lang = $lang;
        $slug = $slug;
        $article = $this->getContentInternal($id);
        $title = 'Djarum - NDPE Transparency Platform';
        $nav = 'updates';
        return view('frontend.article', compact('title', 'nav','id', 'slug', 'article','relatedinternal'));
    }
}
