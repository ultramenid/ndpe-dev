<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Toastr extends Component
{
    public $toast = false, $toastType;
    public  $notification = [], $hasNotification = 0;

    protected $listeners = ['toast' => 'showToast'] ;

    public function showToast($message, $type){
        $this->toast = true;

        $nilai = $this->hasNotification + 1;
        $this->hasNotification = $nilai;

        array_push($this->notification, [
            'message' => $message,
            'type' =>  $type
        ]);
    }

    public function closeToast($id){
        unset($this->notification[$id]);
    }

    public function render()
    {
        return view('livewire.toastr');
    }
}
