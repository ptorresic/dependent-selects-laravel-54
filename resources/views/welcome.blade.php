<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="HTML forms dependent selects (drop-downs/combo boxes) implementing Laravel 5.4. All CRUD actions.">
        <meta name="robots" content="index,follow">
        <meta name="dcterms.dateCopyrighted" content="2017">
        <meta name="distribution" content="Global">
        <meta name="rating" content="General">
        <link rel="icon" type="image/png" href="{{ asset('favicon-32x32.png') }}" sizes="32x32" />
        <link rel="icon" type="image/png" href="{{ asset('favicon-16x16.png') }}" sizes="16x16" />

        <title>Dependent Selects</title>

        {{--Fonts--}}
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,400,600" rel="stylesheet" type="text/css">

        {{--GitHub Fork--}}
        <script async defer src="https://buttons.github.io/buttons.js"></script>

        {{--Styles--}}
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 42px;
            }

            .message {
                font-weight: 400;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    {{ config('app.name', 'Laravel') }}
                </div>
                
                <div>
                    <a href="{{ route('locations.index') }}"><img src="{{ asset('dependent-selects.jpg') }}" alt="Dependent Selects"></a>
                </div>

                <div class="message">
                    <p>A sample of dependent selects (drop-downs) implementing Laravel 5.4. All CRUD actions.</p>
                </div>

                <div class="links">
                    <a href="{{ route('locations.index') }}">Locations</a>
                    <a href="{{ route('discussion') }}">Discussion</a>
                </div>
            </div>
        </div>
    </body>
</html>
