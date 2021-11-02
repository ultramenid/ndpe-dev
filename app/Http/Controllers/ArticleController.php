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
            return 'id, titleID as title, slugID as slug, img, descID as description, contentID as content, tags, sourcename, sourceurl';
        }elseif(App::getLocale() == 'jp'){
            return 'id, titleJP as title, slugJP as slug, img, descJP as description, contentJP as content, tags, sourcename, sourceurl';
        }else{
            return 'id, titleEN as title, slugEN as slug, img, descEN as description, contentEN as content, tags, sourcename, sourceurl';
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
        try{
            $article = DB::table('internalnews')
                ->selectRaw($this->getSelectInternal())
                ->where('id', $id)
                ->first();
          } catch (\Throwable $th) {
              $article = [
                  'title' => 'Title'
              ];
          }
          return $article;
    }

    public function getRelatedInternal($id){
        try{
           $article= DB::table('internalnews')
            ->selectRaw($this->getSelectRelatedInternal())
            ->where('publishdate', '<', Carbon::now('Asia/Jakarta'))
            ->where('isActive', 1)
            ->where('id', '!=' , $id)
            ->orderBy('publishdate','desc')
            ->limit(3)
            ->get();
         } catch (\Throwable $th) {
             $article = [];
         }
         return $article;
    }

    public function detail($lang,$id, $slug){
        if(!$this->getContentInternal($id)){
           return redirect()->route('update', app()->getlocale() );
        }
        $relatedinternal = $this->getRelatedInternal($id);
        $id = $id;
        $lang = $lang;
        $slug = $slug;
        $article = $this->getContentInternal($id);
        $title = $this->getContentInternal($id)->title  ;
        $nav = 'updates';
        return view('frontend.article', compact('title', 'nav','id', 'slug', 'article','relatedinternal'));
    }
}
