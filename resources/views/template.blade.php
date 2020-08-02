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
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ route('contacts.index') }}">@lang('contacts.phonebook')</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contacts.about') }}">@lang('top_menu.about')</a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#">Pricing</a>--}}
{{--                    </li>--}}
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @lang('top_menu.language')
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarLanguage">
                            <a class="dropdown-item" href="{{ route('system.change_language', 'ru') }}">@lang('top_menu.russian')</a>
                            <a class="dropdown-item" href="{{ route('system.change_language', 'en') }}">@lang('top_menu.english')</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <script src="{{ URL::asset('js/app.js') }}"></script>
    </body>
</html>
