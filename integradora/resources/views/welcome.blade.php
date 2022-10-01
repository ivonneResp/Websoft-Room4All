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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
</head>
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

        
    </div>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/cuarto1.jpeg" class="d-block w-100" alt="..." width="90" height="700">
            </div>

        <div class="carousel-item">
            <img src="http://deplanosycasas.com/wp-content/uploads/2016/05/Cuartos-decorados-para-parejas-1280x720.jpg" class="d-block w-100" alt="..." width="90" height="700">
        </div>

        <div class="carousel-item">
            <img src="http://deplanosycasas.com/wp-content/uploads/2016/05/Cuartos-decorados.jpg" class="d-block w-100" alt="..." width="90" height="700">
        </div>
        <div class="carousel-item">
            <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/297893491.jpg?k=df99b105ad0a5f12ccc7fee0335fc944521c28f273233284e3ee0447723ffe8c&o=&hp=1" class="d-block w-100" alt="..." width="90" height="700">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <!--<span class="visually-hidden">Previous</span>-->
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <!--<span class="visually-hidden">Next</span>-->
    </button>
    </div>

    <main class="py-4">
        @yield('content')
    </main>
    

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Quieres buscar cuartos?</h5>
                        <p class="card-text">Entra aqui y encontraras una gran cantidad de cuartos cerca de ti para que puedas ocupar.</p>
                        <center><a href="#" class="btn btn-primary">Ver</a></center>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Quieres rentar cuartos?</h5>
                        <p class="card-text">Registrate y accede a poder publicar tus cuartos en renta para que todos los usuarios puedan conocerlos.</p>
                        <center><a href="login" class="btn btn-primary">Ver</a></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
</body>


<footer class="site-footer" style= "background-color: #818181; font-family: 'Oswald', sans-serif;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="images/logo.png" width="150" height="70">
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
                        <img src="images/facebook.png" width="30" height="30">
                    </li>
                    <br>
                    <li class="nav-item">
                        <img src="images/instagram.png" width="30" height="30">
                    </li>
                    <br>
                    <li class="nav-item">
                        <img src="images/tiktok.png" width="30" height="30">
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
