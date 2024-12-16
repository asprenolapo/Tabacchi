<?php

namespace App\Livewire;

use App\Models\Cigar;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;

class ProductForm extends Component
{
    use WithFileUploads;

    // PROPIETà DA VALIDARE
    public $name;
    public $price;
    public $madein;
    public $vitoladegalera;
    public $cepo;
    public $tripa;
    public $intensity;
    public $smoketime;
    public $flavors;
    public $bestSellers;
    public $description;
    public $img = [];

    // REGOLE DI VALIDAZIONE
    protected $rules = [
        'name' => 'required|min:5|max:40',
        'price' => 'required|numeric|min:2',
        'madein' => 'required|min:3|max:30',
        'vitoladegalera' => 'min:2|max:30',
        'cepo' => 'min:2|max:30',
        'tripa' => 'min:5',
        'intensity' => 'min:3|max:30',
        'smoketime' => 'min:2|max:30',
        'flavors'=>'min:3|max:300',
        'description' => 'required|min:5|max:300',
        'img' => 'array', // Per supportare array di file immagine
        'img.*' => 'image|max:2048|', // Ogni file deve essere un'immagine e non superare i 2MB
    ];

    // MESSAGGI DI ERRORE PERSONALIZZATI
    protected $messages = [
        'name.required' => 'Il campo nome è obbligatorio',
        'name.min' => 'Il nome deve essere lungo almeno 5 caratteri',
        'name.max' => 'Il nome non può essere più lungo di 40 caratteri',

        'price.required' => 'Il campo prezzo è obbligatorio',
        'price.numeric' => 'Il prezzo deve essere un numero',
        'price.min' => 'Il prezzo deve essere almeno 2',

        'madein.required' => 'Il campo provenienza è obbligatorio',
        'madein.min' => 'La provenienza deve essere lunga almeno 3 caratteri',
        'madein.max' => 'La provenienza non può essere più lunga di 30 caratteri',

        'tripa.required' => 'Il campo tripa è obbligatorio',
        'tripa.min' => 'La tripa deve essere almeno di 5 caratteri',

        'description.required' => 'Il campo descrizione è obbligatorio',
        'description.min' => 'La descrizione deve essere lunga almeno 5 caratteri',
        'description.max' => 'La descrizione non può essere più lunga di 300 caratteri',

        'img.*.image' => 'Il file caricato non è un\'immagine',
        'img.*.max' => 'La dimensione massima del file caricato è 2MB',
        
    ];

    // FUNZIONE PER SALVARE IL PRODOTTO
    public function save()
    {

        // VALIDAZIONE DEI DATI
        $this->validate();

        // CREA UN NUOVO CIGAR
        $cigar = Cigar::create([
            'name' => $this->name,
            'price' => $this->price,
            'madein' => $this->madein,
            'vitoladegalera' => $this->vitoladegalera,
            'cepo' => $this->cepo,
            'tripa' => $this->tripa,
            'intensity' => $this->intensity,
            'smoketime' =>$this->smoketime,
            'flavors' =>$this->flavors,
            'bestSellers' =>$this->bestSellers,
            'description' => $this->description,
            //'img'=>$this->image,
        ]);

        // ASSOCIA LE IMMAGINI SE PRESENTI 
        foreach ($this->img as $image) {
            //$path = $image->store('products', 'public');
            // Salva l'immagine e associa al prodotto
            $cigar->images()->create(['path' => $image->store('products', 'public')]);
        }

        // FLASH MESSAGE DI SUCCESSO 
        session()->flash('success', 'Articolo Aggiunto');

        // RESETTA IL FORM 
        $this->reset();
    }

    // REINDERIZZA LA VISTA LIVEWIRE
    public function render()
    {
        return view('livewire.product-form');
    }
}
