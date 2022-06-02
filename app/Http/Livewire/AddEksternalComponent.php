<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManager;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class AddEksternalComponent extends Component
{
    use WithFileUploads;
    public $publishdate, $tag, $titleEN, $titleID, $titleJP, $descEN, $descID, $descJP, $photo;
    public $tags = [], $urlfiles = [];
    public $mediafile, $urlfile, $isactive = 1, $sourcename, $sourceurl;

    public function uploadImage(){
        $file = $this->photo->store('public/files/photos');
        $foto = $this->photo->hashName();

        $manager = new ImageManager();

        // https://image.intervention.io/v2/api/fit
        //crop the best fitting 1:1 ratio (200x200) and resize to 200x200 pixel
        $image = $manager->make('storage/files/photos/'.$foto)->fit(600, 360);
        $image->save('storage/files/photos/thumbnail/'.$foto);
        return $foto;
    }
    public function updatedPhoto($photo){
        $extension = pathinfo($photo->getFilename(), PATHINFO_EXTENSION);
        if (!in_array($extension, ['png', 'jpeg', 'bmp', 'gif','jpg','webp'])) {
           $this->reset('photo');
           $message = 'Files not supported';
           $type = 'error'; //error, success
           $this->emit('toast',$message, $type);
        }elseif($photo->getSize() > 8097152){
           $this->reset('photo');
           $message = 'Files must not be greater than 8MB';
           $type = 'error'; //error, success
           $this->emit('toast',$message, $type);
        }
    }
    public function addTags(){
        array_push($this->tags, $this->tag);
        $this->tag = '';
    }
    public function deleteTags($id){
        unset($this->tags[$id]);
    }
    public function getTags(){
        return implode(',', $this->tags);
    }
    public function storeEksternal(){
        if($this->manualValidation()){
            if($this->manualValidation()){
                DB::table('eksternalnews')->insert([
                    'publishdate' => $this->publishdate,
                    'tags' => $this->getTags(),
                    'img' => $this->uploadImage(),
                    'sourcename' => $this->sourcename,
                    'sourceurl' => $this->sourceurl,
                    'titleEN' => $this->titleEN,
                    'titleID' => $this->titleID,
                    'titleJP' => $this->titleJP,
                    'descEN' => $this->descEN,
                    'descID' => $this->descID,
                    'descJP' => $this->descJP,
                    'isActive' => $this->isactive,
                    'slugEN' => Str::slug($this->titleEN,'-'),
                    'slugID' => Str::slug($this->titleID,'-'),
                    'slugJP' => Str::slug($this->titleJP,'-'),
                    'created_at' => Carbon::now('Asia/Jakarta')
                ]);
                redirect()->to('/cms/eksternal');
            }
        }
    }
    public function render()
    {
        return view('livewire.add-eksternal-component');
    }
    public function manualValidation(){
        if($this->publishdate == ''){
            $message = 'Publish date is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->tags == []){
            $message = 'Tags is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->titleEN == ''){
            $message = 'Title english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->sourcename == ''){
            $message = 'Source name is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->sourceurl == ''){
            $message = 'Source url is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->sourcename) > 60){
            $message = 'Source name max limit 60 character';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->sourceurl) > 255){
            $message = 'Source url max limit 255 character';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->titleEN) > 120){
            $message = 'Title english max limit 120 character';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->titleID == ''){
            $message = 'Title indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->titleID) > 120){
            $message = 'Title indonesia max limit 120 character';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->titleJP == ''){
            $message = 'Title japan is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->titleJP) > 120){
            $message = 'Title japan max limit 120 character';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->descEN == ''){
            $message = 'Description english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->descEN) > 160){
            $message = 'Description english max limit 160 character';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->descID == ''){
            $message = 'Description indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->descID) > 160){
            $message = 'Description indonesia max limit 160 character';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->descJP == ''){
            $message = 'Description japan is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->descJP) > 160){
            $message = 'Description japan max limit 160 character';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }
        return true;
    }
}
