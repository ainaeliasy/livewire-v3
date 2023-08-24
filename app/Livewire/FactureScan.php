<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use thiagoalessio\TesseractOCR\TesseractOCR;

class FactureScan extends Component
{

    use WithFileUploads;
 
    #[Rule('image|max:1024')] // 1MB Max
    public $photo;

    public $text;

    public $availableLang;
 
    public function save()
    {
        foreach((new TesseractOCR())->availableLanguages() as $lang) $this->availableLang.='_'.$lang;
        $path=$this->photo->store('photos');
        $this->text=((new TesseractOCR(Storage::disk('local')->path($path)))->lang('eng', 'fra', 'frm')->run());
    }

    public function render()
    {
        return view('livewire.facture-scan');
    }
}
