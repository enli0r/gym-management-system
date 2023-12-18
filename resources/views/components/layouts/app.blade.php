<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Management System</title>
    <link rel="icon" href="https://cdn3.vectorstock.com/i/1000x1000/57/07/gym-icon-vector-3955707.jpg">


    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/f3aeed9828.js" crossorigin="anonymous"></script>
    


    @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>

    <div class="main-container">
        <x-sidebar />
        <section class="main">
            {{-- <x-navbar /> --}}
    
            {{$slot}}
        </section>
    </div>

    @livewireScriptConfig
</body>
</html>