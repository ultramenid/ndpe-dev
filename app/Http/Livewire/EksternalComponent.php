<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class EksternalComponent extends Component
{
    use WithPagination;
    public $deleter = false;
    public $deleteName, $deleteID;
    public $dataField = 'titleEN', $dataOrder = 'asc', $paginate = 10, $search = '';
    public function sortingField($field){
        $this->dataField = $field;
        $this->dataOrder = $this->dataOrder == 'asc' ? 'desc' : 'asc';
    }
    public function geteksternalnews(){
        $sc = '%' . $this->search . '%';
        try {
            return  DB::table('eksternalnews')
                        ->select('id', 'titleEN', 'tags', 'img', 'isActive')
                        ->where('titleEN', 'like', $sc)
                        ->orderBy($this->dataField, $this->dataOrder)
                        ->paginate($this->paginate);
        } catch (\Throwable $th) {
            return [];
        }
    }
    public function delete($id){

        //load data to delete function
        $dataDelete = DB::table('eksternalnews')->where('id', $id)->first();
        $this->deleteName = $dataDelete->titleEN;
        $this->deleteID = $dataDelete->id;

        $this->deleter = true;
    }
    public function deleting($id){
        DB::table('eksternalnews')->where('id', $id)->delete();

        $message = 'Successfully deleting internal news';
        $type = 'success'; //error, success
        $this->emit('toast',$message, $type);


        $this->closeDelete();
    }

    public function closeDelete(){
        $this->deleter = false;
        $this->deleteName = null;
        $this->deleteID = null;
    }



    public function render()
    {
        $eksternalnews = $this->geteksternalnews();
        return view('livewire.eksternal-component',compact('eksternalnews'));
    }
}
