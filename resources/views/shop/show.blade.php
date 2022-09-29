
@extends('layout1.main')
@section('page-title')
    {{ $shop->title }}
@endsection

@section ('content')

    <h1>{{$shop->title}}</h1>
    <div class="shop one">
        <div class="post">
            <h2>{{$shop->title}}</h2>
            <p>{{$shop->anons}}</p><br>
            <p>{!!$shop->price!!}</p>
            <br>
            <a href="/shop/{{$shop->id}}/buy">Купить</a>

        </div>
    </div>
@endsection


