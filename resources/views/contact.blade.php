@extends('template')
@section('title', 'Контакт "' . $contact->format_name . '"')

@section('content')
    <h1 class="contact__title">Контакт "{{ $contact->format_name }}"</h1>

    <table class="table table-bordered contact__table">
        <tbody>
            <tr>
                <td>Фамилия</td>
                <td>{{ $contact->last_name }}</td>
            </tr>
            <tr>
                <td>Имя</td>
                <td>{{ $contact->first_name }}</td>
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
