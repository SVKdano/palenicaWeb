<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ asset('css/mustaren.css') }}?v={{ filemtime(public_path('css/mustaren.css')) }}">
        <link rel="stylesheet" href="{{ asset('css/mustaren-kontakt.css') }}?v={{ filemtime(public_path('css/mustaren-kontakt.css')) }}">
    </head>
    <body>
        @include('partials.mustaren-header')

        <main class="kontakt">
            <p class="kontakt-text">Kontaktovať nás môžete na čísle: +421903405278 alebo osobne</p>
            <iframe
                class="kontakt-map"
                src="https://maps.google.com/maps?q=Stru%C5%BEinka%2C%20Pru%C5%BEina%20393%2C%20018%2022%20Pru%C5%BEina&z=15&output=embed"
                title="Mapa: Stružinka, Pružina 393, 018 22 Pružina"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                allowfullscreen>
            </iframe>
        </main>
    </body>
</html>
