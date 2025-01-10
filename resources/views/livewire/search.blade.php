    {{-- MAIN --}}
    <main class="conatainer-fluid">
        <div class="row">
            <div class="col-md-3 d-none d-md-block d-none d-md-block p-5">
                {{-- FILTRO CATEGORIE --}}
                <h3 class="fw-bold fs-3">Categorie</h3>
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item fs-5 my-2">
                        <button class="nav-link {{ $bestSellersBtn == '0' ? '' : 'fw-bold text-decoration-underline' }}"
                            wire:click='activateBestSellers'>Best Sellers</button>
                    </li>
                    <li class="nav-item fs-5 my-2">
                        <button class="nav-link {{ $newArrivalsBtn == '0' ? '' : 'fw-bold text-decoration-underline' }}"
                            wire:click='activatenewArrivals'>New Arrivals</button>
                    </li>
                    <li class="nav-item fs-5 my-2">
                        <button class="nav-link {{ $luxuryBtn == '0' ? '' : 'fw-bold text-decoration-underline' }}"
                            wire:click='activateLuxury'>Luxury Cigars</button>
                    </li>
                </ul>
                {{-- /FILTRO CATEGORIE --}}
            </div>
            <div class="col-12 col-md-9 p-5">
                <div class="row">
                    <div class="col-12 d-flex">
                        <div class="border w-100 border-1 border-dark rounded-pill d-flex ms-auto justify-content-center align-items-center p-2"
                            id="div-search">
                            <input class="input-search w-100" type="text" placeholder="Search.."
                                wire:model.live="search">
                            <i class="fa-solid fa-magnifying-glass fs-3 ms-2"></i>
                        </div>
                    </div>
                    <div class="col-12 d-md-none d-flex my-3 gap-2">
                        <button class="btn {{ $bestSellersBtn == '0' ? 'btn-secondary' : 'btn-dark' }}"
                            wire:click="activateBestSellers">Best seller</button>
                        <button class="btn {{ $newArrivalsBtn == '0' ? 'btn-secondary' : 'btn-dark' }}"
                            wire:click='activatenewArrivals'>New Arrivals</button>
                        <button class="btn {{ $luxuryBtn == '0' ? 'btn-secondary' : 'btn-dark' }}"
                            wire:click='activateLuxury'>Luxury</button>
                    </div>
                </div>
                {{-- SHOW CARD --}}
                <div class="row justify-content-center my-5 gap-5">
                    @forelse ($cigars as $cigar)
                        <x-card :$cigar />
                    @empty
                        <p>Non ci sono prodotti!</p>
                    @endforelse
                </div>
                {{-- /SHOW CARD --}}
            </div>
    </main>
    {{-- /MAIN --}}
