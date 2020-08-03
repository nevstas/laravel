@extends('template')
@section('title', __('user.profile'))

@section('content')
    <div class="profile__create-container">
        <h1 class="profile__title">@lang('user.profile')</h1>

        <div class="profile__img-container">
            <img class="profile__img" src="{{ asset('storage/' . ($user->avatar ? $user->avatar : 'users_avatar/no-image.jpg')) }}">
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('profile.update', $user->id) }}" method="post" enctype="multipart/form-data" >
            @method('PUT')
            @csrf
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">@lang('user.name')</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="@lang('user.your_name')" value="{{ old('last_name', $user->name) }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="avatar" class="col-sm-2 col-form-label">@lang('user.avatar')</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control-file" id="avatar" name="avatar">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-success button">@lang('general.save')</button>
                </div>
            </div>
        </form>
    </div>
@endsection
