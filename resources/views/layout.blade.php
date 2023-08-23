<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Orient Orbits</title>
</head>

<body>

   {{-- @include('header') --}}

   @include('nav')
    
    <main>
        @yield('content')
    </main>
    
    @include('footer')

</body>

</html>
