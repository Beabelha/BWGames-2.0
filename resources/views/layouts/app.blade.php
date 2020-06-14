<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'BWGames') }}</title>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/perfil.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <link rel="icon" href="{{ URL::asset('/images/logoprov.png') }}" type="image/x-icon" />
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    @yield('css')

    @yield('javascript')
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('/images/logoprov.png') }}" width="60px" height="60px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a href="{{ route('users.edit-profile') }}" class="dropdown-item">Meu Perfil</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">{{ __('Sair') }}</button>
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 container">

            @if(session()->has('success'))
            <div class="alert alert-success">{{ session()->get('success') }}</div>
            @endif
            @if(session()->has('error'))
            <div class="alert alert-danger">{{ session()->get('error') }}</div>
            @endif
            @auth
            @if(auth()->user()->isAdmin())
            <div class="row">
                <div class="col-md-3">
                    <ul class="list-group perfil">
                        <a class="a" href="{{ route('products.index') }}">
                            <li class="list-group-item a "><img
                                    src="https://image.flaticon.com/icons/svg/2991/2991615.svg" width="25px"
                                    height="25px"> Jogos </li>
                        </a>
                        <a class="a" href="{{ route('categories.index') }}">
                            <li class="list-group-item a"><img src="https://img.icons8.com/wired/2x/categorize.png"
                                    width="25px" height="25px">
                                Categorias</li>
                        </a>
                    </ul>
                    <ul class="list-group mt-2 a" id="accordionExample">
                        <div class="accordion" id="accordionExample">
                            <button class="btn btn-block text-left list-group-item a" type="button"
                                data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                                Lixeiras
                            </button>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <a class="a" href="{{ route('trashed-product.index') }}">
                                    <li class="list-group-item a"><img
                                            src="https://img.icons8.com/dotty/2x/full-trash.png" width="25px"
                                            height="25px"> Lixeira de Jogos</li>
                                </a>
                                <a class="a" href="{{ route('trashed-categories.index') }}">
                                    <li class="list-group-item a"><img
                                            src="https://img.icons8.com/dotty/2x/full-trash.png" width="25px"
                                            height="25px"> Lixeira de Categorias</li>
                                </a>
                            </div>
                        </div>
                    </ul>
                </div>
                <div class="col-md-9">
                    @yield('content')
                </div>
            </div>
            @else
            @yield('content')
            @endif
            @else
            @yield('content')
            @endauth

 
              @auth
            @if(auth()->user()->isUser())
            <br>
            <div class="row">
                <div class="col-md-3">
                    <ul class="list-group perfil">
                        <a class="a" href="{{ route('products.index') }}">
                            <li class="list-group-item a "><img
                                    src="https://image.flaticon.com/icons/svg/2991/2991615.svg" width="25px"
                                    height="25px"> Jogos </li>
                        </a>
                       
                   <li> <ul class="list-group mt-2 a" id="accordionExample">
                        <div class="accordion" id="accordionExample">
                            <button class="btn btn-block text-left list-group-item a" type="button"
                                data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                                Lixeiras
                            </button>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <a class="a" href="{{ route('trashed-product.index') }}">
                                    <li class="list-group-item a"><img
                                            src="https://img.icons8.com/dotty/2x/full-trash.png" width="25px"
                                            height="25px"> Lixeira de Jogos</li>
                                </a>
                            </div>
                        </div>
                    </ul>
                   </li>
                </ul>
                </div>
   
            </div>
 
            @endif
            @endauth


        </main>
    </div>
</body>

</html>