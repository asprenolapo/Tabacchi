<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="shortcut icon" href="https://dbdzm869oupei.cloudfront.net/img/sticker/preview/11357.png" type="">
    <title>Document</title>
</head>

<body class="bg-body-secondary">
    {{-- HEADER --}}
    <header class="container-fluid p-0 overflow-hidden">
        <div class="card text-bg-dark overflow-hidden">
            <img src="https://images.unsplash.com/photo-1724436281331-68ae2a523d22?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                class="card-img header-img" alt="..." style="height: 250px; object-fit: cover;">
            <div class="card-img-overlay d-flex flex-column justify-content-center">
                <h1>Tabaccheria 195</h1>
            </div>
        </div>
    </header>
    {{-- /HEADER --}}
    <!-- SECTION -->
    <section class="row justify-content-center my-5">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 shadow-xl bg-white text-center p-5">
            <h2>Grazie per averci contattato: {{ $userData['name'] }}</h2>
                <p>Ti risponderemo appena possibile</p>
        </div>
    </section>
    <!-- /SECTION -->
</body>

</html>
