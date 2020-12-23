@extends('layouts.template')
@section('title', __('top_menu.about'))

@section('content')
    <h1>@lang('top_menu.about')</h1>
    <p>
        @lang('about.about_text')
    </p>
    <p>
        Github <a target="_blank" href="https://github.com/nevstas/laravel">https://github.com/nevstas/laravel</a>
    </p>
@endsection

