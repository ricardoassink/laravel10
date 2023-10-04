<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - {{ config('app.name') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
    {{-- <body class="bg-gradient-to-l from-blue-800 via-indigo-400 to-violet-900 container mx-auto p-6 bg-[url('../img/fundo.jpeg')]"> --}}
        <body class=" bg-[url('img/fundo4.jpg')] container mx-auto p-6"> 
    <head>
        @yield('header')
    </head>
    <div class="content">
        @yield('content')
    </div>
    <footer>
        @yield('footer')
    </footer>
</body>
</html>