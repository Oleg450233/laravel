
@extends('layout1.main')
@section('page-title')
    Главная страница сайта
@endsection
@section ('content')
        <div class="shop">
        @foreach($shop as $el)
            <div class="post">
                <h2>{{$el->title}}</h2>
                <p>{{$el->anons}}</p>
                <p>{{$el->price}}</p>
                <a href="/shop/{{$el->id}}">Детальнее</a>
            </div>
        @endforeach

    </div>

@endsection
