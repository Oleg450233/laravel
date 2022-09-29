<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['show']]);
    }

    public function index()
    {
        //
    }


    public function create()
    {
        return view('articles.create');
    }


    public function store(Request $request)
    { $this->validate($request,[
        'title'=>'required|max:170|min:10',
        'anons'=>'required|min:10',
        'text'=>'required|min:10'
    ]);
        $article=new Article();
        $article->title=$request->input('title');
        $article->anons=$request->input('anons');
        $article->Text=$request->input('text');
        $article->user_id = auth()->user()->id;
        $article->save();
        return redirect('/')->with('success','Стaтья добавлена');
    }


    public function show($id)
    {
        $article=Article::find($id);
        return view('articles.show')->with('article',$article);
    }


    public function edit($id)
    {
        $article=Article::find($id);
        if(auth()->user()->id !=$article->user_id)
            return redirect ('/')->with('error','Это не ваша статья');

        return view('articles.edit')->with('article',$article);
    }


    public function update(Request $request, $id)
    {$this->validate($request,[
        'title'=>'required|max:170|min:10',
        'anons'=>'required|min:10',
        'text'=>'required|min:10'
    ]);
        $article=Article::find($id);
        $article->title=$request->input('title');
        $article->anons=$request->input('anons');
        $article->Text=$request->input('text');
        $article->save();
        return redirect('/')->with('success','Стaтья изменена');
    }


    public function destroy($id)
    {
        $article=Article::find($id);
        if(auth()->user()->id !=$article->user_id)
            return redirect ('/')->with('error','Это не ваша статья');
        $article->delete();

        return redirect ('/')->with('success','Статья была удалена');

    }
}
