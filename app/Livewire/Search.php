<?php

namespace App\Livewire;

use App\Models\Cigar;
use Livewire\Component;

class Search extends Component
{
    public $search = '';

    public function render()
    {
        if ($this->search=="") {
            $cigars=Cigar::paginate(15);  
        } else{
            $cigars=Cigar::whereAny(['name','price','madein','tripa','description' ], 'LIKE','%'.$this->search.'%')->get();
        }
        return view('livewire.search',compact('cigars'));
    }
}
