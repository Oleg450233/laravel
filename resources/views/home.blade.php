@extends('layout.main')

@section('page-title')
    Кабинет пользователя
@endsection

@section('content')
    <div class="block">
        <h1>Кабинет пользователя</h1>
        @if (session('status'))
            <div class="success-mess">
                {{ session('status') }}
            </div>
        @endif
        <p>Привет{{Auth::user()->name}}</p>
    </div>
    @if(count($articles)>0)
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

    @endif
@endsection
