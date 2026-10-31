<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <style>
            * { margin: 0; padding: 0; box-sizing: border-box; }

            body {
                display: flex;
                height: 100vh;
                font-family: sans-serif;
            }

            .half {
                flex: 1;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .divider {
                width: 1px;
                background-color: #000;
            }

            @media (max-width: 768px) {
                body {
                    flex-direction: column;
                }

                .divider {
                    width: 100%;
                    height: 1px;
                }
            }
        </style>
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
