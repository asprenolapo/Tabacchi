<?php

namespace App\Livewire;

use App\Models\Cigar;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class ProductForm extends Component
{
    use WithFileUploads;

    #[Validate('required|min:5|max:40')]
    public $name;
    #[Validate('required|numeric|min:2')]
    public $price;
    #[Validate('required|min:5')]
    public $tripa;
    #[Validate('required|min:3|max:30')]
    public $madein;
    #[Validate('required|min:5|max:150')]
    public $description;
    // #[Validate('image|max:2048')]
    public $img = [];


    public function save()
    {
        $this->validate();
        Cigar::create([
            'name' => $this->name,
            'price' => $this->price,
            'madein' => $this->madein,
            'tripa' => $this->tripa,
            'description' => $this->description,
        ]);

        if (count($this->img) > 0) {
            foreach ($this->img as $image) {
                $this->cigar->images()->create(['path' => $image->store('products', 'public')]);
            }
        }

        session()->flash('success', 'Articolo Aggiunto');

        $this->reset();
    }
    protected $messages = [
        'name.required' => 'Il campo nome è obbligatorio',
        'name.min' => 'Il nome deve essere lungo almeno 5 caratteri',
        'name.max' => 'Il nome non può essere più lungo di 40 caratteri',

        'madein.required' => 'Il campo provenienza è obbligatorio',
        'madein.min' => 'Il provenineza deve essere lungo almeno 3 caratteri',
        'madein.max' => 'Il provenineza non può essere più lungo di 30 caratteri',

        'price.required' => 'Il campo prezzo è obbligatorio',
        'price.numeric' => 'Il prezzo deve essere un numero',
        'price.min' => 'Il prezzo deve essere almeno 2',

        'description.required' => 'Il campo descrizione è obbligatorio',
        'description.min' => 'la descrizione deve essere lunga almeno 5 caratteri',
        'description.max' => 'La descrizione non può essere più lungo di 150 caratteri',

        // 'img.image' => 'Il file caricato non è un\'immagine',
        // 'img.max' => 'La dimensione massima del file caricato è 2MB',
    ];

    public function render()
    {
        return view('livewire.product-form');
    }
}
