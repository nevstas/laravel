@extends('template')
@section('title', __('top_menu.about'))

@section('content')
    <h1>@lang('top_menu.about')</h1>
    <p>
        @lang('about.about_text')
    </p>
    <p>
        Gitlab <a target="_blank" href="https://gitlab.com/nevstas/laravel">https://gitlab.com/nevstas/laravel</a>
    </p>
@endsection
