<?php

use App\Article;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('home');
});

Route::get('/daten', function () {
    return view('daten',[
        'articles' => App\Article::latest()->get()
    ]);

});
Route::get('/formular2', 'AnfrageController@show');

Route::post('/formular2', 'AnfrageController@store');

//Route::resource('/posts', 'AnfrageController.php');
Route::get('/articles/{article}', 'ArticlesController@show');
//Route::view('/daten', 'daten');
Route::view('/impressum', 'impressum');
Route::view('/info', 'info');
Route::view('/datenschutz', 'datenschutz');
Route::view('/testform', 'form/testform');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
