<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <title>Room4all</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script></head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('images/logo.png')}}" width="100" height="40">
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

                    <li class="nav-item">
                    <a name="nickname" class="nav-link" href="/post">Posts
                   
                    </a>
                    </li>

                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Inicia sesion') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrate') }}</a>
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
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<footer class="site-footer" style= "background-color: #818181; font-family: 'Oswald', sans-serif;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="{{asset('images/logo.png')}}" width="150" height="70">
                <h3>WebSoft</h3>
                <p class="text">Somos una empresa del sector tecnológico, que se dedica a la prestación de servicios profesionales de desarrollo de sitios y aplicaciones web.</p>
            </div>
            <div class="col-sm-3" ALIGN=center>
                <br>
                <h3>Informacion</h3>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" style="color:#000000"; href="#">Aviso de privacidad</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color:#000000"; href="#">Link</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" style="color:#000000"; href="#">Link</a>
                    </li>
                </ul>
            </div>

            <div ALIGN=center class="col-sm-3">
                <br>
                <h3>Redes sociales</h3>
                <ul class="nav flex-column">
                    <li class="nav-item">
                    
                        <img src="{{asset('images/facebook.png')}}" width="30" height="30">
                    </li>
                    <br>
                    <li class="nav-item">
                        <img src="{{asset('images/instagram.png')}}" width="30" height="30">
                    </li>
                    <br>
                    <li class="nav-item">
                        <img src="{{asset('images/tiktok.png')}}" width="30" height="30">
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <br>
</footer>
<footer class="site-footer" ALIGN=center style= "background-color: #212529; font-family: 'Oswald', sans-serif;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p style="color:#818181">Copyright © 2022 - Diseño Web realizado por Los4Inges 9° "A" DyGS</p>
            </div>
        </div>
    </div>
</footer>
</html>
