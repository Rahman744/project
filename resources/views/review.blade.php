@extends('layout')

@section('title')Отзывы@endsection

@section('main_content')
    <h1>Форма добавления отзыва</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="/review/check">
        @csrf
        <input type="email" name="email" id="email" placeholder="Введите email" class="form-control"><br>
        <input type="name" name="subject" id="subject" placeholder="Введите Отзыв" class="form-control"><br>
        <textarea name="message" id="message" placeholder="Введите сообщение" class="form-control"></textarea><br>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
    <br>
    <h1>Все отзывы</h1>
    @foreach($review as $el)
        <div class="alert alert-warning">
            <h6>{{ $el->email }}</h6>
            <h6>{{ $el->subject }}</h6>
            <h6>{{ $el->message }}</h6>
        </div>
    @endforeach
@endsection
