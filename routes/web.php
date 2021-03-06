<?php

use App\Article;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('home');
});

Route::get('/datenDB', function () {
    return view('articles/show', [
        'articles' => App\Article::latest()->get()
    ]);

});

Route::view('/daten', 'daten');
Route::view('/impressum', 'impressum');
Route::view('/info', 'info');
Route::view('/datenschutz', 'datenschutz');

//Formular
Route::view('/testform', 'form/testform');
Route::post('/formular2', 'AnfrageController@store');

//Formular PDF
Route::get('generate-pdf', 'PDFController@generatePDF');

//Formular Mail
Route::get('sendeAnfrage', function () {
    Mail::to('klick-ma@web.de')->send(new \App\Mail\AssignmentCreated(' '.session('benName'), 'klick-ma@web.de'));
    return view('home');
});

Route::get('myPDF', function () {
    return view('myPDF');
});


Route::get('/home', 'HomeController@index')->name('home');
