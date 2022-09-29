<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index(){
        $articles=Article::orderBy('id','asc')->get();

        return view('static.index')->with('articles',$articles);
    }
    public function about(){
        $data=[
            'title'=>'Страница про нас',
            'params'=>['bmw','audi','volvo']
        ];
        return view('static.about')->with($data);
    }
    public function blog(){
        $title='Блог';
        return view('static.blog')->with('header1',$title);
    }

}
