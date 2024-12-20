<a href="{{ route('dettaglio.sigari', compact('cigar')) }}" class="col-3 home-card shadow {{Route::currentRouteName() == 'home' ? 'swiper-slide' : ''}}">
    <div class="overflow-hidden">
        <img src="{{ $cigar->images()->first()?->path ? Storage::url($cigar->images()->first()->path) : 'https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg?20200913095930' }}"
            class="img-fluid w-100" style="height: 250px" alt="">
    </div>
    <h3 class="fw-bold fs-5">{{ $cigar->name }}</h3>
    <p class="fw-bold fs-5">{{ $cigar->madein }}</p>
    <p class="fw-bold fs-5">{{ $cigar->price }}€</p>
</a>
