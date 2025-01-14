<x-layout :$titlePage>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Successo!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif (session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Eliminato</strong> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    <div class="container-fluid">
        <div class="row">
            <div class="col-2 bg-white vh-100 position-sticky top-0 p-0 d-flex flex-column justify-content-between">
                <a href="{{ route('home') }}" class="p-4 text-decoration-none">
                    <h1 class="fs-3 text-center">Tabaccheria 195</h1>
                </a>
                <div class="d-flex align-items-start p-0 position-sticky">
                    <div class=" flex-column nav-pills w-100" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <a class="active tab-admin" id="v-pills-disabled-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-disabled" type="button" role="tab"
                            aria-controls="v-pills-disabled" aria-selected="true">
                            <i class="fa-solid fa-folder-open me-2"></i></i>Prodotti
                        </a>
                        <a class="tab-admin" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home"
                            type="button" role="tab" aria-controls="v-pills-home" aria-selected="false">
                            <i class="fa-solid fa-smoking me-2"></i>Aggiungi prodotto
                        </a>
                        <a class="tab-admin disabled" id="v-pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-profile" type="button" role="tab"
                            aria-controls="v-pills-profile" aria-selected="false">
                            <i class="fa-solid fa-truck-fast me-2"></i>Da ordinare(disabilitato)
                        </a>
                        <form action="{{ route('logout') }}" method="POST" style="display: inline;" class="mx-auto">
                            @csrf
                            <button class="nav-link text-danger px-4"><i
                                    class="fa-solid fa-right-from-bracket me-2"></i>Logout</button>
                        </form>
                    </div>
                </div>

                <a href="" class="tab-admin">powered by Aspreno</a>
            </div>
            <div class="col-10 p-0" style="background-color: #F3F5FA">
                <div class="bg-white d-flex justify-content-end" style="height: 70px">
                    <div class="d-flex justify-content-center align-items-center text-primary me-3">
                        <span>Amministratore</span>
                        <i class="fa-solid fa-circle-user fs-1 ms-3"></i>
                    </div>
                </div>

                <x-admin.hero :$countUser :$countCigar />

                <div class="p-5">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-disabled" role="tabpanel"
                            aria-labelledby="v-pills-disabled-tab" tabindex="0">
                            <x-admin.productsTable :$products />
                        </div>
                        <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"
                            tabindex="0">
                            <x-admin.products :$countUser :$countCigar />
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab" tabindex="0">
                            <x-admin.user :$products />
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-layout>
<script>
    let msg = document.querySelector('.alert');
    if (msg) {
        setTimeout(() => {
            msg.classList.add('fade-out'); // Classe CSS per l'animazione di uscita
        }, 3000);  // Tempo di attesa prima che inizi l'animazione (3 secondi)

        // Dopo l'animazione, rimuoviamo il messaggio
        setTimeout(() => {
            msg.remove();
        }, 3500);  // Dopo 1 secondo dalla fine dell'animazione di scomparsa
    }
</script>
