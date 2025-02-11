<?php

namespace App\Livewire;

use App\Models\Cigar;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class ProductForm extends Component
{
    use WithFileUploads;

    // PROPRIETÀ DA VALIDARE
    public $name;
    public $price;
    public $madein;
    public $origin_description;
    public $manufacturing;
    public $vitoladegalera;
    public $cepo;
    public $tripa;
    public $intensity;
    public $smoketime;
    public $flavors;
    public $bestSellers;
    public $description;
    public $img = [];
    public $delete_images = []; // Per memorizzare gli ID delle immagini da eliminare

    public $packaging;

    // REGOLE DI VALIDAZIONE
    protected $rules = [
        'name' => 'required|min:3|max:40',
        'price' => 'required|numeric|min:1',
        'madein' => 'required|in:Italia,Estero,Altro',
        'origin_description'=>'min:3|max:50',
        'manufacturing'=>'min:3|max:50',
        'intensity' => 'min:3|max:30',
        'smoketime' => 'numeric|min:0|max:999',
        'flavors' => 'min:3|max:50',
        'packaging' => 'nullable|integer|min:1|max:99',  // Gestione packaging
        'description' => 'required|min:5|max:5000',
        'img' => 'array|max:4',
        'img.*' => 'image|max:2048|',
    ];

    // MESSAGGI DI ERRORE PERSONALIZZATI
    protected $messages = [
        'name.required' => 'Il campo nome è obbligatorio.',
        'name.min' => 'Il nome deve essere lungo almeno 3 caratteri.',
        'name.max' => 'Il nome non può essere più lungo di 40 caratteri.',

        'price.required' => 'Il campo prezzo è obbligatorio.',
        'price.numeric' => 'Il prezzo deve essere un numero.',
        'price.min' => 'Il prezzo deve essere almeno 1.00',

        'madein.required' => 'Il campo provenienza è obbligatorio.',
        'origin_description.min' => 'La  descrizione della provenienza deve essere lunga almeno 3 caratteri.',
        'origin_description.max' => 'La  descrizione della provenienza non può essere più lunga di 50 caratteri.',

        'manufacturing.min' => 'La manifattura deve essere lunga almeno 3 caratteri',
        'manufacturing.max' => 'La manifattura non può essere più lunga di 50 caratteri',

        'intensity.min' => 'L\'intensità deve essere lunga almeno 3 caratteri.',
        'intensity.max' => 'L\'intensità non può essere più lunga di 30 caratteri.',

        'smoketime.numeric' => 'Il tempo di fumata deve essere un numero',
        'smoketime.min' => 'Il tempo di fumata deve essere almeno 0 minuto.',
        'smoketime.max' => 'Il tempo di fumata non può essere più di 999 minuti.',

        'flavors.min' => 'Il campo forma deve essere lungo almeno 3 caratteri.',
        'flavors.max' => 'Il campo forma non può essere più lungo di 50 caratteri.',

        'packaging.min' => 'La confezione deve contenere almeno 1 sigaro.',
        'packaging.max' => 'La confezione non può contenere più di 99 sigari.',

        'description.required' => 'Il campo descrizione è obbligatorio.',
        'description.min' => 'La descrizione deve essere lunga almeno 5 caratteri.',
        'description.max' => 'La descrizione non può essere più lunga di 5000 caratteri.',

        'img.array' => 'Devi caricare una serie di immagini.',
        'img.max' => 'Puoi caricare un massimo di 4 immagini.',

        'img.*.image' => 'Il file caricato deve essere un\'immagine.',
        'img.*.max' => 'Ogni immagine non può superare i 2MB.',
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
            'origin_description'=> $this->origin_description,
            'manufacturing' => $this->manufacturing,
            'vitoladegalera' => $this->vitoladegalera,
            'cepo' => $this->cepo,
            'tripa' => $this->tripa,
            'intensity' => $this->intensity,
            'smoketime' => $this->smoketime,
            'flavors' => $this->flavors,
            'bestSellers' => $this->bestSellers == null ? '0' : $this->bestSellers,
            'description' => $this->description,
            'packaging' => $this->packaging == null ? '0' : $this->packaging,
        ]);

        // COUNTER DEL MAX IMG - ASSOCIA LE IMMAGINI SE PRESENTI
        if (count($this->img) < 5) {
            foreach ($this->img as $image) {
                $cigar->images()->create(['path' => $image->store('products', 'public')]);
            }
        }

        // FLASH MESSAGE DI SUCCESSO
        session()->flash('success', 'Articolo Aggiunto Con Successo');

        // RESETTA IL FORM
        $this->reset();
    }
    // RENDERIZZA LA VISTA LIVEWIRE
    public function render()
    {
        return view('livewire.product-form');
    }
}
