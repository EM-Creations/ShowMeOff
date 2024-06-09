<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.website-name', 'ShowMeOff') }} - Page not found</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    </head>
    <body>
        <div id="app">
            <main style='text-align:center;' class='container'>
                <h1>PAGE NOT FOUND (404)</h1>
                <p>Looks like a cheeky bunny might have nipped the cable!</p>
                <p><a href="{{ route('gotoHome') }}">Click here to go back home.</a></p>
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
    </body>
</html>
