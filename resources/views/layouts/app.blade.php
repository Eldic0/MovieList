<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- image --}}
    <link rel="shortcut icon" href="/foto/logo.png" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>

<body>
    <div id="app" style="background-color: black;">
        <nav class="navbar navbar-expand-md navbar-light" style="background-color: #242323">
            <div class="container" style="margin-bottom: 0%;">
                <a href="/"><img src="/foto/logo.png" style="width: 125px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                @if (!Auth::check())
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/welcomes">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/movies">Movies</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/actors">Actors</a>
                            </li>
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="btn btn-primary me-2"
                                            href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="btn btn-outline-danger me-2"
                                            href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
                            @endguest
                        </ul>
                    </div>
                @elseif(Auth::user()->position == 'user')
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/welcomes">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/movies">Movies</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/actors">Actors</a>
                            </li>
                            <!-- Authentication Links -->
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/watchlist">My Watchlists</a>
                            </li>
                            <li class="nav-item dropdown">
                                @if (Auth::user()->image)
                                    <a role="button" id="usercircle" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"><img style="border-radius: 50%; width:40px; height:40px;"
                                            src="{{ Auth::user()->image }}" alt=""></a>
                                @else
                                    <a class="fa fa-user-circle-o nav-link text-white" role="button" id="usercircle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                @endif
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="usercircle">
                                    <a class="dropdown-item text-dark" href="/profile">
                                        <center>{{ Auth::user()->name }}</center>
                                    </a>
                                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                        style="font-weight: bold;">
                                        <center>{{ __('Logout') }}</center>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                @else
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/welcomes">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/movies">Movies</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/actors">Actors</a>
                            </li>
                            <!-- Authentication Links -->
                            <li class="nav-item dropdown">
                                @if (Auth::user()->image)
                                    <a role="button" id="usercircle" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"><img
                                            style="border-radius: 50%; width:40px; height:40px;"
                                            src="{{ Auth::user()->image }}" alt=""></a>
                                @else
                                    <a class="fa fa-user-circle-o nav-link text-white" role="button" id="usercircle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                @endif
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="usercircle">
                                    <a class="dropdown-item text-dark" href="/profile">
                                        <center>{{ Auth::user()->name }}</center>
                                    </a>
                                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                        style="font-weight: bold;">
                                        <center>{{ __('Logout') }}</center>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                @endif
            </div>
        </nav>

        @yield('content')

        @if (Route::is('login') || Route::is('register'))
            <br><br><br>
            @include('footer')
        @endif
    </div>

</body>
<style>
    .py-4 {

        height: 680px;
        background-color: black;
    }

    .nav-item {
        padding-right: 10px;
    }
</style>

</html>
