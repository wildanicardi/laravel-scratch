<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', [
        'articles' => App\Article::latest()->get()
    ]);
});
// Route::get('/articles', 'ArticleController@index');
// Route::get('/articles/create', 'ArticleController@create');
// Route::post('/articles', 'ArticleController@store');
// Route::get('/articles/{article}', 'ArticleController@show');
// Route::get('/articles/{article}/edit', 'ArticleController@edit');
// Route::put('/articles/{article}/update', 'ArticleController@update');
Route::resource('articles', 'ArticleController');
