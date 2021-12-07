<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CmsFooterComponent extends Component
{
    public $textEN, $textID, $textJP;

    public function mount(){
        $data = DB::table('cmsfooter')->where('id', 1)->first();
        if($data){
            $this->textEN = $data->textFooterEN;
            $this->textID = $data->textFooterID;
            $this->textJP = $data->textFooterJP;
        }else{
            $this->textEN = '';
            $this->textID = '';
            $this->textJP = '';
        }
    }
    public function storeFooter(){
        if($this->manualValidation()){
            DB::table('cmsfooter')
            ->updateOrInsert(
                ['name' => 'groups', 'id' => 1],
                [
                    'textFooterEN' => $this->textEN,
                    'textFooterID' => $this->textID,
                    'textFooterJP' => $this->textJP,
                ]
            );
        //passing to toast
        $message = 'Successfully updating footer';
        $type = 'success'; //error, success
        $this->emit('toast',$message, $type);
        }
    }
    public function render()
    {
        return view('livewire.cms-footer-component');
    }
    public function manualValidation(){
        if($this->textEN == ''){
            $message = 'text english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;

        }elseif($this->textID == ''){
            $message = 'text indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->textJP == ''){
            $message = 'text Japan is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }
        return true;
    }
}
