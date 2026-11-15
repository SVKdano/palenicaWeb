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
            <div class="kontakt-text">
                <p>Kontaktovať nás môžete na jednom z nasledujúcich čísel:</p>
                <ul class="kontakt-phones">
                    <li>+421903405278</li>
                    <li>+42142/4424050</li>
                    <li>+421902163466</li>
                </ul>
                <p>alebo osobne na adrese:<br>Pružina 393, 018 22 Pružina</p>
            </div>
            <iframe
                class="kontakt-map"
                src="https://www.google.com/maps/embed?origin=mfe&pb=!1m3!2m1!1sStru%C5%BEinka,+Pru%C5%BEina+393,+018+22+Pru%C5%BEina!6i15"
                title="Mapa: Stružinka, Pružina 393, 018 22 Pružina"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                allowfullscreen>
            </iframe>
        </main>
    </body>
</html>
