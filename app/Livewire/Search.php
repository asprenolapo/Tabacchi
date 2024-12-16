<?php

namespace App\Livewire;

use App\Models\Cigar;
use Livewire\Component;

class Search extends Component
{
    public $search = '';
    public $test = 1;
    public function activate(){
$this->test = $this->test == 1 ? 2 : 1;
    }

    public function render()
    {
        if ($this->search=="") {
            $cigars=Cigar::orderBy('updated_at','desc')->paginate('16'); 
        } else if($this->test == 1 ){
            $cigars=Cigar::orderBy('updated_at','desc')->paginate('2'); 
        } 
        else{
            $cigars=Cigar::whereAny(['name','price','madein','vitoladegalera','cepo','tripa','intensity','smoketime','flavors','description' ], 'LIKE','%'.$this->search.'%')->get();
        }
        return view('livewire.search',compact('cigars'));


    }
}
