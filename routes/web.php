<?php

use Illuminate\Support\Facades\Route;




Route::get('/','StaticController@index');
Route::get('/about-us','StaticController@about');
Route::get('/blog','StaticController@blog');
Route::get('/article/{id}','ArticlesController@show');
Route::get('/article-add','ArticlesController@create');
Route::post('/article-add','ArticlesController@store');
Route::get('/article/{id}/edit','ArticlesController@edit');
Route::put('/article/{id}/edit','ArticlesController@update');
Route::delete('/article/{id}/delete','ArticlesController@destroy');
Route::get('/public/shop','ShopController@index');
Route::get('/shop/{id}','ShopController@show');
//Route::resource('/articles','ArticlesController');





Auth::routes();

Route::get('/user', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
