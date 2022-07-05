<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            max-width: 1200px;
            margin: auto;
            overflow: hidden;
            overflow-y: scroll;
        }
    </style>
</head>
<body class="d-flex flex-column">
<nav class="navbar navbar-light navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">SummaMove</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/exercises">{{ __('exercises') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/users">{{__('users')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/settings">{{ __('settings') }}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div>
    @yield('title')
</div>

<div class="mt-5">
    @yield('content')
</div>

<footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom mb-3 d-flex">
        <li>
            @if (Route::has('login'))
                <div class="d-flex ">
                    @auth

                        <form class="flex-fill" method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('logout') }}
                            </x-dropdown-link>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="flex-fill mx-1">{{ __('login') }}</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="flex-fill">{{ __('register') }}</a>
                        @endif
                    @endauth
                </div>
            @endif

        </li>
        <li>

        </li>
    </ul>
    <p class="text-center text-muted">© 2022 Laurens, Richard, Jimmy</p>
</footer>
</body>
</html>
