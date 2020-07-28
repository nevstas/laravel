@extends('template')
@section('title', 'Телефонный справочник')

@section('content')
    <h1 class="title">Телефонный справочник</h1>

    <table class="table table-bordered table-tasks">
        <thead>
        <tr>
            <th>#</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Отчество</th>
            <th>Телефон</th>
            <th>Адрес</th>
            <th>Просмотров</th>
        </tr>
        </thead>
        <tbody>
        @foreach($contacts as $key => $contact)
            <tr>
                <th>{{ $key + 1  }}</th>
                <td><a href="/contact/{{ $contact->id }}">{{ $contact->first_name }}</a></td>
                <td>{{ $contact->last_name }}</td>
                <td>{{ $contact->patronymic }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->address }}</td>
                <td>{{ $contact->counter_view }}</td>
            </tr>
        @endforeach


        </tbody>
    </table>
@endsection
