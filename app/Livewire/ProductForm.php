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
    public $brand;
    public $price;
    public $madein;
    public $origin_description;
    public $manufacturing;
    public $band;
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
        'name' => 'required|min:3|max:80',
        'brand' => 'min:3|max:80',
        'price' => 'required|numeric|min:0.01|max:9999.99',  // Limite per decimal(6, 2)
        'madein' => 'required|in:Italia,Estero,Altro',
        'origin_description' => 'min:3|max:80',
        'manufacturing' => 'min:3|max:80',
        'intensity' => 'min:3|max:80',
        'smoketime' => 'numeric|min:0|max:999',
        'flavors' => 'min:3|max:80',
        'packaging' => 'nullable|integer|min:1|max:99',  // Gestione packaging
        'description' => 'required|min:5|max:6000',
        'img' => 'array|max:4',
        'img.*' => 'image|max:2048|',
    ];

    // MESSAGGI DI ERRORE PERSONALIZZATI
    protected $messages = [
        'name.required' => 'Il campo nome è obbligatorio.',
        'name.min' => 'Il nome deve essere lungo almeno 3 caratteri.',
        'name.max' => 'Il nome non può essere più lungo di 80 caratteri.',

        'brand.min' => 'Il brand non può essere più lungo di 80 caratteri.',
        'brand.max' => 'Il brand non può essere più lungo di 80 caratteri.',

        'price.required' => 'Il campo prezzo è obbligatorio.',
        'price.numeric' => 'Il prezzo deve essere un numero.',
        'price.min' => 'Il prezzo deve essere almeno 0.01',
        'price.max' => 'Il prezzo non può essere maggiore di 9999.99',

        'madein.required' => 'Il campo provenienza è obbligatorio.',
        'origin_description.min' => 'La  descrizione della provenienza deve essere lunga almeno 3 caratteri.',
        'origin_description.max' => 'La  descrizione della provenienza non può essere più lunga di 80 caratteri.',

        'manufacturing.min' => 'La manifattura deve essere lunga almeno 3 caratteri',
        'manufacturing.max' => 'La manifattura non può essere più lunga di 80 caratteri',

        'intensity.min' => 'L\'intensità deve essere lunga almeno 3 caratteri.',
        'intensity.max' => 'L\'intensità non può essere più lunga di 80 caratteri.',

        'smoketime.numeric' => 'Il tempo di fumata deve essere un numero',
        'smoketime.min' => 'Il tempo di fumata deve essere almeno 0 minuto.',
        'smoketime.max' => 'Il tempo di fumata non può essere più di 999 minuti.',

        'flavors.min' => 'Il campo forma deve essere lungo almeno 3 caratteri.',
        'flavors.max' => 'Il campo forma non può essere più lungo di 80 caratteri.',

        'packaging.min' => 'La confezione deve contenere almeno 1 sigaro.',
        'packaging.max' => 'La confezione non può contenere più di 99 sigari.',

        'description.required' => 'Il campo descrizione è obbligatorio.',
        'description.min' => 'La descrizione deve essere lunga almeno 5 caratteri.',
        'description.max' => 'La descrizione non può essere più lunga di 6000 caratteri.',

        'img.array' => 'Devi caricare una serie di immagini.',
        'img.max' => 'Puoi caricare un massimo di 4 immagini.',

        'img.*.image' => 'Il file caricato deve essere un\'immagine.',
        'img.*.max' => 'Ogni immagine non può superare i 2MB.',
    ];

    // FUNZIONE PER FORMATTARE IL PREZZO
    public function formatPrice($price)
    {
        // Sostituisce la virgola con il punto
        $price = str_replace(',', '.', $price);

        // Assicura che il prezzo sia valido come numero decimale
        if (!is_numeric($price)) {
            session()->flash('error', 'Il prezzo non è valido. Deve essere un numero.');
            return false;
        }

        // Ritorna il prezzo con due decimali
        return number_format($price, 2, '.', '');
    }

    // FUNZIONE PER SALVARE IL PRODOTTO
    public function save()
    {
        // Assicuriamoci che il prezzo sia nel formato corretto (decimale)
        $this->price = $this->formatPrice($this->price);

        if ($this->price === false) {
            return; // Se il prezzo non è valido, fermiamo l'esecuzione
        }
        // VALIDAZIONE DEI DATI
        $this->validate();

        // CREA UN NUOVO CIGAR
        $cigar = Cigar::create([
            'name' => $this->name,
            'brand' => $this->brand,
            'price' => $this->price,
            'madein' => $this->madein,
            'origin_description' => $this->origin_description,
            'manufacturing' => $this->manufacturing,
            'band' => $this->band,
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
