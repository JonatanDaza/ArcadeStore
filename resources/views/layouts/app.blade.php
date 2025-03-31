<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Site Metas -->
    <meta name="keywords" content="video games, arcade, store, buy, sell, exchange">
    <meta name="description" content="Your ultimate destination for video games. Buy, sell, and exchange your favorite games.">
    <meta name="author" content="Scrum 3 - SENA-CSF">

    <title>ARCADE STORE</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- responsive style -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/juegos.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/Dashboard.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/stylef.css') }}" rel="stylesheet" />

</head>
<body>
<div id="app">
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="{{ route('tienda.index') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="ARCADE STORE Logo">
                    <span>
                        ARCADE STORE
                    </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav">
                            <li class="nav-item {{ request()->routeIs('tienda.index') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('tienda.index') }}">inicio <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item {{ request()->routeIs('metricas') ? 'active' : '' }}">
                                <a class="nav-link" href="/Dashboard">Metricas</a>
                            </li>
                            <li class="nav-item {{ request()->routeIs('juegos') ? 'active' : '' }}">
                                <a class="nav-link" href="/juegos">Juegos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Free to play</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://wa.me/+573143575304" target="_blank">Contactenos</a>
                            </li>
                            @if (Auth::check())
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="/login"> Inicio de sesion </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <div class="quote_btn-container d-flex justify-content-center">
                        <a href="https://wa.me/+573143575304" target="_blank">
                            +573143575304
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main class="py-4">
        @yield('content')
    </main>

  <!-- footer section-->

  <!-- footer section -->
</div>
</body>
</html>
