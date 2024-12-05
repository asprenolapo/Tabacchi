<x-layout>

    <div class="container">
        <div class="row">

            {{-- IMMAGINI --}}
            <div class="col-6 p-5">


                {{-- <div class="d-flex align-items-center"> --}}
                    <div class="row">
                        <div class="col-9">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                                  <img src="https://picsum.photos/500/501" alt="" class="img-fluid w-100">
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                                  <img src="https://picsum.photos/500/502" alt="" class="img-fluid w-100">
                                </div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                                  <img src="https://picsum.photos/500/503" alt="" class="img-fluid w-100">
                                </div>
                              </div>
                        </div>

                        <div class="col-3">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active w-100" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                  <img src="https://picsum.photos/500/501" alt="" class="img-fluid w-100">
                                </button>
                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                  <img src="https://picsum.photos/500/502" alt="" class="img-fluid w-100">
                                </button>
                                <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                  <img src="https://picsum.photos/500/503" alt="" class="img-fluid w-100">
                                </button>
                              </div>
                        </div>
                    </div>


                    

                {{-- </div> --}}



                  {{-- <div class="row">
                    <div class="col-10">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                            <img src="https://picsum.photos/500/501" alt="" class="img-fluid w-100">
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                            <img src="https://picsum.photos/500/502" alt="" class="img-fluid w-100">
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                            <img src="https://picsum.photos/500/503" alt="" class="img-fluid w-100">
                        </div>
                        <img src="https://picsum.photos/400/400" alt="" class="img-fluid w-100">
                    </div>

                    <div class="col-2">
                        <div class="row d-flex flex-column justify-content-center my-5 gap-5">
                            <div class="col">
                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                    <img src="https://picsum.photos/500/501" alt="" class="img-fluid w-100">
                                </button>

                            </div>
                            <div class="col">
                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                    <img src="https://picsum.photos/500/502" alt="" class="img-fluid w-100">
                                </button>
                            </div>
                            <div class="col">
                                <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                    <img src="https://picsum.photos/500/503" alt="" class="img-fluid w-100">
                                </button>
                            </div>
                        </div>
                    </div> 
                </div>  --}}






                {{-- ? OPZIONE 1 --}}
{{-- 
                <div class="row">
                    <div class="col-10">
                        <img src="https://picsum.photos/400/400" alt="" class="img-fluid w-100">
                    </div>

                    <div class="col-2">
                        <div class="row d-flex flex-column justify-content-center my-5 gap-5">
                            <div class="col">
                                <img src="https://picsum.photos/500/501" alt="" class="img-fluid w-100">
                            </div>
                            <div class="col">
                                <img src="https://picsum.photos/500/502" alt="" class="img-fluid w-100">
                            </div>
                            <div class="col">
                                <img src="https://picsum.photos/500/503" alt="" class="img-fluid w-100">
                            </div>
                        </div>
                    </div> 
                </div> --}}

                {{-- ? OPZIONE 2 --}}

                {{-- <img src="https://picsum.photos/400/400" alt="" class="img-fluid w-100">
                
                <div class="row d-flex justify-content-center my-5 gap-5">
                    <div class="col">
                        <img src="https://picsum.photos/500/501" alt="" class="img-fluid w-100">
                    </div>
                    <div class="col">
                        <img src="https://picsum.photos/500/502" alt="" class="img-fluid w-100">
                    </div>
                    <div class="col">
                        <img src="https://picsum.photos/500/503" alt="" class="img-fluid w-100">
                    </div>
                </div> --}}


            </div>

            {{-- CARATTERISTICHE --}}
            <div class="col-6 p-5">
                <h2 class="fw-bold display-5">{{ $cigar->name }}</h2>
                <p class="fw-bold text-primary display-6">{{ $cigar->price }} </p>
                <p class=""><span class="fw-bold">Provenienza:</span> {{ $cigar->madein }} </p>
                <p class=""><span class="fw-bold">Tripa:</span> {{ $cigar->tripa }} </p>
                <p class=""><span class="fw-bold">Descrizione:</span> <br> {{ $cigar->description }} </p>
                <h3 class="text-danger mt-5">DISPONIBILE SOLO IN TABACCHERIA</h3>
                <p class="text-danger">- la vendita online è vietata</p>
                <p class="text-danger">- ai sensi della legge 19DL 6/2016</p>
            </div>

        </div>
    </div>

</x-layout>
