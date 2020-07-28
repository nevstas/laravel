<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <style>
            .table-tasks {
                margin-top: 40px;
            }

            .title {
                margin-top: 20px;
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>

    <div class="container">
        @yield('content')
    </div>

    </body>
</html>
