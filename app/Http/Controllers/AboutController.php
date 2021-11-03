<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function getSelect(){
        if (App::getLocale() == 'id') {
            return 'id,theplatformID as theplatform, ownershipID as ownership, editorialID as editorial, contentID as content, timelineID as timeline';
        }elseif(App::getLocale() == 'jp'){
            return 'id,theplatformJP as theplatform, ownershipJP as ownership, editorialJP as editorial, contentJP as content, timelineJP as timeline';
        }else{
            return 'id,theplatformEN as theplatform, ownershipEN as ownership, editorialEN as editorial, contentEN as content, timelineEN as timeline';
        }
    }
    public function getAboutpage(){
        return DB::table('pageabout')
                ->selectRaw($this->getSelect())
                ->where('id', 1)
                ->first();
    }
    public function index(){
        $about = $this->getAboutpage();
        $title = 'About - NDPE Transparency Platform';
        $nav = 'about';
        return view('frontend.about', compact('title','nav', 'about'));
    }
}
