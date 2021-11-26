<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class CorporatesController extends Controller
{
    public function getSelect(){
        if (App::getLocale() == 'id') {
            return 'id, textGroupsID as textGroup';
        }elseif(App::getLocale() == 'jp'){
            return 'id, textGroupsJP as textGroup';
        }else{
            return 'id, textGroupsEN as textGroup';
        }
    }
    public function getGroupsPage(){
        return DB::table('pagegroups')
                ->selectRaw($this->getSelect())
                ->where('id', 1)
                ->first();
    }

    public function selectGroups(){
        if (App::getLocale() == 'id') {
            return 'id, name, descID as description, corporateSLUG, img';
        }elseif(App::getLocale() == 'jp'){
            return 'id, name, descJP as description, corporateSLUG, img';
        }else{
            return 'id, name,descEN as description, corporateSLUG, img';
        }
    }
    public function getGroups(){
        return DB::table('corporateprofile')
        ->selectRaw($this->selectGroups())
        ->get();
    }
    public function index(){
        $title = 'Forestry & Agribusiness Groups We Monitor';
        $nav = 'groups';
        $corporates = $this->getGroups();
        $groups = $this->getGroupsPage();
        return view('frontend.profile', compact('title', 'nav','groups','corporates'));
    }

    public function detail(){
        $title = 'Djarum - NDPE Transparency Platform';
        $nav = 'groups';
        return view('frontend.profile', compact('title', 'nav'));
    }
}
