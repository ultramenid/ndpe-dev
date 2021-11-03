<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class PagesAboutComponent extends Component
{
    public $theplatformEN , $theplatformID, $theplatformJP, $ownershipEN, $ownershipID, $ownershipJP, $editorialEN, $editorialID, $editorialJP, $contentEN, $contentID, $contentJP, $timelineEN, $timelineID, $timelineJP;

    public function mount(){
        $data = DB::table('pageabout')->where('id', 1)->first();
        if($data){
            $this->theplatformEN = $data->theplatformEN;
            $this->theplatformID = $data->theplatformID;
            $this->theplatformJP = $data->theplatformJP;
            $this->ownershipEN = $data->ownershipEN;
            $this->ownershipID = $data->ownershipID;
            $this->ownershipJP = $data->ownershipJP;
            $this->editorialEN = $data->editorialEN;
            $this->editorialID = $data->editorialID;
            $this->editorialJP = $data->editorialJP;
            $this->contentEN = $data->contentEN;
            $this->contentID = $data->contentID;
            $this->contentJP = $data->contentJP;
            $this->timelineEN = $data->timelineEN;
            $this->timelineID = $data->timelineID;
            $this->timelineJP = $data->timelineJP;
        }else{
            $this->theplatformEN = '';
            $this->theplatformID = '';
            $this->theplatformJP = '';
            $this->ownershipEN = '';
            $this->ownershipID = '';
            $this->ownershipJP = '';
            $this->editorialEN = '';
            $this->editorialID = '';
            $this->editorialJP = '';
            $this->contentEN = '';
            $this->contentID = '';
            $this->contentJP = '';
            $this->timelineEN = '';
            $this->timelineID = '';
            $this->timelineJP = '';
        }
    }
    public function storeAbout(){
        if($this->manualValidation()){
        DB::table('pageabout')
            ->updateOrInsert(
                ['name' => 'about', 'id' => 1],
                [
                    'theplatformEN' => $this->theplatformEN,
                    'theplatformID' => $this->theplatformID,
                    'theplatformJP' => $this->theplatformJP,
                    'ownershipEN' => $this->ownershipEN,
                    'ownershipID' => $this->ownershipID,
                    'ownershipJP' => $this->ownershipJP,
                    'editorialEN' => $this->editorialEN,
                    'editorialID' => $this->editorialID,
                    'editorialJP' => $this->editorialJP,
                    'contentEN' => $this->contentEN,
                    'contentID' => $this->contentID,
                    'contentJP' => $this->contentJP,
                    'timelineEN' => $this->timelineEN,
                    'timelineID' => $this->timelineID,
                    'timelineJP' => $this->timelineJP
                ]
            );
        //passing to toast
        $message = 'Successfully updating page about';
        $type = 'success'; //error, success
        $this->emit('toast',$message, $type);
        }
    }

    public function render(){
        return view('livewire.pages-about-component');
    }

    public function manualValidation(){
        if($this->theplatformEN == ''){
            $message = 'The Platform english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;

        }elseif($this->theplatformID == ''){
            $message = 'The platform indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->theplatformJP == ''){
            $message = 'The platform japan is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->ownershipEN == ''){
            $message = 'Ownership english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->ownershipID == ''){
            $message = 'Ownership indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->ownershipJP == ''){
            $message = 'Ownership japan is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->editorialEN == ''){
            $message = 'Editorial english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->editorialID == ''){
            $message = 'Editorial indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->editorialJP == ''){
            $message = 'Editorial japan is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->contentEN == ''){
            $message = 'Content english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->contentID == ''){
            $message = 'Content indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->contentJP == ''){
            $message = 'Content japan is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->timelineEN == ''){
            $message = 'Timeline english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->timelineID == ''){
            $message = 'Timeline indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->timelineJP == ''){
            $message = 'Timeline japan is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }
        return true;
    }
}
