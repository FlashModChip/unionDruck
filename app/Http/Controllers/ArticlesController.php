<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show($id)
    {
//        dd($id);
        $article = \App\Article::find($id);

        return view('articles.show', ['article' => $article]);
    }
}
