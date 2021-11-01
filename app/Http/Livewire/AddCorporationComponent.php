<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;



class AddCorporationComponent extends Component
{
    use WithFileUploads;
    public $tags = [], $urlfiles = [];
    public $mediafile, $urlfile;
    public $photo, $corporatename, $descEN, $descID, $descJP, $overviewEN, $overviewID, $overviewJP, $areaEN, $areaID, $areaJP, $ownershipEN, $ownershipID, $ownershipJP, $financialEN, $financialID, $financialJP, $buyerEN, $buyerID, $buyerJP, $performanceEN, $performanceID, $performanceJP, $deforestation, $bioloss, $peatlanddestruct, $socialconflict, $value1, $value2;

    public function uploadImage(){
        $file = $this->photo->store('public');
       $foto = $this->photo->hashName();

       $manager = new ImageManager();

       //http://image.intervention.io/api/fit
       //crop the best fitting 1:1 ratio (200x200) and resize to 200x200 pixel
       $image = $manager->make('storage/'.$foto)->resize(240, null, function ($constraint) {
        $constraint->aspectRatio();
        });
       $image->save('storage/thumbnail/'.$foto);
       return $foto;
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
    public function storeCorporate(){
        if($this->manualValidation()){
            DB::table('corporateprofile')->insert([
                'name' => $this->corporatename,
                'corporateSLUG' => Str::slug($this->corporatename,'-'),
                'img' => $this->uploadImage(),
                'descEN' => $this->descEN,
                'descID' => $this->descID,
                'descJP' => $this->descJP,
                'overviewEN' => $this->overviewEN,
                'overviewID' => $this->overviewID,
                'overviewJP' => $this->overviewJP,
                'areaEN' => $this->areaEN,
                'areaID' => $this->areaID,
                'areaJP' => $this->areaJP,
                'ownershipEN' => $this->ownershipEN,
                'ownershipID' => $this->ownershipID,
                'ownershipJP' => $this->ownershipJP,
                'financialEN' => $this->financialEN,
                'financialID' => $this->financialID,
                'financialJP' => $this->financialJP,
                'buyerEN' => $this->buyerEN,
                'buyerID' => $this->buyerID,
                'buyerJP' => $this->buyerJP,
                'performanceEN' => $this->performanceEN,
                'performanceID' => $this->performanceID,
                'performanceJP' => $this->performanceJP,
                'deforestation' => $this->deforestation,
                'biodiversityloss' => $this->bioloss,
                'peatlanddestruc' => $this->peatlanddestruct,
                'socialconflict' => $this->socialconflict,
                'nilai1' => $this->value1,
                'nilai2' => $this->value2,
                'created_at' => Carbon::now('Asia/Jakarta')
            ]);
            redirect()->to('/cms/groups');
        };

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

    public function render()
    {
        return view('livewire.add-corporation-component');
    }

    public function manualValidation(){
        if($this->corporatename == ''){
            $message = 'Corporate name is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;

        }elseif(strlen($this->corporatename) > 60){
            $message = 'Corporate name max limit 60 character';
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
        }elseif($this->overviewEN == ''){
            $message = 'Overview english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->photo == ''){
            $message = 'Corporate logo is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->areaEN == ''){
            $message = 'Area english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }
        elseif($this->areaID == ''){
            $message = 'Area indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }
        elseif($this->areaJP == ''){
            $message = 'Area japan is required';
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
        }elseif($this->financialEN == ''){
            $message = 'Financial english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->financialID == ''){
            $message = 'Financial indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->financialJP == ''){
            $message = 'Financial japan is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }
        elseif($this->buyerEN == ''){
            $message = 'Buyer english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->buyerID == ''){
            $message = 'Buyer indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->buyerJP == ''){
            $message = 'Buyer japan is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->performanceEN == ''){
            $message = 'Performance english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->performanceID == ''){
            $message = 'Performance indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->performanceJP == ''){
            $message = 'Performance japan is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->deforestation == ''){
            $message = 'Deforestation is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->bioloss == ''){
            $message = 'Biodiversity Loss is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->peatlanddestruct == ''){
            $message = 'Peatland Destruction is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->socialconflict == ''){
            $message = 'Social Conflict is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }
        return true;
    }
}
