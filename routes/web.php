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

Route::view('/impressum', 'impressum');
Route::view('/info', 'info');
Route::view('/datenschutz', 'datenschutz');

//Formular
Route::view('/testform', 'form/testform');
Route::post('/formular2', 'AnfrageController@store');
//Formular PDF
Route::get('generate-pdf','PDFController@generatePDF');


Route::get('sendeAnfrage',function (){
//   die('hallo');
    Mail::to('satz@udb.de')->send(new \App\Mail\AssignmentCreated(session()->benName,'satz@udb.de'));
    return view('home');
});

Route::get('myPDF', function() {
    return view('myPDF');
});

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
