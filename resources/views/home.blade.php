@extends('layouts.app')
@section('title-blog')Главная Страница@endsection
 @section('content')<h1>Главная Страница</h1>
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus,
     accusantium cupiditate dolores dolorum, harum laboriosam minus nihil officia
     provident repudiandae soluta tenetur ullam veniam, voluptate voluptatum. Aliquam cupiditate
     natus non.</p>@endsection
@section('aside')
@parent
    <p>Дополнительный текст</p>

@endsection
