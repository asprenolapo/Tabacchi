<a href="{{route('dettaglio.sigari',compact('cigar'))}}" class="col-3 home-card shadow">
    <div class="overflow-hidden">
        <img src="{{Storage::url($cigar->img)}}" class="img-fluid" alt="">
    </div>
    <h3 class="fw-bold fs-5">{{$cigar->name}}</h3>
    <p class="fw-bold fs-5">{{$cigar->madein}}</p>
    <p class="fw-bold fs-5">{{$cigar->price}}€</p>
</a>
