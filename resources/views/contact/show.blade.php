@extends('layouts.template')
@section('title', __('contacts.contact_ext', ['name' => $contact->format_name]))

@section('content')
    <h1 class="contact__title">@lang('contacts.contact_ext', ['name' => $contact->format_name])</h1>

    <div class="contact__img-container">
        <img class="contact__img" src="{{ asset($contact->avatar) }}">
    </div>

    <table class="table table-bordered contact__table">
        <tbody>
            <tr>
                <td>@lang('contacts.firstname')</td>
                <td>{{ $contact->first_name }}</td>
            </tr>
            <tr>
                <td>@lang('contacts.lastname')</td>
                <td>{{ $contact->last_name }}</td>
            </tr>
            <tr>
                <td>@lang('contacts.phone')</td>
                <td>
                    @foreach($contact->phone_arr as $phone)
                        <div>
                            <a href="tel:{{ $phone }}">{{ $phone }}</a>
                        </div>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td>@lang('contacts.address')</td>
                <td>{{ $contact->address }}</td>
            </tr>
            <tr>
                <td>@lang('contacts.views')</td>
                <td>{{ $contact->counter_view }}</td>
            </tr>
        </tbody>
    </table>

    <a class="btn btn-primary button" href="{{ route('contacts.index')  }}" role="button">@lang('general.back')</a>
@endsection
