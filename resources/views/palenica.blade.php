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
            <h1><b>AKTUALITY</b></h1>
            <h3>SZZ ZO Pružina oznamuje, že v blízkej dobe bude spustené prihlasovanie do poradia.
                <br>
                Tešíme sa na vašu návštevu
            </h3>
            <h3>Kontaktovať nás môžete na jednom z nasledujúcich čísel:</h3>
            <ul class="aktuality-phones">
                <li>+421903405278</li>
                <li>+42142/4424050</li>
                <li>+421902163466</li>
            </ul>
            <h3>alebo osobne na adrese:<br>Pružina 392, 018 22 Pružina</h3>
            <iframe
                class="aktuality-map"
                src="https://www.google.com/maps/embed?origin=mfe&pb=!1m12!1m8!1m3!1d10466.09561902096!2d18.4785733!3d49.0196405!3m2!1i1024!2i768!4f13.1!2m1!1sP%C3%A1lenica+STRU%C5%BDINA+s.r.o.!6i15"
                title="Mapa: Pálenica STRUŽINA s.r.o., Pružina 392, 018 22 Pružina"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                allowfullscreen>
            </iframe>
        </div>
    </body>
</html>
