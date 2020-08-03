@extends('template')
@section('title', __('contacts.new_contact'))

@section('content')
    <div class="contact__create-container">
        <h1 class="contact__title">@lang('contacts.new_contact')</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('member.contacts.store') }}" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="form-group row">
                <label for="last_name" class="col-sm-2 col-form-label">@lang('contacts.lastname')</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="@lang('contacts.your_lastname')" value="{{ old('last_name')  }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="first_name" class="col-sm-2 col-form-label">@lang('contacts.firstname')</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="@lang('contacts.your_firstname')" value="{{ old('first_name')  }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="patronymic" class="col-sm-2 col-form-label">@lang('contacts.patronymic')</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="patronymic" name="patronymic" placeholder="@lang('contacts.your_patronymic')" value="{{ old('patronymic')  }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-sm-2 col-form-label">@lang('contacts.phone')</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="@lang('contacts.your_phone')" value="{{ old('phone')  }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">@lang('contacts.address')</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="address" name="address" placeholder="@lang('contacts.your_address')" value="{{ old('address')  }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="avatar" class="col-sm-2 col-form-label">@lang('contacts.avatar')</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control-file" id="avatar" name="avatar">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-success button">@lang('general.add')</button>
                    <a class="btn btn-primary button--additional" href="{{ route('contacts.index') }}" role="button">@lang('general.back')</a>
                </div>
            </div>
        </form>
    </div>
@endsection
