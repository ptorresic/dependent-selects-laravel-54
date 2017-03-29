<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow">
    <meta name="dcterms.dateCopyrighted" content="2017">
    <meta name="distribution" content="Global">
    <meta name="rating" content="General">
    <link rel="icon" type="image/png" href="{{ asset('favicon-32x32.png') }}" sizes="32x32" />
    <link rel="icon" type="image/png" href="{{ asset('favicon-16x16.png') }}" sizes="16x16" />

    {{--CSRF Token--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{--app.css--}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet">

    {{--GitHub Fork--}}
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    {{--Scripts--}}
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    {{--Collapsed Hamburger--}}
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    {{--Branding Image--}}
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    {{--Left Side Of Navbar--}}
                    @if (! Auth::guest())
                        <ul class="nav navbar-nav">
                            &nbsp;<li><a href="{{ route('locations.index') }}">Locations</a></li>
                             <li><a href="{{ route('discussion') }}">Discussion</a></li>
                             <li><a href="https://github.com/p-torres/dependent-selects-laravel-54/fork">Fork</a></li>
                        </ul>
                    @endif

                    {{--Right Side Of Navbar--}}
                    <ul class="nav navbar-nav navbar-right">
                        {{--Authentication Links--}}
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        @yield('content')
        <br>
        <hr>

        <div class="text-center">
            <a class="github-button" href="https://github.com/p-torres/dependent-selects-laravel-54/fork" data-style="mega" aria-label="Fork p-torres/laravel-54-dependent-selects on GitHub">Fork</a>
        </div>
        <br>
    </div>

    {{--app.js--}}
    <script src="{{ asset('js/app.js') }}"></script>
    {{--Sweet alert--}}
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    @include('sweet::alert')
    {{--Page level scripts--}}
    @yield('scripts')
</body>
</html>
