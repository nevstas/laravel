@extends('template')
@section('title', __('logs.logs_ext', ['name' => $contact->format_name]))

@section('content')
    <h1 class="contact__title">@lang('logs.logs_ext', ['name' => $contact->format_name])</h1>

    @if (!$logs->isEmpty())
        <table class="table table-bordered contact__logs">
            <thead>
            <tr>
                <th>#</th>
                <th>@lang('general.action')</th>
                <th>@lang('general.date')</th>
            </tr>
            </thead>
            <tbody>
            @foreach($logs as $key => $log)
                <tr>
                    <th>{{ $start + $key }}</th>
                    <td>{{ $log->status_human }}</td>
                    <td>{{ \Carbon\Carbon::parse($log->created_at)->format('d.m.Y H:i:s')}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-danger">
            <p>@lang('logs.nothing')</p>
        </div>
    @endif


    {{ $logs->links() }}

    <a class="btn btn-primary button" href="{{ route('member.contacts.index')  }}" role="button">@lang('general.back')</a>
@endsection
