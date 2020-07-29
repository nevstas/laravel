@extends('template')
@section('title', 'Добавить контакт')

@section('content')
    <div class="contact__create-container">
        <h1 class="contact__title">Добавить контакт</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="last_name" class="col-sm-2 col-form-label">Фамилия</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Введите фамилию" value="{{ old('last_name')  }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="first_name" class="col-sm-2 col-form-label">Имя</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Введите имя" value="{{ old('first_name')  }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="patronymic" class="col-sm-2 col-form-label">Отчество</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="patronymic" name="patronymic" placeholder="Введите отчество" value="{{ old('patronymic')  }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-sm-2 col-form-label">Телефон</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Введите телефон" value="{{ old('phone')  }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">Адрес</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="address" name="address" placeholder="Введите адрес" value="{{ old('address')  }}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-success">Добавить</button>
                    <a class="btn btn-primary contact__button-back" href="/" role="button">Назад</a>
                </div>
            </div>
        </form>
    </div>
@endsection
