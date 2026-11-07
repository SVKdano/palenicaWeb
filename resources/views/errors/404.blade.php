@php($isPalenica = request()->is('palenica', 'palenica/*'))
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        @if ($isPalenica)
            <link rel="stylesheet" href="{{ asset('css/palenica.css') }}?v={{ filemtime(public_path('css/palenica.css')) }}">
            <script src="{{ asset('js/palenica.js') }}?v={{ filemtime(public_path('js/palenica.js')) }}" defer></script>
        @else
            <link rel="stylesheet" href="{{ asset('css/welcome.css') }}?v={{ filemtime(public_path('css/welcome.css')) }}">
        @endif
        <link rel="stylesheet" href="{{ asset('css/error.css') }}?v={{ filemtime(public_path('css/error.css')) }}">
    </head>
    <body>
        @if ($isPalenica)
            @include('partials.palenica-header')
        @else
            @include('partials.welcome-header')
        @endif

        <main class="error">
            <h1 class="error-title">Na stránke sa pracuje</h1>
            <img src="{{ asset('images/pracuje.gif') }}" alt="Animovaný strom s jablkami" class="error-image">
        </main>
    </body>
</html>
