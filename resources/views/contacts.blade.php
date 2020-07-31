@extends('template')
@section('title', 'Телефонный справочник')

@section('content')
    <h1 class="contact__title">Телефонный справочник</h1>

    <a class="btn btn-success button" href="{{ route('contacts.create') }}" role="button">Добавить</a>

    <table class="table table-bordered contact__table">
        <thead>
        <tr>
            <th>#</th>
            <th></th>
            <th>Фамилия</th>
            <th>Имя</th>
            <th>Отчество</th>
            <th>Телефон</th>
            <th>Адрес</th>
            <th>Просмотров</th>
            <th>Логи</th>
        </tr>
        </thead>
        <tbody>
        @foreach($contacts as $key => $contact)
            <tr>
                <th>{{ $key + 1  }}</th>
                <td><img class="contact__table-img" src="{{ asset('storage/' . $contact->avatar) }}"></td>
                <td><a href="{{ route('contacts.show', $contact->id) }}">{{ $contact->last_name }}</a></td>
                <td>{{ $contact->first_name }}</td>
                <td>{{ $contact->patronymic }}</td>
                <td><a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a></td>
                <td>{{ $contact->address }}</td>
                <td>{{ $contact->counter_view }}</td>
                <td>

                    <button class="btn btn-primary contact__log-button" type="button" data-toggle="collapse" data-target="#contact__log-content_{{ $key }}" aria-expanded="false" aria-controls="collapseExample">
                        Показать
                    </button>

                    <div class="collapse contact__log-content" id="contact__log-content_{{ $key }}">
                        <div class="card card-body">
                            {{ $contact->logsLimit }}
                        </div>
                    </div>

                </td>
            </tr>
        @endforeach


        </tbody>
    </table>
@endsection
