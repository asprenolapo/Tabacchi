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
    public $madein = '';
    public $priceOrder = 'desc';  // Variabile per l'ordinamento dei prezzi

    // Attiva il filtro "Best Sellers"
    public function activateBestSellers()
    {
        $this->bestSellersBtn = $this->bestSellersBtn == '0' ? '1' : '0';
        $this->newArrivalsBtn = '0';
        $this->luxuryBtn = '0';
        $this->madein = '';  // Resetta il filtro 'madein' quando cambiano i filtri
    }

    // Attiva il filtro "New Arrivals"
    public function activatenewArrivals()
    {
        $this->bestSellersBtn = '0';
        $this->newArrivalsBtn = $this->newArrivalsBtn == '0' ? '1' : '0';
        $this->luxuryBtn = '0';
        $this->madein = '';  // Resetta il filtro 'madein' quando cambiano i filtri
    }

    // Attiva il filtro "Luxury" o "Prezzo"
    public function activateLuxury()
    {
        // Alterna l'ordine di prezzo
        $this->priceOrder = $this->priceOrder == 'desc' ? 'asc' : 'desc';
        $this->bestSellersBtn = '0';
        $this->newArrivalsBtn = '0';
        $this->luxuryBtn = '1';
        $this->madein = '';  // Resetta il filtro 'madein' quando cambiano i filtri
    }

    // Imposta il filtro "Provenienza"
    public function setMadein($madein)
    {
        $this->madein = $madein;
    }

    // Rendering dei sigari filtrati
    public function render()
    {
        $query = Cigar::query();

        // Filtro per ricerca
        if (!empty($this->search)) {
            $query->where(function ($q) {
                $q->where('name', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('price', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('madein', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('origin_description', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('manufacturing', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('vitoladegalera', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('cepo', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('tripa', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('intensity', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('smoketime', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('flavors', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('description', 'LIKE', '%' . $this->search . '%');
            });
        }

        // Filtro per "Best Sellers"
        if ($this->bestSellersBtn == '1') {
            $query->where('bestSellers', true);
        }

        // Filtro per "Nuovi Arrivi"
        if ($this->newArrivalsBtn == '1') {
            $query->whereBetween('created_at', [Carbon::now()->subDays(20), Carbon::now()]);
        }

        // Filtro per "Luxury" (ordinamento per prezzo)
        if ($this->luxuryBtn == '1') {
            $query->orderBy('price', $this->priceOrder);
        }

        // Filtro per "Provenienza"
        if (!empty($this->madein)) {
            $query->where('madein', $this->madein);
        }

        // Recupera i sigari con i filtri applicati
        $cigars = $query->orderBy('updated_at', 'desc')->paginate(16);

        return view('livewire.search', compact('cigars'));
    }
}
