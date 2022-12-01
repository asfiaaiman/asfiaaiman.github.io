<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="To manage the Asfia Aiman Portfolio">
    <meta name="author" content="Asfia Aiman">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Favicon --}}
    <link rel="icon" href="https://infyportfolio.infyom.com/img/favicon-32x32.png" type="image/png">
     <!-- Fonts -->
     <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
     <!-- Icons -->
     <link rel="stylesheet" href="{{ asset('backend-assets/fonts/nucleo-icons.woff2') }}">
     <link rel="stylesheet" href="https://infyportfolio.infyom.com/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">

     <!-- General CSS Files -->
     <link rel="stylesheet" href="https://infyportfolio.infyom.com/css/argon.css?v=1.2.0" type="text/css">
     <link rel="stylesheet" href="https://infyportfolio.infyom.com/assets/web/css/login.css">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>
<body class="bg-default" id="app">
    <!-- Main content -->
<div class="main-content">
     <!-- Header -->
     <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                        <h1 class="text-white">Welcome!</h1>
                        <p class="text-lead text-white">Please sign in from here to your portfolio account.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                 xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

        <div class="container mt--8 pb-5">
            @yield('content')
        </div>
    </div>
    <!-- Scripts -->
<script src="https://infyportfolio.infyom.com/vendor/jquery/dist/jquery.min.js"></script>
<script src="https://infyportfolio.infyom.com/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://infyportfolio.infyom.com/vendor/js-cookie/js.cookie.js"></script>
<script src="https://infyportfolio.infyom.com/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="https://infyportfolio.infyom.com/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<script src="https://infyportfolio.infyom.com/js/argon.js?v=1.2.0"></script>
</body>
</html>
