<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @vite(['resources/sass/app.scss'])
    </head>
    <body class="auth-body">
        
        <div class="auth-container">
            <div class="login-register-container">
                <h1>Gym System<span>.</span></h1>
                <small>You can fill in your login info below.</small>
                
                {{ $slot }}
            </div>

            
            <img src="img/pxfuel3.jpg" alt="">
        </div>
        

    </body>
</html>
