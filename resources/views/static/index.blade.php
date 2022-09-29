
@extends('layout.main')
@section('page-title')
    Главная страница сайта
@endsection
@section ('content')
    <div class="presentation"></div>
    <div class="articles">
        @foreach($articles as $el)
            <div class="post">
                <h2>{{$el->title}}</h2>
                <p>{{$el->anons}}</p>
                <p><b>Aвтор:</b>{{$el->user->name}}</p>
                <a href="/article/{{$el->id}}">Прочитать</a>
            </div>
            @endforeach

    </div>

@endsection



