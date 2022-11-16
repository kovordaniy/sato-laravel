<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased bg-gray-100">
        <div class="bg-stone-800 text-white">
            <ul class="max-w-6xl mx-auto p-4 flex space-x-4">
                <li>
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('login') }}">Login</a>
                </li>
                <li>
                    <a href="{{ route('register') }}">Register</a>
                </li>
            </ul>
        </div>
        <div class="max-w-6xl mx-auto px-4 py-8">
            @yield('content')
        </div>

        <script type="text/javascript" src="{{ asset('js/app.js') }}""></script>
    </body>
</html>
