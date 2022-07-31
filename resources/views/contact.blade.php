@extends('layouts.app')
@section('title-blog')Страница контакты@endsection
@section('content')<h1>Страница контакты</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form action="{{route('contact-form')}}" method="post">

    @csrf
    <div class="form-group  ">
        <LABEL for="name">Введите имя</LABEL>
        <input class="form-control" type="text" name="name" placeholder="введите имя" id="name">
    </div>

    <div class="form-group ">
        <LABEL for="email">Email</LABEL>
        <input class="form-control" type="text" name="email" placeholder="введите email" id="name">
    </div>

    <div class="form-group ">
        <label for="subject">Тема собщение</label>
        <input class="form-control" type="text" name="subject" placeholder="Тема сообщения" id="subject">
    </div>

    <div class="form-group ">
        <label for="mesage m">Cобщение</label>
        <textarea name="message"  id="message" class="form-control"></textarea>

    </div>
    <button type="submit" class="btn btn-success">Отправить</button>
</form>
@endsection

