<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <!-- Styles -->
        @vite('resources/css/king.min.css')
        @vite('resources/css/datatables.min.css')
        @vite('resources/css/app.css')
    </head>
    <body>
        <header>
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <img class="pull-left-md width-sm-full width-xs-9" id="logo" src="{{ asset('img/logo.png') }}" alt="" />
                </div>
                <div class="col-md-9 col-sm-8">
                    <nav class="nav h6">
                        <ul>
                            <li><a href="{{ url("/"); }}">Home</a></li>
                            <li><a href="{{ url("/posts"); }}">Posts</a></li>
                            <li><a href="{{ url("/layout"); }}">Layout</a></li>
                        </ul>
                    </nav> 
                </div>        
            </div>
        </header>
        <main class="container">
                @yield('content')
        </main>
        <footer class="container clearfix p-y-20 border-top">
            <p class="text-center">&copy;2023 3rd Party solutions; All rights reserved.</p>
        </footer>
        
        @vite('resources/js/app.js')
    </body>
</html>
