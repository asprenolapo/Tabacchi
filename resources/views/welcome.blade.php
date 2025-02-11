<x-layout>

    {{-- HEADER --}}
    <header class="container-fluid p-0 overflow-hidden">
        <div class="card text-bg-dark overflow-hidden">
            <img src="https://images.unsplash.com/photo-1724436281331-68ae2a523d22?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                class="card-img header-img" alt="heder-img">
            <div class="card-img-overlay d-flex flex-column justify-content-center">
                <h5 class="card-title display-4">Tabaccheria 195</h5>
                <p class="card-text fs-5">Tabaccai dal 1985</p>
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
        <div class="row justify-content-between gap-4 my-2">
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
                src="https://images.unsplash.com/photo-1553433342-956cde1d7646?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"alt="...">
            <div class="card-img-overlay d-flex flex-column justify-content-center text-center p-4"
                style="background: rgba(0, 0, 0, 0.5);">
                <h5 class="card-title display-5">Come Scegliere</h5>
                <p class="card-text fs-5 text-white">Consigli utili per la scelta</p>
                <div class="overflow-auto" style="max-height: 60vh;">
                    <div class="container py-5">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <h6 class="fs-4">1. Scegliere prima il tabaccaio</h6>
                                <p>i sigari, a differenza delle sigarette, richiedono cura in fase di conservazione per
                                    poter dare il meglio in fumata. Scegliete quindi un tabaccaio competente, che
                                    conservi i
                                    prodotti in maniera adeguata...</p>
                            </div>
                            <div class="col-12 col-md-6">
                                <h6 class="fs-4">2. Dare un “target” alla fumata</h6>
                                <p>In fase neofita occorre senz’altro affidarsi all’esperienza di un tabaccaio o di un
                                    amico
                                    più esperto, ma andare in tabaccheria avendo un’idea di massima della tipologia di
                                    prodotto che volete fumare...</p>
                            </div>
                            <div class="col-12 col-md-6">
                                <h6 class="fs-4">3. Cercare un formato congeniale</h6>
                                <p>Cercate moduli che si adattano alla vostra esperienza di fumata, se siete neofiti
                                    orientatevi verso formati medio-piccoli, ma non troppo sottili...</p>
                            </div>
                            <div class="col-12 col-md-6">
                                <h6 class="fs-4">4. “Giudicare il libro dalla copertina”</h6>
                                <p>La fascia del sigaro è importante. Fermatevi a osservare e preferite sigari con fasce
                                    uniformi, e ben tese...</p>
                            </div>
                            <div class="col-12 col-md-6">
                                <h6 class="fs-4">5. Annusare il prodotto</h6>
                                <p>I sigari di qualità sono aromaticamente intensi anche a crudo, e sono esenti da odori
                                    di
                                    muffa...</p>
                            </div>
                            <div class="col-12 col-md-6">
                                <h6 class="fs-4">6. “Ascoltare” il sigaro</h6>
                                <p>Passate il sigaro vicino all’orecchio ruotandolo leggermente tra le dita esercitando
                                    una
                                    lievissima pressione...</p>
                            </div>
                            <div class="col-12 col-md-6">
                                <h6 class="fs-4">7. Toccare il sigaro</h6>
                                <p>Saggiate con una delicata pressione delle dita il grado di riempimento del “cannone”,
                                    zone con riempimento troppo lasco o troppo serrato...</p>
                            </div>
                            <div class="col-12 col-md-6">
                                <h6 class="fs-4">8. Cercare sigari invecchiati</h6>
                                <p>Cercate box di sigari con qualche anno di invecchiamento, facendo attenzione al loro
                                    grado di conservazione...</p>
                            </div>
                            <div class="col-12 col-md-6">
                                <h6 class="fs-4">9. Valutare il prezzo</h6>
                                <p>In base all’occasione, al vostro grado di esperienza e alla disponibilità economica
                                    avrete in mente un range di prezzo...</p>
                            </div>
                            <div class="col-12 col-md-6">
                                <h6 class="fs-4">10. Non è tutto oro quello che luccica</h6>
                                <p>Quanto detto sinora va valutato nel complesso, diffidate ad esempio di sigari dalla
                                    fascia scura ed oleosa che non presentano aromi intensi...</p>
                            </div>
                        </div>
                    </div>
                </div>
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
