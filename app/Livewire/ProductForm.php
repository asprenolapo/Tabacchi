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
    public $delete_images = []; //Per memorizzare gli ID delle immagini da eliminare

    public $packaging;

    // REGOLE DI VALIDAZIONE
    protected $rules = [
        'name' => 'required|min:5|max:40',
        'price' => 'required|numeric|min:2',
        'madein' => 'required|min:3|max:30',
        'intensity' => 'min:3|max:30',
        'smoketime' => 'min:2|max:30',
        'flavors' => 'min:3|max:300',
        // 'packaging'=>'required|min:1|max:100',
        'description' => 'required|min:5|max:300',
        'img' => 'array|max:4',
        'img.*' => 'image|max:2048|',
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

        'intensity.min' => 'Intensità deve essere lunga almeno 3 caratteri',
        'intensity.max' => 'Intensità non può essere più lunga di 30 caratteri',

        'smoketime.min' => 'Il tempo di fumata deve essere almeno 2 numeri',
        'smoketime.max' => 'Il tempo di fumata non può essere più lungo di 30 numeri',

        // 'packaging.required' => 'La quantità della confezione è richiesta',
        // 'packaging.min' => 'La confezione deve essere minimo di un sigaro',
        // 'packaging.max' => 'La confezione non può contenere piu di 99 sigari',

        'flavors.min' => 'Aroma deve essere lunga almeno 3 caratteri',
        'flavors.max' => 'Aroma non può essere più lunga di 30 caratteri',

        'description.required' => 'Il campo descrizione è obbligatorio',
        'description.min' => 'La descrizione deve essere lunga almeno 5 caratteri',
        'description.max' => 'La descrizione non può essere più lunga di 300 caratteri',

        'img.*.image' => 'Il file caricato non è un\'immagine',
        'img.*.max' => 'La dimensione massima del file caricato è 2MB',
        'img.max' => 'Puoi caricare un massimo di 4 immagini.',

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
            'smoketime' => $this->smoketime,
            'flavors' => $this->flavors,
            'bestSellers' => $this->bestSellers,
            'description' => $this->description,
            'packaging' => $this->packaging,
        ]);

        //COUNTER DEL MAX IMG-ASSOCIA LE IMMAGINI SE PRESENTI 
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

    // REINDERIZZA LA VISTA LIVEWIRE
    public function render()
    {
        return view('livewire.product-form');
    }
}
