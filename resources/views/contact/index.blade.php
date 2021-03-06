@extends('layouts.template')
@section('title', __('contacts.phonebook'))

@section('content')
    <h1 class="contact__title">@lang('contacts.phonebook')</h1>

    @if (!$contacts->isEmpty())
        <table class="table table-responsive-md table-bordered contact__table">
            <thead>
            <tr>
                <th>#</th>
                <th></th>
                <th>@lang('contacts.firstname')</th>
                <th>@lang('contacts.lastname')</th>
                <th>@lang('contacts.phone')</th>
                <th>@lang('contacts.address')</th>
                <th>@lang('contacts.views')</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $key => $contact)
                <tr>
                    <th>{{ $start + $key }}</th>
                    <td><img class="contact__table-img" src="{{ asset($contact->avatar) }}"></td>
                    <td><a href="{{ route('contacts.show', $contact->id) }}">{{ $contact->first_name }}</a></td>
                    <td>{{ $contact->last_name }}</td>
                    <td>
                        @foreach($contact->phone_arr as $phone)
                            <div>
                                <a href="tel:{{ $phone }}">{{ $phone }}</a>
                            </div>
                        @endforeach
                    </td>
                    <td>{{ $contact->address }}</td>
                    <td>{{ $contact->counter_view }}</td>
                </tr>
            @endforeach


            </tbody>
        </table>
    @else
        <div class="alert alert-danger">
            <p>@lang('contacts.nothing')</p>
        </div>
    @endif



    {{ $contacts->links() }}
@endsection
