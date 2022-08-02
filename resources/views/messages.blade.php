@extends('layouts.app')
@section('title-blog')Все Сообщения@endsection
@section('content')<h1>Все сщщбщения</h1>
@foreach($data as $el)
    <div class=" alert alert-info">
        <h3>{{ $el -> subject }}</h3>
        <p>{{ $el -> email }}</p>
        <p><small>{{ $el -> created_at }}</small></p>
        <a href="{{ route('contact-data-one', $el->id)}}"><button class="w-10 btn btn-lg btn-outline-primary">Детальнее</button></a>
    </div>
@endforeach
@endsection



