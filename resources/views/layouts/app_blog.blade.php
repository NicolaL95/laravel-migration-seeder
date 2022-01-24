<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Flights</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
        <h1 class='text-danger text-center'>Lista elementi Blog</h1>
          <main id='main_container'>
            @yield('main')
        </main>
    </body>
</html>
