<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ asset('css/palenica.css') }}?v={{ filemtime(public_path('css/palenica.css')) }}">
        <script src="{{ asset('js/palenica.js') }}?v={{ filemtime(public_path('js/palenica.js')) }}" defer></script>
    </head>
    <body>
        @include('partials.palenica-header')

        <div class="aktuality">
            <h1>AKTUALITY</h1>
            <h3>Tešíme sa na vašu návštevu</h3>
            <h3>Kontaktovať nás môžete na čísle: +421903405278 alebo osobne</h3>
            <iframe
                class="aktuality-map"
                src="https://maps.google.com/maps?q=Stru%C5%BEinka%2C%20Pru%C5%BEina%20393%2C%20018%2022%20Pru%C5%BEina&z=15&output=embed"
                title="Mapa: Stružinka, Pružina 393, 018 22 Pružina"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                allowfullscreen>
            </iframe>
        </div>
    </body>
</html>
