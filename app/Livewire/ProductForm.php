<?php

namespace App\Livewire;

use App\Models\Cigar;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;

class ProductForm extends Component
{
    use WithFileUploads;

    // Le proprietà da validare
    public $name;
    public $price;
    public $tripa;
    public $madein;
    public $description;
<<<<<<< HEAD
    public $img = [];
=======
    #[Validate('image|max:2048')]
    public $images = [];
>>>>>>> 83b0b27db5525fd47f64f252581a6378505866cf

    // Le regole di validazione
    protected $rules = [
        'name' => 'required|min:5|max:40',
        'price' => 'required|numeric|min:2',
        'tripa' => 'required|min:5',
        'madein' => 'required|min:3|max:30',
        'description' => 'required|min:5|max:150',
        'img' => 'array', // Per supportare array di file immagine
        'img.*' => 'image|max:2048', // Ogni file deve essere un'immagine e non superare i 2MB
    ];

    // Messaggi di errore personalizzati
    protected $messages = [
        'name.required' => 'Il campo nome è obbligatorio',
        'name.min' => 'Il nome deve essere lungo almeno 5 caratteri',
        'name.max' => 'Il nome non può essere più lungo di 40 caratteri',

        'madein.required' => 'Il campo provenienza è obbligatorio',
        'madein.min' => 'La provenienza deve essere lunga almeno 3 caratteri',
        'madein.max' => 'La provenienza non può essere più lunga di 30 caratteri',

        'tripa.required' => 'Il campo tripa è obbligatorio',
        'tripa.min' => 'La tripa deve essere almeno di 5 caratteri',

        'price.required' => 'Il campo prezzo è obbligatorio',
        'price.numeric' => 'Il prezzo deve essere un numero',
        'price.min' => 'Il prezzo deve essere almeno 2',

        'description.required' => 'Il campo descrizione è obbligatorio',
        'description.min' => 'La descrizione deve essere lunga almeno 5 caratteri',
        'description.max' => 'La descrizione non può essere più lunga di 150 caratteri',

        'img.*.image' => 'Il file caricato non è un\'immagine',
        'img.*.max' => 'La dimensione massima del file caricato è 2MB',
    ];

    // Funzione per salvare il prodotto
    public function save()
    {
        // Validazione dei dati
        $this->validate();
<<<<<<< HEAD

        // Crea il nuovo Cigar
        $cigar = Cigar::create([
=======
        $this->cigar = Cigar::create([
>>>>>>> 83b0b27db5525fd47f64f252581a6378505866cf
            'name' => $this->name,
            'price' => $this->price,
            'madein' => $this->madein,
            'tripa' => $this->tripa,
            'description' => $this->description,
        ]);

<<<<<<< HEAD
        // Associa le immagini, se presenti
        if (count($this->img) > 0) {
            foreach ($this->img as $image) {
                $path = $image->store('products', 'public');
                // Salva l'immagine e associa al prodotto
                $cigar->images()->create(['path' => $image->store('products', 'public')]);
=======
        if (count($this->images) > 0) {
            foreach ($this->images as $image) {
                $this->cigar->images()->create(['path' => $image->store('images', 'public')]);
>>>>>>> 83b0b27db5525fd47f64f252581a6378505866cf
            }
        }

        // Flash message di successo
        session()->flash('success', 'Articolo Aggiunto');

        // Resetta il form
        $this->reset();
    }
<<<<<<< HEAD
=======
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

        'img.image' => 'Il file caricato non è un\'immagine',
        'img.max' => 'La dimensione massima del file caricato è 2MB',
    ];
>>>>>>> 83b0b27db5525fd47f64f252581a6378505866cf

    // Renderizza la vista Livewire
    public function render()
    {
        return view('livewire.product-form');
    }
}