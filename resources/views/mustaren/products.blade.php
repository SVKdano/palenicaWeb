<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ asset('css/mustaren.css') }}?v={{ filemtime(public_path('css/mustaren.css')) }}">
        <link rel="stylesheet" href="{{ asset('css/mustaren-products.css') }}?v={{ filemtime(public_path('css/mustaren-products.css')) }}">
    </head>
    <body>
        @include('partials.mustaren-header')

        <main class="products">
            <div class="product">
                <div class="product-info">
                    <img src="{{ asset('images/must_jablko.jpg') }}" alt="Jablko" class="product-image">
                    <strong class="product-name">Jablko</strong>
                </div>
                <span class="product-price">x,yz€/l</span>
            </div>
            <div class="product">
                <div class="product-info">
                    <img src="{{ asset('images/must_jablkocvikla.jpg') }}" alt="Jablko-Cvikla" class="product-image">
                    <strong class="product-name">Jablko-Cvikla</strong>
                </div>
                <span class="product-price">x,yz€/l</span>
            </div>
            <div class="product">
                <div class="product-info">
                    <img src="{{ asset('images/must_jablkohrozno.jpg') }}" alt="Jablko-Hrozno" class="product-image">
                    <strong class="product-name">Jablko-Hrozno</strong>
                </div>
                <span class="product-price">x,yz€/l</span>
            </div>
            <div class="product">
                <div class="product-info">
                    <img src="{{ asset('images/must_jablkohruska.jpg') }}" alt="Jablko-Hruška" class="product-image">
                    <strong class="product-name">Jablko-Hruška</strong>
                </div>
                <span class="product-price">x,yz€/l</span>
            </div>
            <div class="product">
                <div class="product-info">
                    <img src="{{ asset('images/must_jablkomrkva.jpg') }}" alt="Jablko-Mrkva" class="product-image">
                    <strong class="product-name">Jablko-Mrkva</strong>
                </div>
                <span class="product-price">x,yz€/l</span>
            </div>
        </main>
    </body>
</html>
