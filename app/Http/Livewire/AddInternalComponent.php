<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;


class AddInternalComponent extends Component
{
    use WithFileUploads;
    public $publishdate, $contentEN, $tag, $titleEN, $titleID, $titleJP, $descEN, $descID, $descJP, $contentID, $contentJP, $photo;
    public $tags = [], $urlfiles = [];
    public $mediafile, $urlfile, $isactive = 1;

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
    public function updatedMediafile($mediafile){

        $extension = pathinfo($mediafile->getFilename(), PATHINFO_EXTENSION);
        if (!in_array($extension, ['png', 'jpeg', 'bmp', 'gif','jpg','webp','pdf','docx','xlsx'])) {
           $this->reset('mediafile');
           $message = 'Files not supported';
           $type = 'error'; //error, success
           $this->emit('toast',$message, $type);
        }elseif($mediafile->getSize() > 8097152){
           $this->reset('mediafile');
           $message = 'Files must not be greater than 8MB';
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

    public function storeInternal(){
        if($this->manualValidation()){
            DB::table('internalnews')->insert([
                'publishdate' => $this->publishdate,
                'tags' => $this->getTags(),
                'img' => $this->uploadImage(),
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
                'created_at' => Carbon::now('Asia/Jakarta')
            ]);
            redirect()->to('/cms/internal');
        }
    }
    public function render()
    {
        return view('livewire.add-internal-component');
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
