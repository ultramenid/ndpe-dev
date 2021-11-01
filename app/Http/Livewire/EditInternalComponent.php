<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;

class EditInternalComponent extends Component
{
    use WithFileUploads;
    public $tags = [], $urlfiles = [];
    public $mediafile, $urlfile,$idinternal, $isactive;
    public $publishdate, $contentEN, $tag, $titleEN, $titleID, $titleJP, $descEN, $descID, $descJP, $contentID, $contentJP,$uphoto, $photo;

    public function mount($idinternalnews){
        $this->idinternal = $idinternalnews;
        $data = DB::table('internalnews')->where('id', $idinternalnews)->first();
        $this->uphoto = $data->img;
        $this->publishdate = $data->publishdate;
        $this->tags = explode(',', $data->tags);
        $this->titleEN = $data->titleEN;
        $this->titleID = $data->titleID;
        $this->titleJP = $data->titleJP;
        $this->descEN = $data->descEN;
        $this->descID = $data->descID;
        $this->descJP = $data->descJP;
        $this->contentEN = $data->contentEN;
        $this->contentID = $data->contentID;
        $this->contentJP = $data->contentJP;
        $this->isactive = $data->isActive;

    }
    public function updatedMediafile($mediafile){

        $extension = pathinfo($mediafile->getFilename(), PATHINFO_EXTENSION);
        if (!in_array($extension, ['png', 'jpeg', 'bmp', 'gif','jpg','webp','pdf','docx','xlsx'])) {
           $this->reset('mediafile');
           $message = 'Files not supported';
           $type = 'error'; //error, success
           $this->emit('toast',$message, $type);
        }elseif($mediafile->getSize() > 5097152){
           $this->reset('mediafile');
           $message = 'Files must not be greater than 5MB';
           $type = 'error'; //error, success
           $this->emit('toast',$message, $type);
        }else{
            try {
                unlink(storage_path('app/public/files/'.$this->mediafile));
                $file = $this->mediafile->store('public/files/');
                $foto = $this->mediafile->hashName();
            } catch (\Throwable $th) {
                $file = $this->mediafile->store('public/files/');
                $foto = $this->mediafile->hashName();
            }
            $urlfile = asset('storage/files/'.$foto);
            array_push($this->urlfiles, $urlfile);

        }
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
         }elseif($photo->getSize() > 5097152){
            $this->reset('photo');
            $message = 'Files must not be greater than 5MB';
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
       $image = $manager->make('storage/'.$foto)->resize(600,315);
       $image->save('storage/thumbnail/'.$foto);
       return $foto;
    }

    public function storeInternal(){
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
            DB::table('internalnews')
            ->where('id', $this->idinternal)
            ->update([
                'publishdate' => $this->publishdate,
                'tags' => $this->getTags(),
                'img' => $name,
                'titleEN' => $this->titleEN,
                'titleID' => $this->titleID,
                'titleJP' => $this->titleJP,
                'descEN' => $this->descEN,
                'descID' => $this->descID,
                'descJP' => $this->descJP,
                'contentEN' => $this->contentEN,
                'contentID' => $this->contentID,
                'contentJP' => $this->contentJP,
                'isActive' => $this->isactive,
                'slugEN' => Str::slug($this->titleEN,'-'),
                'slugID' => Str::slug($this->titleID,'-'),
                'slugJP' => Str::slug($this->titleJP,'-'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ]);
            //passing to toast
            $message = 'Successfully updating internal news';
            $type = 'success'; //error, success
            $this->emit('toast',$message, $type);
        }
    }

    public function render()
    {
        return view('livewire.edit-internal-component');
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
        }elseif(strlen($this->titleEN) > 60){
            $message = 'Title english max limit 60 character';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->titleID == ''){
            $message = 'Title indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->titleID) > 60){
            $message = 'Title indonesia max limit 60 character';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->titleJP == ''){
            $message = 'Title japan is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->titleJP) > 60){
            $message = 'Title japan max limit 60 character';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->descEN == ''){
            $message = 'Description english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->descEN) > 160){
            $message = 'Description english max limit 60 character';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->descID == ''){
            $message = 'Description indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->descID) > 160){
            $message = 'Description indonesia max limit 60 character';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->descJP == ''){
            $message = 'Description japan is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->descJP) > 160){
            $message = 'Description japan max limit 60 character';
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
        }
        return true;
    }
}
