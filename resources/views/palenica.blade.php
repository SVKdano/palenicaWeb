<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ asset('css/palenica.css') }}">
    </head>
    <body>
        <header class="header">
            <a href="{{ route('palenica') }}">
                <img src="{{ asset('images/palenica.png') }}" alt="Pálenica logo" class="header-logo">
            </a>
            <span class="header-title">
                <a href="{{ route('welcome') }}">STRUŽINKA</a> - <a href="{{ route('palenica') }}">PÁLENICA</a>
            </span>
        </header>
    </body>
</html>
