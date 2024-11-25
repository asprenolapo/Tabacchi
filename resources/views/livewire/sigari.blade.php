
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    {{-- Row Filtri --}}
    <div class="row">
        <div class="col-12 d-flex">
            <div
                class="border border-1 border-dark rounded-pill d-flex ms-auto justify-content-center align-items-center p-2">
                <input class="input-search" type="text" placeholder="Search.." wire:model.live="search">
                <i class="fa-solid fa-magnifying-glass fs-3 ms-2"></i>
            </div>
        </div>
    </div>
    {{-- Row Card --}}
    <div class="row justify-content-center my-5 gap-5">
        @forelse ($cigars as $cigar)
            <x-card :$cigar />
        @empty
            <p>non ci sono prodotti</p>
        @endforelse
    </div>
