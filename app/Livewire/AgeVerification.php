<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use PHPUnit\Event\Test\FailedSubscriber;

class AgeVerification extends Component
{
    public $ageVerified = false;

    public function mount()
    {
        // Controlla se l'età è già stata verificata nella sessione
        $this->ageVerified = Session::get('age_verified', false);
    }
    public function verifyAge($confirmation)
    {
        if ($confirmation === 'yes') {
            $this->ageVerified = true;
            Session::put('age_verified', true);
            // $this->emitTo('ageVerified'); // Emessi un evento per la parte front-end
        } else {
            abort(403, 'Accesso vietato ai minorenni');
        }
    }
    public function render()
    {
        return view('livewire.age-verification');
    }
}
