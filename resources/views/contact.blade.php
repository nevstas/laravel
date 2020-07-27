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

        <h1 class="title">Контакт "{{ $contact->name }}"</h1>

        <table class="table table-bordered table-tasks">
            <tbody>
                <tr>
                    <td>Имя</td>
                    <td>{{ $contact->name }}</td>
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
    </div>

    </body>
</html>
