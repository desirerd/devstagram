<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Devstagram - @yield('titulo')</title>
        @vite('resources/css/app.css') 
        <!-- Fonts 
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        -->
 
    </head>
    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow">
          <div class="container mx-auto flex justify-between">
                 <h1 class="text-3xl font-black"> Devstagram </h1>
          </div>
          <p> Nuevos cambios en el proyecto de Laravel </p> sdafasdf
          <nav>
                <a class="font-bold uppercase text-gray-600 text-sm" href="#">Login</a>
                <a class="font-bold uppercase text-gray-600 text-sm" href="#">Crear Cuenta </a>

          </nav>
        </header>

    </body>
</html>
