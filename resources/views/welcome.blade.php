<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    </head>
        <body>
        <header class="header">
            <img src="{{ asset('images/struzinka.png') }}" alt="Stružinka logo" class="header-logo">
            <span class="header-title">STRUŽINKA</span>
        </header>

        <main class="split">
            <div class="half">
                <h1>PÁLENICA</h1>
            </div>
            <div class="divider"></div>
            <div class="half">
                <h1>MUŠTÁREŇ</h1>
            </div>
        </main>

        <footer class="footer">
            <span>© VŠETKY PRÁVA VYHRADENÉ</span>
            <span class="footer-author">2026 Daniel Lieskovský</span>
        </footer>
    </body>
</html>
