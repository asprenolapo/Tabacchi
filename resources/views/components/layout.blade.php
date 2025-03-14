<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- VERIFICA GOOGLE --}}
    <meta name="google-site-verification" content="Iyh3-ZUBf5IGgpV-uFjcG8h1zeNyCElnE5xbFB8LPUQ" />
    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="shortcut icon" href="https://dbdzm869oupei.cloudfront.net/img/sticker/preview/11357.png" type="">
    <title>
        {{ $titlePage ?? 'Tabaccheria N.195 Bari' }}
    </title>
    {{-- IUBENDA --}}
    <script type="text/javascript">
        var _iub = _iub || [];
        _iub.csConfiguration = {
            "siteId": 3897938,
            "cookiePolicyId": 51478506,
            "lang": "it",
            "storage": {
                "useSiteId": true
            }
        };
    </script>
    <script type="text/javascript" src="https://cs.iubenda.com/autoblocking/3897938.js"></script>
    <script type="text/javascript" src="//cdn.iubenda.com/cs/stable/iubenda_cs.js" charset="UTF-8" async></script>
    {{-- FONT AWESOME --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>

<body>

    <div>

        {{-- Aggiungi una condizione per escludere il controllo dell'età nelle pagine di login e admin --}}
        @unless (Route::is('login') ||
                Route::is('admin') ||
                Route::is('cigar.edit') ||
                Route::is('cigar.update') ||
                Route::is('cigar.delete'))
            <livewire:age-verification />
        @endunless

        <x-navbar />

        <div class="min-vh-100">
            {{ $slot }}
        </div>

        <x-footer />
        
    </div>


</body>

</html>
