<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Additional meta tags -->
        <meta name="description" content="{{ config('app.website-description', 'ShowMeOff') }}">
        <meta property="og:title" content="{{ config('app.website-name', 'ShowMeOff') }}" >
        <meta property="og:type" content="website" >
        <meta property="og:url" content="{{ config('app.url', 'http://localhost/') }}" >
        <meta property="og:image" content="{{ config('app.url', 'http://localhost/') }}/public/images/home-image.png" >
        <meta property="og:site_name" content="{{ config('app.website-name', 'ShowMeOff') }}" >
        <meta property="og:description" content="{{ config('app.website-description', 'ShowMeOff') }}" >

        <title>{{ config('app.website-name', 'ShowMeOff') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/lightbox.min.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    </head>
    <body>
        <div id="app">
            <header>
                <nav id="top-nav" class="container navbar-default navbar-static-top">
                    <ul>
                        <li><a class="@if (Route::currentRouteName() == 'gotoHome') active @endif" href="{{ route('gotoHome') }}">Home</a></li>
                        <li><a class="@if (Route::currentRouteName() == 'gotoAbout') active @endif" href="{{ route('gotoAbout') }}">About</a></li>
                        <li><a class="@if ((Route::currentRouteName() == 'gotoIllustrations') || (Route::currentRouteName() == 'gotoIllustrationsByGallery')) active @endif" href="{{ route('gotoIllustrations') }}">Illustrations</a></li>
                        <li><a class="@if (Route::currentRouteName() == 'gotoContact') active @endif" href="{{ route('gotoContact') }}">Contact</a></li>
                    </ul>
                </nav>
            </header>

            <main>
                @yield('content')
            </main>

            <footer class="container">
                Copyright &copy; {{ Carbon\Carbon::now()->format('Y') }} Lorna Bunnie.
                <span id='social-links'>
                    <a href="http://lorndasha.tumblr.com/" target="_blank"><img src="{{ asset('images/tumblr-icon.png') }}" title="Tumblr" alt="Lorna Bunnie on Tumblr."/></a>
                    <a href="https://www.linkedin.com/in/lorna-bunnie-041914a4/" target="_blank"><img src="{{ asset('images/linkedin-icon.png') }}" title="LinkedIn" alt="Lorna Bunnie on LinkedIn."/></a>
                    <a href="http://uhanimation.co.uk" target="_blank"><img src="{{ asset('images/uhicon.png') }}" title="University of Hertfordshire Animation" alt="University of Hertfordshire Animation"/></a>
                </span>
            </footer>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/lightbox-plus-jquery.min.js') }}"></script>
    </body>
</html>
