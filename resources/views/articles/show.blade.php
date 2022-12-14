
@extends('layout.main')
@section('page-title')
{{ $article->title }}
@endsection

@section ('content')

        <h1>{{$article->title}}/Статья на Blog Spot</h1>
        <a href="/" class="back-button">На главную</a>
        <div class="articles one">
        <div class="post">
                <h2>{{$article->title}}</h2>
                <p>{{$article->anons}}</p><br>
                <p>{!!$article->Text!!}</p>
                <p><b>Aвтор:</b>{{$article->user->name}}</p>
            @auth
                @if(Auth::user()->id == $article->user_id)
            <br><hr>
            <a href="/article/{{$article->id}}/edit">Изменить</a>
            {!!Form::open(['method'=>'DELETE','action'=>['ArticlesController@destroy',$article->id]]) !!}
            {{Form::submit('Удалить',['class'=>'delete-button'])}}
            {!! Form::close() !!}
                @endif
            @endauth

            </div>
       </div>
@endsection



