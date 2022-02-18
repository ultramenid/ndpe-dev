<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ListTagComponent extends Component
{

    public $tagg, $paginateLimit = 10;

    public function mount($tag){
        $this->tagg = $tag;
    }
    public function getMore(){
        $this->paginateLimit +=1;
    }
    public function getSelectInternal(){
        if (App::getLocale() == 'id') {
            return 'id, titleID as title, slugID as slug, img, publishdate, sourcename,sourceurl, descID as description, tags';
        }elseif(App::getLocale() == 'jp'){
            return 'id, titleJP as title, slugJP as slug, img,publishdate, sourcename, sourceurl, descJP as description, tags';
        }else{
            return 'id, titleEN as title, slugEN as slug, img,publishdate, sourcename,  sourceurl, descEN as description, tags';
        }
    }
    public function getTags(){
        try{
            $tag = DB::table('eksternalnews')
            ->selectRaw($this->getSelectInternal())
            ->whereRaw("CONCAT(',', tags, ',') like '%,".$this->tagg.",%' and publishdate <= '".Carbon::now('Asia/Jakarta')."' and isActive = 1")
            ->orderByDesc('publishdate')
            ->cursorPaginate($this->paginateLimit);
        } catch (\Throwable $th) {
            $tag = [];
        }
        return $tag;
    }
    public function render()
    {
        $tags = $this->getTags();
        // dd($tags);die;
        return view('livewire.list-tag-component', compact('tags'));
    }
}
