@extends('template')
@section('title', __('contacts.my_contacts'))

@section('content')
    <h1 class="contact__title">@lang('contacts.my_contacts')</h1>

    <a class="btn btn-success button" href="{{ route('member.contacts.create') }}" role="button">@lang('contacts.new_contact')</a>

    @if (!$contacts->isEmpty())
        <table class="table table-bordered contact__table">
            <thead>
            <tr>
                <th>#</th>
                <th></th>
                <th>@lang('contacts.lastname')</th>
                <th>@lang('contacts.firstname')</th>
                <th>@lang('contacts.patronymic')</th>
                <th>@lang('contacts.phone')</th>
                <th>@lang('contacts.address')</th>
                <th>@lang('contacts.views')</th>
                <th>@lang('contacts.status')</th>
                <th>@lang('logs.logs')</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $key => $contact)
                <tr>
                    <th>{{ $start + $key }}</th>
                    <td><img class="contact__table-img" src="{{ asset('storage/' . $contact->avatar) }}"></td>
                    <td><a href="{{ route('member.contacts.show', $contact->id) }}">{{ $contact->last_name }}</a></td>
                    <td>{{ $contact->first_name }}</td>
                    <td>{{ $contact->patronymic }}</td>
                    <td><a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a></td>
                    <td>{{ $contact->address }}</td>
                    <td>{{ $contact->counter_view }}</td>
                    <td>{{ $contact->status_human }}</td>
                    <td>
                        <a class="btn btn-primary button" href="{{ route('logs.index', $contact->id) }}" role="button">@lang('logs.logs')</a>
                    </td>
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