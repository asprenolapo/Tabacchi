<?php

namespace App\Livewire;

use App\Models\Cigar;
use Carbon\Carbon;
use Livewire\Component;

class Search extends Component
{
    public $search = '';
    public $bestSellersBtn = '0';
    public $newArrivalsBtn = '0';
    public $luxuryBtn = '0';
    public function activateBestSellers()
    {
        $this->bestSellersBtn = $this->bestSellersBtn == '0' ? '1' : '0';
        $this->newArrivalsBtn = '0';
        $this->luxuryBtn = '0';
    }
    public function activatenewArrivals()
    {
        $this->bestSellersBtn = '0';
        $this->newArrivalsBtn = $this->newArrivalsBtn == '0' ? '1' : '0';
        $this->luxuryBtn = '0';
    }
    public function activateLuxury()
    {
        $this->bestSellersBtn = '0';
        $this->newArrivalsBtn = '0';
        $this->luxuryBtn = $this->luxuryBtn == '0' ? '1' : '0';
    }

    public function render()
    {
        if ($this->search == "" and $this->bestSellersBtn == '0' and $this->newArrivalsBtn == '0' and $this->luxuryBtn == '0') {
            $cigars = Cigar::orderBy('updated_at', 'desc')->paginate('16');

        } else if ($this->bestSellersBtn == '1' and str_word_count($this->search) == 0) {
            $cigars = Cigar::where('bestSellers', true)->get();
        
        } else if ($this->newArrivalsBtn == '1' and str_word_count($this->search) == 0){
            $cigars = Cigar::whereBetween('created_at', [Carbon::now()->subDays(20), Carbon::now()])->get();

        } else if ($this->luxuryBtn == '1' and str_word_count($this->search) == 0){
            $cigars = Cigar::where('price', '>', 100 )->get();

        } else if (str_word_count($this->search) > 0) {
            $this->bestSellersBtn = '0';
            $this->newArrivalsBtn = '0';
            $this->luxuryBtn = '0';
            $cigars = Cigar::whereAny(['name', 'price', 'madein', 'vitoladegalera', 'cepo', 'tripa', 'intensity', 'smoketime', 'flavors', 'description'], 'LIKE', '%' . $this->search . '%')->get();
        }
        return view('livewire.search', compact('cigars'));
    }
}
