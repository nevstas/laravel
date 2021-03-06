@extends('layouts.template')
@section('title', __('contacts.edit_contact', ['name' => $contact->format_name]))

@section('content')
    <div class="contact__create-container">
        <h1 class="contact__title">@lang('contacts.edit_contact', ['name' => $contact->format_name])</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('member.contacts.update', $contact->id) }}" method="post" enctype="multipart/form-data" >
            @method('PUT')
            @csrf
            <div class="form-group row">
                <label for="first_name" class="col-sm-2 col-form-label">@lang('contacts.firstname')</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="@lang('contacts.your_firstname')" value="{{ old('first_name', $contact->first_name) }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="last_name" class="col-sm-2 col-form-label">@lang('contacts.lastname')</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="@lang('contacts.your_lastname')" value="{{ old('last_name', $contact->last_name) }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-sm-2 col-form-label">@lang('contacts.phone')</label>
                <div class="col-sm-10">
                    <contact-phone :phones="{{ old('phone') ? json_encode(old('phone')) : $contact->phone }}"></contact-phone>
                </div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">@lang('contacts.address')</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="address" name="address" placeholder="@lang('contacts.your_address')" value="{{ old('address', $contact->address) }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="avatar" class="col-sm-2 col-form-label">@lang('contacts.avatar')</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control-file" id="avatar" name="avatar">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">@lang('contacts.status')</label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="status_public" value="public" @if (old('status') == 'public' || (!old('status') && $contact->status == 'public')) checked @endif>
                        <label class="form-check-label" for="status_public">@lang('contacts.status_public')</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="status_private" value="private" @if (old('status') == 'private' || (!old('status') && $contact->status == 'private')) checked @endif>
                        <label class="form-check-label" for="status_private">@lang('contacts.status_private')</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-success button">@lang('general.save')</button>
                    <a class="btn btn-primary button--additional" href="{{ route('contacts.index') }}" role="button">@lang('general.back')</a>
                </div>
            </div>
        </form>
    </div>
@endsection
