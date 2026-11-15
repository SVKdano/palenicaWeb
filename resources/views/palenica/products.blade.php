<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ asset('css/palenica.css') }}?v={{ filemtime(public_path('css/palenica.css')) }}">
        <link rel="stylesheet" href="{{ asset('css/products.css') }}?v={{ filemtime(public_path('css/products.css')) }}">
        <script src="{{ asset('js/palenica.js') }}?v={{ filemtime(public_path('js/palenica.js')) }}" defer></script>
    </head>
    <body>
        @include('partials.palenica-header')

        <main class="products">
            <div class="product">
                <div class="product-info">
                    <img src="{{ asset('images/palenica_hruska.png') }}" alt="Pružinská Hruškovica" class="product-image">
                    <strong class="product-name">Pružinská Hruškovica</strong>
                </div>
                <span class="product-price">x,yz€/l</span>
            </div>
            <div class="product">
                <div class="product-info">
                    <img src="{{ asset('images/palenica_jablko.png') }}" alt="Pružinská Jablkovica" class="product-image">
                    <strong class="product-name">Pružinská Jablkovica</strong>
                </div>
                <span class="product-price">x,yz€/l</span>
            </div>
            <div class="product">
                <div class="product-info">
                    <img src="{{ asset('images/palenica_slivka.png') }}" alt="Pružinská Slivovica" class="product-image">
                    <strong class="product-name">Pružinská Slivovica</strong>
                </div>
                <span class="product-price">x,yz€/l</span>
            </div>
        </main>
    </body>
</html>
