<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use thiagoalessio\TesseractOCR\TesseractOCR;

class FactureScan extends Component
{

    use WithFileUploads;
 
    #[Rule('image|max:1024')] // 1MB Max
    public $photo;

    public $text;
 
    public function save()
    {
        dd((new TesseractOCR($this->photo->temporaryUrl()))->run());
        $this->photo->store('photos');
    }

    public function render()
    {
        return view('livewire.facture-scan');
    }
}
