@extends('layouts.app')
@section('title-blog')Обновление записи@endsection
@section('content')<h1>Обновление записи</h1>
<form action="{{route('contact-update-submit', $data->id )}}" method="post">

    @csrf
    <div class="form-group  ">
        <LABEL for="name">Введите имя</LABEL>
        <input class="form-control" type="text" name="name" value="{{$data->name}}" placeholder="введите имя" id="name">
    </div>

    <div class="form-group ">
        <LABEL for="email">Email</LABEL>
        <input class="form-control" type="text" name="email" value="{{$data->email}}" placeholder="введите email" id="name">
    </div>

    <div class="form-group ">
        <label for="subject">Тема собщение</label>
        <input class="form-control" type="text" name="subject" value="{{$data->subject}}" placeholder="Тема сообщения" id="subject">
    </div>

    <div class="form-group ">
        <label for="mesage m">Cобщение</label>
        <textarea name="message" id="message" class="form-control">{{$data->message}}</textarea>

    </div>
    <button type="submit" class="w-10 btn btn-lg btn-outline-primary">Обновить</button>

</form>
@endsection

