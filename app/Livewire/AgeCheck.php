<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Cookie;

class AgeCheck extends Component
{
    public $dob; //DATA DI NASCITA
    public $isEligible = false; //DETERMINA SE L'UTENTE è IDONEO

    public $showModal = false; //VISUALIZZAZIONE DELLA MODALE

    protected $rules = [
        'dob' => 'required|date',
    ];

    // Verifica se l'utente ha già passato il controllo dell'età
    public function mount()
    {
        // Verifica se esiste un cookie che indica che l'utente ha già completato il controllo
        if (Cookie::has('age_verified')) {
            $this->showModal = false;  // Non mostrare la modale se il cookie esiste
        } else {
            $this->showModal = true;   // Mostra la modale se il cookie non esiste
        }
    }

    public function checkAge()
    {
        $age = Carbon::parse($this->dob)->age;

        // Verifica se l'utente ha almeno 18 anni
        $this->isEligible = $age >= 18;

        // Se l'utente è idoneo, salva il cookie per non chiedere più l'età
        if ($this->isEligible) {
            // Imposta un cookie che dura 30 giorni
            Cookie::queue('age_verified', true, 43200); // 43200 minuti = 30 giorni
            $this->showModal = false; // Nascondi la modale
        } else {
            // Se l'età non è sufficiente, mostra un messaggio
            session()->flash('error', 'Devi avere almeno 18 anni per accedere.');
        }
    }
    public function render()
    {
        return view('livewire.age-check');
    }
}
