<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>Songbird</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="/css/mila.css" rel="stylesheet">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="navbar py-5 py-5 {{ Request::is('/') ? 'navbar-transparent' : 'navbar-opaque' }}">
            <div class="navcontainer mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="flex items-center">
                        <img src="images/songbirdlogo.png" alt="Logo" class="h-10 w-10 mr-2">
                        <span class="text-lg font-semibold text-white no-underline" style="color: rgb(103, 34, 34); font-family: &quot;Montserrat&quot;, sans-serif; font-weight: 700; font-size: 20px">
                            Songbird
                        </span>
                    </a>
                </div>
                <nav class="navlinks space-x-4 text-white text-sm sm:text-base">
                    <a class="no-underline hover:underline" href="/blog">Blog</a>
                    <a class="no-underline hover:underline" href="/songgen">Song Finder</a>
                    <a class="no-underline hover:underline" href="/playlists">Playlists</a>
                    <a class="no-underline hover:underline" href="/reviews">Reviews</a>
                    @guest
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>

        @yield('content')
    </div>
    <script>
    window.addEventListener('scroll', function() {
        var navbar = document.querySelector('.navbar');
        var scrollPosition = window.scrollY;
    
        if (scrollPosition > 650) {
            navbar.classList.add('navbar-scrolled');
        } else {
            navbar.classList.remove('navbar-scrolled');
        }
    })
    </script>
</body>
</html>
