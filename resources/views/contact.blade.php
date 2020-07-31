@extends('template')
@section('title', 'Контакт "' . $contact->format_name . '"')

@section('content')
    <h1 class="contact__title">Контакт "{{ $contact->format_name }}"</h1>

    <div class="contact__img-container">
        <img class="contact__img" src="{{ asset('storage/' . $contact->avatar) }}">
    </div>

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
                <td><a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a></td>
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

    <h2 class="contact__title">Логи</h2>

    <table class="table table-bordered contact__logs">
        <thead>
        <tr>
            <th>#</th>
            <th>Действие</th>
            <th>Дата</th>
        </tr>
        </thead>
        <tbody>
        @foreach($logs as $key => $log)
            <tr>
                <th>{{ $key + 1  }}</th>
                <td>{{ $log->status_human }}</td>
                <td>{{ \Carbon\Carbon::parse($log->created_at)->format('d.m.Y H:i:s')}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a class="btn btn-primary button" href="{{ route('contacts.index')  }}" role="button">Назад</a>
@endsection
