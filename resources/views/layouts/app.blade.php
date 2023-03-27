<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'UI Digital - Post') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel mt-16" >
            <div class="container">
                <a class="logo-full" href="{{ url('/') }}">

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto"></ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link item-menu " href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                            </li>
                            <li><a class="nav-link item-menu " href="{{ route('register') }}">{{ __('Registar') }}</a></li>
                        @else
                            <li><a class="nav-link item-menu" href="{{ url('/home') }}">Dashboard</a></li>
                            {{-- <li><a class="nav-link item-menu" href="{{ route('users.index') }}">Usuarios</a></li>
                            <li><a class="nav-link item-menu" href="{{ route('roles.index') }}">Roles</a></li> --}}
                            {{-- <li><a class="nav-link item-menu" href="{{ route('categories.index') }}">Categorias</a></li>
                            <li><a class="nav-link item-menu" href="{{ route('posts.index') }}">Posts</a></li> --}}

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Blog
                                </a>
                                <ul class="dropdown-menu">
                                    @can('ver-category')
                                        <li><a class="dropdown-item" href="{{ route('categories.index') }}">Categorias</a></li>
                                    @endcan
                                    <li><a class="dropdown-item" href="{{ route('posts.index') }}">Posts</a></li>
                                </ul>
                            </li>


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu">
                                    @can('ver-user')
                                        <li><a class="dropdown-item" href="{{ route('users.index') }}">Usuarios</a></li>
                                    @endcan
                                    @can('ver-rol')
                                        <li><a class="dropdown-item"href="{{ route('roles.index') }}">Roles</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                    @endcan
                                    <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                            {{ __('Salir') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            {{-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li> --}}
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>
    </div>
</body>

</html>
