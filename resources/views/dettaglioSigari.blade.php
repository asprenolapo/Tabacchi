<x-layout>

    <div class="container">
        <div class="row">

            {{-- IMMAGINI --}}
            <div class="col-6 p-5">
                <img src="https://picsum.photos/500/500" alt="" class="img-fluid">
            </div>

            {{-- CARATTERISTICHE --}}
            <div class="col-6 p-5">
                <h2 class="">{{ $cigar->name }}</h2>
                <p class="">{{ $cigar->price }} </p>
                <p class="">Provenienza: {{ $cigar->madein }} </p>
                <p class="">Tripa: {{ $cigar->tripa }} </p>
                <p class="">Descrizione: {{ $cigar->description }} </p>
                <h3 class="text-danger">DISPONIBILE SOLO IN TABACCHERIA</h3>
                <p class="text-danger">la vendita online è vietata</p>
                <p class="text-danger">ai sensi della legge 19DL 6/2016</p>
            </div>

        </div>
    </div>

</x-layout>
