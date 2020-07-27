<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <style>
            .table-tasks {
                margin-top: 40px;
            }

            .title {
                margin-top: 20px;
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>

    <div class="container">

        <h1 class="title">Телефонный справочник</h1>

        <table class="table table-bordered table-tasks">
            <thead>
            <tr>
                <th>#</th>
                <th>Имя</th>
                <th>Телефон</th>
                <th>Адрес</th>
                <th>Просмотров</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $key => $contact)
                <tr>
                    <th>{{ $key + 1  }}</th>
                    <td><a href="/contact/{{ $contact->id }}">{{ $contact->name }}</a></td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->address }}</td>
                    <td>{{ $contact->counter_view }}</td>
                </tr>
            @endforeach


            </tbody>
        </table>
    </div>

    </body>
</html>
