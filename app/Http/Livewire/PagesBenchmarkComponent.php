<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class PagesBenchmarkComponent extends Component
{
    public $benchmarkEN, $benchmarkID, $benchmarkJP, $producerEN, $producerID, $producerJP, $buyerinvestorEN, $buyerinvestorID, $buyerinvestorJP, $individualEN, $individualID, $individualJP;

    public function mount(){
        $data = DB::table('pagebenchmark')->where('id', 1)->first();
        if($data){
            $this->benchmarkEN = $data->benchmarkEN;
            $this->benchmarkID = $data->benchmarkID;
            $this->benchmarkJP = $data->benchmarkJP;
            $this->producerEN = $data->producerEN;
            $this->producerID = $data->producerID;
            $this->producerJP = $data->producerJP;
            $this->buyerinvestorEN = $data->buyerinvestorEN;
            $this->buyerinvestorID = $data->buyerinvestorID;
            $this->buyerinvestorJP = $data->buyerinvestorJP;
            $this->individualEN = $data->individualEN;
            $this->individualID = $data->individualID;
            $this->individualJP = $data->individualJP;
        }else{
            $this->benchmarkEN = '';
            $this->benchmarkID = '';
            $this->benchmarkJP = '';
            $this->producerEN = '';
            $this->producerID = '';
            $this->producerJP = '';
            $this->buyerinvestorEN = '';
            $this->buyerinvestorID = '';
            $this->buyerinvestorJP = '';
            $this->individualEN = '';
            $this->individualID = '';
            $this->individualJP = '';
        }
    }

    public function storeBenchmark(){
        if($this->manualValidation()){
        DB::table('pagebenchmark')
            ->updateOrInsert(
                ['name' => 'benchmark', 'id' => 1],
                [
                    'benchmarkEN' => $this->benchmarkEN,
                    'benchmarkID' => $this->benchmarkID,
                    'benchmarkJP' => $this->benchmarkJP,
                    'producerEN' => $this->producerEN,
                    'producerID' => $this->producerID,
                    'producerJP' => $this->producerJP,
                    'buyerinvestorEN' => $this->buyerinvestorEN,
                    'buyerinvestorID' => $this->buyerinvestorID,
                    'buyerinvestorJP' => $this->buyerinvestorJP,
                    'individualEN' => $this->individualEN,
                    'individualID' => $this->individualID,
                    'individualJP' => $this->individualJP
                ]
            );
        //passing to toast
        $message = 'Successfully updating page benchmark';
        $type = 'success'; //error, success
        $this->emit('toast',$message, $type);
        }
    }
    public function render()
    {
        return view('livewire.pages-benchmark-component');
    }

    public function manualValidation(){
        if($this->benchmarkEN == ''){
            $message = 'Benchmark english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;

        }elseif($this->benchmarkID == ''){
            $message = 'Benchmark indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->benchmarkJP == ''){
            $message = 'Benchmark japan is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->producerEN == ''){
            $message = 'For Producer english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->producerID == ''){
            $message = 'For Producer indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->producerJP == ''){
            $message = 'For Producer japan is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->buyerinvestorEN == ''){
            $message = 'For Buyer & Investor english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->buyerinvestorID == ''){
            $message = 'For Buyer & Investor indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->buyerinvestorJP == ''){
            $message = 'For Buyer & Investor japan is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->individualEN == ''){
            $message = 'For Individual english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->individualID == ''){
            $message = 'For Individual indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->individualJP == ''){
            $message = 'For Individual japan is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }
        return true;
    }
}
