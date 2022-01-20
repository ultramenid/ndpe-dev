<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManager;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class EditEksternalComponent extends Component
{
    use WithFileUploads;
    public $tags = [], $urlfiles = [];
    public $mediafile, $urlfile,$idinternal, $isactive, $sourcename, $sourceurl;
    public $publishdate, $tag, $titleEN, $titleID, $titleJP, $descEN, $descID, $descJP,$uphoto, $photo;

    public function mount($ideksternalnews){
        $this->idinternal = $ideksternalnews;
        $data = DB::table('eksternalnews')->where('id', $ideksternalnews)->first();
        $this->uphoto = $data->img;
        $this->sourcename = $data->sourcename;
        $this->sourceurl = $data->sourceurl;
        $this->publishdate = $data->publishdate;
        $this->tags = explode(',', $data->tags);
        $this->titleEN = $data->titleEN;
        $this->titleID = $data->titleID;
        $this->titleJP = $data->titleJP;
        $this->descEN = $data->descEN;
        $this->descID = $data->descID;
        $this->descJP = $data->descJP;
        $this->isactive = $data->isActive;

    }
    //realtime validation upload
    public function updatedPhoto($photo)
    {
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

    public function uploadImage(){
        $file = $this->photo->store('public');
       $foto = $this->photo->hashName();

       $manager = new ImageManager();

       //http://image.intervention.io/api/fit
       //crop the best fitting 1:1 ratio (200x200) and resize to 200x200 pixel
       $image = $manager->make('storage/'.$foto)->fit(600,315);
       $image->save('storage/thumbnail/'.$foto);
       return $foto;
    }
    public function storeEksternal(){
        if($this->manualValidation()){
            if(!$this->photo){
                $name = $this->uphoto;
            }else{
                try {
                    unlink(storage_path('app/public/'.$this->uphoto));
                     unlink(storage_path('app/public/thumbnail/'.$this->uphoto));
                     $name=  $this->uploadImage();
                } catch (\Throwable $th) {
                   $name=  $this->uploadImage();
                }

            }
            DB::table('eksternalnews')
            ->where('id', $this->idinternal)
            ->update([
                'publishdate' => $this->publishdate,
                'tags' => $this->getTags(),
                'img' => $name,
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
                'updated_at' => Carbon::now('Asia/Jakarta')
            ]);
            //passing to toast
            $message = 'Successfully editing updates';
            $type = 'success'; //error, success
            $this->emit('toast',$message, $type);
        }
    }
    public function render()
    {
        return view('livewire.edit-eksternal-component');
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
