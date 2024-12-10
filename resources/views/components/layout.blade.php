<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="shortcut icon" href="https://dbdzm869oupei.cloudfront.net/img/sticker/preview/11357.png" type="">
    <title>
        {{$titlePage ?? 'Tabaccheria 195'}}
    </title>
</head>

<body>

    <x-navbar />

    <div class="min-vh-100">
        {{ $slot }}
    </div>

    <x-footer />

    <script src="https://kit.fontawesome.com/7d149bc2d8.js" crossorigin="anonymous"></script>


</body>

</html>
