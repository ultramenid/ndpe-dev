<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class CallController extends Controller
{

    public function getSelect(){
        if (App::getLocale() == 'id') {
            return 'id,benchmarkID as benchmark, producerID as producer, buyerinvestorID as buyerinvestor, individualID as individual';
        }elseif(App::getLocale() == 'jp'){
            return 'id,benchmarkJP as benchmark, producerJP as producer, buyerinvestorJP as buyerinvestor, individualJP as individual';
        }else{
            return 'id,benchmarkEN as benchmark, producerEN as producer, buyerinvestorEN as buyerinvestor, individualEN as individual';
        }
    }
    public function getBenchmarkpage(){
        return DB::table('pagebenchmark')
                ->selectRaw($this->getSelect())
                ->where('id', 1)
                ->first();
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
        $benchmark = $this->getBenchmarkpage();
        $title = 'Benchmark - NDPE Transparency Platform';
        $nav = 'benchmark';
        $footer = $this->getFooter();
        return view('frontend.call', compact('title','nav','benchmark', 'footer'));
    }
}
