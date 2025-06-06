<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Hrd</title>
</head>
<body>
    <header>
        @include('components.navbar')
    </header>
    <div class="mx-auto py-8 mt-16 font-poppins"> 
        @yield('content')
    </div>
    <footer>
        @include('components.footer')
    </footer>
</body>
</html>
