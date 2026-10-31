<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    </head>
    <body>
        <div class="half">
            <h2>PÁLENICA</h2>
        </div>
        <div class="divider"></div>
        <div class="half">
            <h2>MUŠTÁREŇ</h2>
        </div>
    </body>
</html>
