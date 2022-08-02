@extends('layouts.app')
@section('title-blog')Все Сообщения@endsection
@section('content')<h1>Все сщщбщения</h1>
@foreach($data as $el)
    <div class=" alert alert-info">
        <h3>{{ $el -> subject }}</h3>
        <p>{{ $el -> email }}</p>
        <p><small>{{ $el -> created_at }}</small></p>
        <a href="{{route('conact-data-one', $el->id)}}"><button class="btn btn-warning">Детальнее</button></a>
    </div>
@endforeach
@endsection



