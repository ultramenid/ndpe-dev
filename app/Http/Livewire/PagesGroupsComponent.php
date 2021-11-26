<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class PagesGroupsComponent extends Component
{
    public $textGroupsEN, $textGroupsID, $textGroupsJP;

    public function mount(){
        $data = DB::table('pagegroups')->where('id', 1)->first();
        if($data){
            $this->textGroupsEN = $data->textGroupsEN;
            $this->textGroupsID = $data->textGroupsID;
            $this->textGroupsJP = $data->textGroupsJP;
        }else{
            $this->textGroupsEN = '';
            $this->textGroupsID = '';
            $this->textGroupsJP = '';
        }
    }

    public function storeGroups(){
        if($this->manualValidation()){
            DB::table('pagegroups')
            ->updateOrInsert(
                ['name' => 'groups', 'id' => 1],
                [
                    'textGroupsEN' => $this->textGroupsEN,
                    'textGroupsID' => $this->textGroupsID,
                    'textGroupsJP' => $this->textGroupsJP,
                ]
            );
        //passing to toast
        $message = 'Successfully updating page groups';
        $type = 'success'; //error, success
        $this->emit('toast',$message, $type);
        }
    }
    public function render()
    {
        return view('livewire.pages-groups-component');
    }

    public function manualValidation(){
        if($this->textGroupsEN == ''){
            $message = 'text english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;

        }elseif($this->textGroupsID == ''){
            $message = 'text indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->textGroupsJP == ''){
            $message = 'text Japan is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }
        return true;
    }


}
