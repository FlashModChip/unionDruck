@extends ('layout')

@section ('head')
    <link href="style/anfrageFormContent.css" rel="stylesheet" type="text/css"/>
@endsection

@section ('content')

    <h2>Artikel aus der Datenbank</h2>
    <br />
    <div class="text">
        @foreach($articles as $article)
            <li class="first">
                <h3>{{ $article->title }}</h3>
                <p>{{$article->body}}</p>
            </li>
            <br />
        @endforeach
    </div>

@endsection('content')