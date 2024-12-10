<x-layout :$titlePage>


            {{-- @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif --}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-2 bg-white vh-100 position-sticky top-0 p-0 d-flex flex-column justify-content-between">
                <a href="{{ route('home') }}" class="p-4 text-decoration-none">
                    <h1 class="fs-3 text-center">Tabaccheria 195</h1>
                </a>
                <div class="d-flex align-items-start p-0 position-sticky">
                    <div class=" flex-column nav-pills w-100" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class=" active tab-admin" id="v-pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                            aria-selected="true">
                            <i class="fa-solid fa-smoking me-2"></i>Aggiungi prodotto
                        </a>
                        <a class="tab-admin" id="v-pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-profile" type="button" role="tab"
                            aria-controls="v-pills-profile" aria-selected="false">
                            <i class="fa-solid fa-users me-2"></i>Utenti
                        </a>
                        <a class="tab-admin" id="v-pills-disabled-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-disabled" type="button" role="tab"
                            aria-controls="v-pills-disabled" aria-selected="false" disabled>
                            <i class="fa-regular fa-eye-slash me-2"></i>Disabled
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
                <div class="bg-white" style="height: 70px">
                    <div class="dropdown float-end">
                        <button class="btn btn-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-circle-user fs-1"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Aggiungi prodotto</a></li>
                            <li><a class="dropdown-item" href="#">Utenti</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-danger" href="#">Logout</a></li>

                        </ul>
                    </div>
                </div>

                <x-admin.hero :$countUser :$countCigar/>

                <div class="p-5">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab" tabindex="0">
                            <x-admin.products :$countUser :$countCigar />
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab" tabindex="0">
                            <x-admin.user :$users />
                        </div>
                        <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel"
                            aria-labelledby="v-pills-disabled-tab" tabindex="0">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-layout>
