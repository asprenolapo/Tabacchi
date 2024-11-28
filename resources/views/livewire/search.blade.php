<div class="col-md-9 p-5">
    <div class="row">
        <div class="col-12 d-flex">
            <div class="border w-100 border-1 border-dark rounded-pill d-flex ms-auto justify-content-center align-items-center p-2" id="div-search">
                <input class="input-search w-100" type="text" placeholder="Search.." wire:model.live="search">
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
</div>
