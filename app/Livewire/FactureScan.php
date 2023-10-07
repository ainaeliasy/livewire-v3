<?php

namespace App\Livewire;

use OpenAI;
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

    public $mapping;
 
    public function save()
    {

        $apiKey = config('openai.api_key');
        $client = OpenAI::client($apiKey);
        
        foreach((new TesseractOCR())->availableLanguages() as $lang) $this->availableLang.='_'.$lang;
        $path=$this->photo->store('photos');
        $this->text=((new TesseractOCR(Storage::disk('local')->path($path)))->lang('eng', 'fra', 'frm')->run());
        $result = $client->completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => "Extrait les éléments important sortie par le scan de mon OCR suivant: ".$this->text,
        ]);
        
        $this->mapping= $result['choices'][0]['text'];
    }

    public function render()
    {
        return view('livewire.facture-scan');
    }
}
