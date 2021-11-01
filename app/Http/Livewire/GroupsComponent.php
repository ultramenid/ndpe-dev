<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class GroupsComponent extends Component
{

    public $deleter = false;
    public $deleteName, $deleteID;
    public $dataField = 'name', $dataOrder = 'asc', $paginate = 10, $search = '';
    public function sortingField($field){
        $this->dataField = $field;
        $this->dataOrder = $this->dataOrder == 'asc' ? 'desc' : 'asc';
    }

    public function delete($id){

        //load data to delete function
        $dataDelete = DB::table('corporateprofile')->where('id', $id)->first();
        $this->deleteName = $dataDelete->name;
        $this->deleteID = $dataDelete->id;

        $this->deleter = true;
    }
    public function deleting($id){
        DB::table('corporateprofile')->where('id', $id)->delete();

        $message = 'Successfully deleting corporate';
        $type = 'success'; //error, success
        $this->emit('toast',$message, $type);


        $this->closeDelete();
    }

    public function closeDelete(){
        $this->deleter = false;
        $this->deleteName = null;
        $this->deleteID = null;
    }
    public function getCorporates(){
        $sc = '%' . $this->search . '%';
        try {
            return  DB::table('corporateprofile')
                        ->where('name', 'like', $sc)
                        ->orderBy($this->dataField, $this->dataOrder)
                        ->paginate($this->paginate);
        } catch (\Throwable $th) {
            return [];
        }
    }
    public function render()
    {
        $corporates = $this->getCorporates();
        return view('livewire.groups-component', compact('corporates'));
    }
}
