

@extends('layout.main')
@section('page-title')

    {{$title}}

@endsection

@section ('content')
 <div class="block">
     <h1>Про нас</h1>
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cum deserunt dignissimos eum magnam quia saepe velit, vero vitae voluptatibus. Corporis fuga, laborum natus neque nulla quis repellat sit tenetur!</p>
     @if(count($params)>0)
         <ul>
             @foreach($params as $el)
                 <li> {{$el}}     </li>
             @endforeach
         </ul>
     @endif


 </div>

@endsection



