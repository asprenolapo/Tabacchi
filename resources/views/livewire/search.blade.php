    {{-- MAIN --}}
    <main class="conatainer-fluid">
        <div class="row">
            <div class="col-md-3 d-none d-md-block d-none d-md-block p-5">
                {{-- FILTRO CATEGORIE --}}
                <h3 class="fw-bold fs-3">Categorie</h3>
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item fs-5 my-2">
                        <button class="nav-link {{ $bestSellersBtn == '0' ? '' : 'fw-bold text-decoration-underline' }}"
                            wire:click='activateBestSellers'>Più Venduti</button>
                    </li>
                    <li class="nav-item fs-5 my-2">
                        <button class="nav-link {{ $newArrivalsBtn == '0' ? '' : 'fw-bold text-decoration-underline' }}"
                            wire:click='activatenewArrivals'>Nuovi Arrivi</button>
                    </li>
                    <li class="nav-item fs-5 my-2">
                        <button class="nav-link {{ $luxuryBtn == '0' ? '' : 'fw-bold text-decoration-underline' }}"
                            wire:click='activateLuxury'>Prezzo<i
                                class="ms-2 fa-solid fa-angle-{{ $luxuryBtn == '0' ? 'down' : 'up' }}"
                                style="font-size: 12px; font-weight: bold"></i></button>
                    </li>
                    <li class="nav-item fs-5 my-2">
                        <div class="form-group">
                            <select wire:model.change="brand" class="nav-link" style="margin-left: -5px" id="brand">
                                <option class="text-start" value="">Marche</option>
                                @foreach ($brands as $brand)
                                    <option class="text-capitalize" value="{{ $brand }}">{{ $brand }}</option>
                                @endforeach
                            </select>
                        </div>
                    </li>
                    <li class="nav-item fs-5 my-2">
                        <button class="nav-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Origine<i class="ms-2 fa-solid fa-angle-down"
                                style="font-size: 12px; font-weight: bold;"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><button class="nav-link dropdown-item text-center"
                                    wire:click="setMadein('Italia')">Italia</button>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><button class="nav-link dropdown-item text-center"
                                    wire:click="setMadein('Estero')">Estero</button>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><button class="nav-link dropdown-item text-center"
                                    wire:click="setMadein('Altro')">Altro</button>
                            </li>
                        </ul>
                    </li>
                </ul>
                {{-- /FILTRO CATEGORIE --}}
            </div>
            {{-- INPUT RICERCA LIVEWIRE --}}
            <div class="col-12 col-md-9 p-5">
                <div class="row">
                    <div class="col-12 d-flex">
                        <div class="border w-100 border-1 border-dark rounded-pill d-flex ms-auto justify-content-center align-items-center p-2"
                            id="div-search">
                            <input class="input-search w-100" type="text" placeholder="Ricerca per tutti i campi"
                                wire:model.live="search">
                            <i class="fa-solid fa-magnifying-glass fs-3 ms-2"></i>
                        </div>
                    </div>
                    <div class="col-12 d-md-none d-flex my-3 gap-3 justify-content-center">
                        <button class="btn {{ $bestSellersBtn == '0' ? 'btn-secondary' : 'btn-dark' }}"
                            wire:click="activateBestSellers">Più venduti</button>
                        <button class="btn {{ $newArrivalsBtn == '0' ? 'btn-secondary' : 'btn-dark' }}"
                            wire:click='activatenewArrivals'>Nuovi Arrivi</button>
                        <button class="btn {{ $luxuryBtn == '0' ? 'btn-secondary' : 'btn-dark' }}"
                            wire:click='activateLuxury'>Prezzo<i
                            class="ms-2 fa-solid fa-angle-{{ $luxuryBtn == '0' ? 'down' : 'up' }}"
                            style="font-size: 12px; font-weight: bold"></i></button>
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-6 d-md-none d-flex my-3 justify-content-center">
                        <select wire:model.change="brand" class="bg-secondary rounded p-2 text-white">
                            <option class="" value="">Marche</option>
                            @foreach ($brands as $brand)
                                <option value="{{ $brand }}">{{ $brand }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6 d-md-none d-flex my-3 justify-content-center">
                        <button class="btn btn-secondary p-3 ms-3" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Orgine<i class="ms-2 fa-solid fa-angle-down"
                            style="font-size: 12px; font-weight: bold;"></i>
                        </button>
                        <ul class="dropdown-menu bg-secondary">
                            <li><button class="dropdown-item text-center text-white"
                                    wire:click="setMadein('Italia')">Italia</button>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><button class="dropdown-item text-center text-white"
                                    wire:click="setMadein('Estero')">Estero</button>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><button class="dropdown-item text-center text-white"
                                    wire:click="setMadein('Altro')">Altro</button>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- /INPUT RICERCA LIVEWIRE --}}
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
