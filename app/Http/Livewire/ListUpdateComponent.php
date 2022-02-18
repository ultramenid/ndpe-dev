<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ListUpdateComponent extends Component
{
    public $list = 10;
    public function getSelecteksternal(){
        if (App::getLocale() == 'id') {
            return 'id, titleID as title, slugID as slug, img, publishdate, sourcename,sourceurl, descID as description, tags';
        }elseif(App::getLocale() == 'jp'){
            return 'id, titleJP as title, slugJP as slug, img,publishdate, sourcename, sourceurl, descJP as description, tags';
        }else{
            return 'id, titleEN as title, slugEN as slug, img,publishdate, sourcename,  sourceurl, descEN as description, tags';
        }
    }

    public function getContenteksternal(){
        return DB::table('eksternalnews')
        ->selectRaw($this->getSelecteksternal())
        ->where('publishdate', '<', Carbon::now('Asia/Jakarta'))
        ->where('isActive', 1)
        ->orderBy('publishdate','desc')
        ->cursorPaginate($this->list);
    }


    public function getMore(){
         $this->list += 10;
    }
    public function render()
    {
        $eksternals = $this->getContenteksternal();
        return view('livewire.list-update-component', compact('eksternals'));
    }
}
