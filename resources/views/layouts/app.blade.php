<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- AGREGAR MENUS -->
                    <ul class="navbar-nav mr-auto">

                    @if(Auth::check())
                        @if(Auth::user()->lista=="admin")

                        <li class="nav-item">
                            <a href="{{route('home')}}" class="nav-link">Welcome</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-ver" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Clientes
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown-ver">
                                <a class="dropdown-item" href="{{ route('Cliente.create') }}">Crear Cliente</a>
                                <a class="dropdown-item" href="{{ route('Servicio.create') }}">Crear Servicio</a>
                                <a class="dropdown-item" href="{{ route('Cliente.index') }}">Ver</a>
                                <a class="dropdown-item" href="{{ route('Servicio.index') }}">Ver</a>

                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-ver" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Quejas
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown-ver">
                                <a class="dropdown-item" href="{{ route('Quejas.create') }}">Crear Queja</a>
                                <a class="dropdown-item" href="{{ route('Quejas.index') }}">Ver Queja</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-ver" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Factura
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown-ver">
                                <a class="dropdown-item" href="{{ route('Facturacion.create') }}">Crear Fac</a>
                                <a class="dropdown-item" href="{{ route('Facturacion.index') }}">Mostrar Fac</a>
                            </div>
                        </li>


                    </ul>
                    <ul class="navbar-nav mr-auto">
                    </ul>

                    @elseif (Auth::user()->lista=="trab")
                        <li class="nav-item">
                            <a href="{{route('home')}}" class="nav-link">BIENVENIDOS</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-ver" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Atenciones
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown-ver">
                                <a class="dropdown-item" href="{{ route('Atencion.create') }}">Crear </a>
                                <a class="dropdown-item" href="{{ route('Derivacion.create') }}">Crear Derivacion </a>
                                <a class="dropdown-item" href="{{ route('Atencion.index') }}">Ver</a>
                                <a class="dropdown-item" href="{{ route('Derivacion.index') }}">Ver Derivacion</a>

                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-ver" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Promociones
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown-ver">
                                <a class="dropdown-item" href="{{ route('Promocion.create') }}">Crear </a>
                                <a class="dropdown-item" href="{{ route('Promocion.index') }}">Ver</a>
                            </div>
                        </li>


                        </ul>
                        <ul class="navbar-nav mr-auto">
                        </ul>

                @endif
                    @endif






                                <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">


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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
</html>
