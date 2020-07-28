@extends('template')
@section('title', 'Контакт "' . $contact->first_name . '"')

@section('content')
    <h1 class="title">Контакт "{{ $contact->first_name }}"</h1>

    <table class="table table-bordered table-tasks">
        <tbody>
            <tr>
                <td>Имя</td>
                <td>{{ $contact->first_name }}</td>
            </tr>
            <tr>
                <td>Фамилия</td>
                <td>{{ $contact->last_name }}</td>
            </tr>
            <tr>
                <td>Отчество</td>
                <td>{{ $contact->patronymic }}</td>
            </tr>
            <tr>
                <td>Телефон</td>
                <td>{{ $contact->phone }}</td>
            </tr>
            <tr>
                <td>Адрес</td>
                <td>{{ $contact->address }}</td>
            </tr>
            <tr>
                <td>Просмотров</td>
                <td>{{ $contact->counter_view }}</td>
            </tr>
        </tbody>
    </table>
@endsection
