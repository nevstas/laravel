@extends('template')
@section('title', __('top_menu.about'))

@section('content')
    <h1>@lang('top_menu.about')</h1>
    <p>
        @lang('about.about_text')
    </p>
@endsection
