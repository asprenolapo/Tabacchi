<?php

namespace App\Livewire;

use App\Models\Cigar;
use Livewire\Component;

class Sigari extends Component
{
    public $search;
    public function render()
    {
        if ($this->search="") {
            $cigars=Cigar::paginate(15);  
        } else{
            $cigars=Cigar::whereAny(['name','price','madein','tripa','description' ], 'LIKE','%'.$this->search.'%')->get();
        }
        return view('livewire.sigari', compact('cigars'));
    }
}
