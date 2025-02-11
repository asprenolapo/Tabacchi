<nav class="navbar navbar-expand-lg bg-body-tertiary {{ Route::currentRouteName() == 'admin' ? 'd-none' : '' }}">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Tabaccheria 195</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ route('sigari')}}">
                        Sigari
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contactus') }}">Contattaci</a>
                </li>
            </ul>
            <div class="navbar-text">
                <i class="fs-2 fa-solid fa-smoking"></i>
            </div>
        </div>
    </div>
</nav>