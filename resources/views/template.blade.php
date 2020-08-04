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
                        <a class="nav-link" href="{{ route('about') }}">@lang('top_menu.about')</a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">@lang('auth.login')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">@lang('auth.register')</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('member.contacts.index') }}">@lang('top_menu.my_phonebook')</a>
                        </li>
                    @endguest
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @lang('top_menu.language')
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarLanguage">
                            <a class="dropdown-item {{ app()->getLocale() == 'ru' ? 'active' : '' }}" href="{{ route('system.change_language', 'ru') }}">@lang('top_menu.russian')</a>
                            <a class="dropdown-item {{ app()->getLocale() == 'en' ? 'active' : '' }}" href="{{ route('system.change_language', 'en') }}">@lang('top_menu.english')</a>
                        </div>
                    </li>
                    @guest
                    @else
                        <li class="nav-item dropdown">

                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img class="nav-item__avatar" src="{{ asset('storage/' . (Auth::user()->avatar ? Auth::user()->avatar : 'users_avatar/no-image.jpg')) }}">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('profile.edit') }}">@lang('user.profile')</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    @lang('auth.logout')
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest

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
