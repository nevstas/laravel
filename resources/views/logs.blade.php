@extends('template')
@section('title', 'Логи для контакта "' . $contact->format_name . '"')

@section('content')
    <h1 class="contact__title">Логи для контакта "{{ $contact->format_name }}"</h1>

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

    <a class="btn btn-primary button" href="{{ route('contacts.index')  }}" role="button">Назад к контактам</a>
@endsection
