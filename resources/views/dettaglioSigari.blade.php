<x-layout>

    <div class="container">
        <div class="row">
            {{-- IMMAGINI --}}
            <div class="col-12 col-md-6 p-5">
                <div class="row">
                    <div class="col-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            @if ($cigar->images()->count() == 1)
                                <div class="tab-pane fade show active" id="v-pills-{{ $cigar->images()->first()->id }}"
                                    role="tabpanel" aria-labelledby="v-pills-{{ $cigar->images()->first()->id }}-tab"
                                    tabindex="0">
                                    <img src="{{ Storage::url($cigar->images()->first()->path) }}" alt=""
                                        class="img-fluid w-100">
                                </div>
                            @elseif ($cigar->images()->count() > 1)
                                @foreach ($cigar->images as $img)
                                    <div class="tab-pane fade show @if ($loop->first) active @endif"
                                        id="v-pills-{{ $img->id }}" role="tabpanel"
                                        aria-labelledby="v-pills-{{ $img->id }}-tab" tabindex="0">
                                        <img src="{{ Storage::url($img->path) }}" alt=""
                                            class="img-fluid w-100">
                                    </div>
                                @endforeach
                            @else
                                <div class="tab-pane fade show active" id="v-pills-empty" role="tabpanel"
                                    aria-labelledby="v-pills-empty-tab" tabindex="0">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg?20200913095930"
                                        alt="" class="img-fluid w-100">
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            @if ($cigar->images()->count() == 1)
                                <button class="nav-link w-100 active" id="v-pills-{{ $cigar->images()->first()->id }}"
                                    data-bs-toggle="pill" data-bs-target="#v-pills-{{ $cigar->images()->first()->id }}"
                                    type="button" role="tab"
                                    aria-controls="v-pills-{{ $cigar->images()->first()->id }}" aria-selected="true">
                                    <img src="{{ Storage::url($cigar->images()->first()->path) }}" alt=""
                                        class="img-fluid w-100">
                                </button>
                            @elseif ($cigar->images()->count() > 1)
                                @foreach ($cigar->images as $img)
                                    <button class="nav-link w-100" id="v-pills-{{ $img->id }}"
                                        data-bs-toggle="pill" data-bs-target="#v-pills-{{ $img->id }}"
                                        type="button" role="tab" aria-controls="v-pills-{{ $img->id }}"
                                        aria-selected="true">
                                        <img src="{{ Storage::url($img->path) }}" alt=""
                                            class="img-fluid w-100">
                                    </button>
                                @endforeach
                            @else
                                <button class="nav-link w-100 active" id="v-pills-empty" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-empty" type="button" role="tab"
                                    aria-controls="v-pills-empty" aria-selected="true">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg?20200913095930"
                                        alt="" class="img-fluid w-100">
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            {{-- CARATTERISTICHE --}}
            <div class="col-12 col-md-6 p-5">
                <h2 class="fw-bold display-5">{{ $cigar->name }}</h2>
                <p class="fw-bold display-6">{{ $cigar->price }} euro</p>
                <p class=""><span class="fw-bold">Provenienza:</span> {{ $cigar->madein }} </p>
                <p class=""><span class="fw-bold">Intensità:</span> {{ $cigar->intensity }} </p>
                <p class=""><span class="fw-bold">Tempo di Fumata:</span> {{ $cigar->smoketime }} min. circa</p>
                <p class=""><span class="fw-bold">Aroma:</span> {{ $cigar->flavors }} </p>
                <p class=""><span class="fw-bold">Descrizione:</span> <br> {{ $cigar->description }} </p>
                <h3 class="text-danger mt-5">DISPONIBILE SOLO IN TABACCHERIA</h3>
                <p class="text-danger">- la vendita online è vietata</p>
                <p class="text-danger">- ai sensi della legge 19DL 6/2016</p>
            </div>
        </div>
    </div>
    {{-- AROMA E CARATTERISTICHE --}}
      {{-- completare questa sezione in modo tale che la colonna caratteristiche appaia solo quando inserita dall'admin altriumenti rimane nascosta? --}}
    <div class="container">
        <div class="row">
            <div class="col-6 col text-center">
                <h2 class="fw-bold">Aroma</h2>
                <p class=""><span class="fw-bold"></span> {{ $cigar->flavors }} </p>
            </div>
            <div class="col-6">
                <h2 class="fw-bold">Caratteristiche</h2>
                <p class=""><span class="fw-bold">Vitola De Galera:</span> {{ $cigar->vitoladegalera }} </p>
                <p class=""><span class="fw-bold">Cepo:</span> {{ $cigar->cepo }} "</p>
                <p class=""><span class="fw-bold">Tripa:</span> {{ $cigar->tripa }} </p>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="fw-bold">Descrizione</h2>
                    <p class=""><span class="fw-bold"></span> <br> {{ $cigar->description }} </p>
                </div>
            </div>
        </div>
    </div>
    </div>

</x-layout>
