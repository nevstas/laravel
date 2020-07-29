<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css"/>

    </head>
    <body>

    <div class="container">
        @yield('content')
    </div>

    </body>
</html>
