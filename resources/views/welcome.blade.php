<x-layout>
    {{-- HEADER --}}
    <header class="container-fluid p-0 overflow-hidden">
        <div class="card text-bg-dark overflow-hidden">
            <img src="https://images.unsplash.com/photo-1724436281331-68ae2a523d22?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                class="card-img header-img" alt="...">
            <div class="card-img-overlay d-flex flex-column justify-content-center">
                <h5 class="card-title display-4">Tabaccheria 195</h5>
                <p class="card-text fs-5">Tabaccai dal 1985</p>
                <p class="card-text"><small>Last updated 3 mins ago</small></p>
            </div>
        </div>
    </header>
    {{-- /HEADER --}}

    {{-- SECTION I --}}
    <section class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center my-5">
                <h3 class="text-danger">Best Sellers</h3>
                <p>I più venduti, i più apprezzati</p>
            </div>
        </div>
        {{-- SWIPER BEST SELLER --}}
        <div class="row justify-content-between gap-4 my-5">
            <div class="col-12 d-flex swiper" id="cigarSwiper">
                <div class="swiper-wrapper" id="cigarSwiperWrapper">
                    <!-- Slides -->
                    @forelse ($bestSellers as $cigar)
                        <x-card :$cigar />
                    @empty
                        <p class="fw-bold mx-auto">Non ci sono prodotti</p>
                    @endforelse
                </div>
            </div>
        </div>
        {{-- /SWIPER BEST SELLER --}}
    </section>
    {{-- /SECTION I --}}

    {{-- MAIN --}}
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center my-5">
                <h3 class="text-danger">Chi siamo</h3>
                <h2>Tabaccheria 195</h2>
                <p>Questa attività nasce nel 1985 con mia madre Filomena Mincuzzi al timone e mio padre dietro le
                    quinte. Dopo quasi trent'anni di attività nel gennaio del 2020 è Leonardo, figlio d'arte, a prendere
                    in
                    mano le redini della rivendita 195. Con l'arrivo di nuova linfa all'interno della tabaccheria
                    iniziano anche i primi cambiamenti e le prime innovazioni non solo nella gestione ma anche nelle
                    proposte. Così inizia la storia che ci vede oggi qui a parlare della nostra passione per i sigari,
                    il tabacco e
                    il fumo a tutto tondo .</p>
                <p>Leonardo Ferrieri - Owner</p>
            </div>
        </div>
    </main>
    {{-- /MAIN --}}

    {{-- SECTION II --}}
    <section class="container-fluid p-0 overflow-hidden">
        <div class="card text-bg-dark overflow-hidden">
            <img class="section2-img img-fluid"
                src="https://images.unsplash.com/photo-1501786387846-a18210d6e024?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"alt="...">
            <div class="card-img-overlay d-flex flex-column justify-content-center text-center">
                <h5 class="card-title display-4">Luxury Cigar</h5>
                <p class="card-text fs-5">Per chi Vuole solo il meglio!</p>
            </div>
        </div>
    </section>
    {{-- /SECTION II --}}

    {{-- SECTION III --}}
    <section class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center my-5">
                <h3 class="text-danger">New Arrivals</h3>
                <p>I nuovi arrivi</p>
            </div>
        </div>
        {{-- SWIPER NEW ARRIVALS --}}
        <div class="row justify-content-between gap-4 my-5">
            <div class="col-12 col-md-2 d-flex swiper" id="cigarSwiper">
                <div class="swiper-wrapper" id="cigarSwiperWrapper">
                    <!-- Slides -->
                    @forelse ($newArrivals as $cigar)
                        <x-card :$cigar />
                    @empty
                        <p class="fw-bold mx-auto">Non ci sono prodotti</p>
                    @endforelse
                </div>
            </div>
        </div>
        {{-- /SWIPER NEW ARRIVALS --}}
    </section>
    {{-- /SECTION III --}}

</x-layout>
