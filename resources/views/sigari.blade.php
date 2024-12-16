<x-layout>
    {{-- HEADER --}}
    <header class="container-fluid p-0 overflow-hidden">
        <div class="card text-bg-dark overflow-hidden">
            <img src="https://images.unsplash.com/photo-1612571507212-4f7367b4cdf6?q=80&w=1930&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                class="card-img headercigar-img img-fluid" alt="...">
            <div class="card-img-overlay text-center d-flex flex-column justify-content-center">
                <h5 class="card-title display-4">Tabaccheria 195</h5>
                <h5 class="card-text fs-3">I Nostri Sigari</h5>
            </div>
        </div>
    </header>
    {{-- /HEADER --}}

    {{-- MAIN --}}
    <main class="conatainer-fluid">
        <div class="row">
            <div class="col-md-3 d-none d-md-block p-5">
                {{-- CATEGORIE --}}
                <h3 class="fw-bold fs-3">Categorie</h3>
                {{-- TODO Prima Lista Filtri  --}}
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item fs-5 my-2">
                        <button class="nav-link" wire:click='activate'>Best Sellers</button>
                    </li>
                    <li class="nav-item fs-5 my-2">
                        <a class="nav-link" href="">New Arrivals</a>
                    </li>
                    <li class="nav-item fs-5 my-2">
                        <a class="nav-link" href="#">Luxury Cigars</a>
                    </li>
                    <li class="nav-item fs-5 my-2">
                        <a class="nav-link" href="#">Price</a>
                    </li>
                    <li class="nav-item fs-5 my-2">
                        <a class="nav-link" href="#">Made In</a>
                    </li>
                </ul>
                {{-- TODO seconda Lista Filtri  --}}
            </div>
            {{-- TODO implementare e aggiustare la visione delle card --}}
                <livewire:search/>
        </div>
    </main>
    {{-- /MAIN --}}




</x-layout>
