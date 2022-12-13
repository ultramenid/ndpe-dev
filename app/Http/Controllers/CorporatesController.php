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
            return 'id, name, descID as description, corporateSLUG , img , overviewEN as overview';
        }elseif(App::getLocale() == 'jp'){
            return 'id, name, descJP as description, corporateSLUG , img, overviewJP as overview';
        }else{
            return 'id, name,descEN as description, corporateSLUG , img, overviewID as overview';
        }
    }
    public function getGroups(){
        return DB::table('corporateprofile')
        ->selectRaw($this->selectGroups())
        ->get();
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

    public function index(){
        $title = 'Forestry & Agribusiness Groups We Monitor';
        $nav = 'groups';
        $corporates = $this->getGroups();
        $groups = $this->getGroupsPage();
        $footer = $this->getFooter();
        return view('frontend.profile', compact('title', 'nav','groups','corporates','footer'));
    }
    public function getSelectCorporate(){
        if (App::getLocale() == 'id') {
            return 'name, descID as description,overviewID as overview, areaID as area, ownershipID as ownership, financialID as financial, buyerID as buyer, performanceID as performance, nilai1, nilai2, img, imgmap, nilai1DescID as nilai1Desc , nilai2DescID as nilai2Desc';
        }elseif(App::getLocale() == 'jp'){
            return 'name, descJP as description,overviewJP as overview, areaJP as area, ownershipJP as ownership, financialJP as financial, buyerJP as buyer, performanceJP as performance, nilai1, nilai2, img, imgmap, nilai1DescJP as nilai1Desc, nilai2DescJP as nilai2Desc';
        }else{
            return ' name, descEN as description,overviewEN as overview, areaEN as area, ownershipEN as ownership, financialEN as financial, buyerEN as buyer, performanceEN as performance, nilai1, nilai2, img, imgmap, nilai1DescEN as nilai1Desc, nilai2DescEN as nilai2Desc';
        }
    }

    public function corporateDetail($id){
        return DB::table('corporateprofile')
                ->selectRaw($this->getSelectCorporate())
                ->where('id', $id)
                ->first();
    }

    public function detail($lang, $id, $slug){
        $id = $id;
        $slug = $slug;
        $title = $this->corporateDetail($id, $slug)->name.' - NDPE Transparency Platform';
        // dd($this->corporateDetail($id, $slug)->overview); die;
        $nav = 'groups';
        $detail = $this->corporateDetail($id, $slug);
        // dd($this->corporateDetail($id, $slug)); die;
        $footer = $this->getFooter();
        return view('frontend.detail', compact('title', 'nav', 'footer', 'detail', 'id', 'slug'));
    }
}
