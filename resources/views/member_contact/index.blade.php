@extends('layouts.template')
@section('title', __('contacts.my_phonebook'))

@section('content')
    <h1 class="contact__title">@lang('contacts.my_phonebook')</h1>

    <a class="btn btn-success button" href="{{ route('member.contacts.create') }}" role="button">@lang('contacts.new_contact')</a>

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
                <th>@lang('contacts.status')</th>
                <th>@lang('logs.logs')</th>
                <th>@lang('contacts.delete')</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $key => $contact)
                <tr>
                    <th>{{ $start + $key }}</th>
                    <td><img class="contact__table-img" src="{{ asset($contact->avatar) }}"></td>
                    <td><a href="{{ route('member.contacts.show', $contact->id) }}">{{ $contact->first_name }}</a></td>
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
                    <td>{{ $contact->status_human }}</td>
                    <td>
                        <a class="btn btn-primary button" href="{{ route('logs.index', $contact->id) }}" role="button">@lang('logs.logs')</a>
                    </td>
                    <td>
                        <a class="btn btn-danger button contact__btn-remove" href="javascript:void(0)" role="button" onclick="">@lang('contacts.delete')</a>
                        <form class="contact__form-remove" action="{{ route('member.contacts.destroy', $contact->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                        </form>
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
