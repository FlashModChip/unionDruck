@extends ('layout')

@section ('head')
    <link href="style/anfrageFormContent.css" rel="stylesheet" type="text/css"/>
@endsection

@section ('content')


    <div class="text">
        @foreach($articles as $article)
            <li class="first">
                <h3>{{ $article->title }}</h3>
                <p>{{$article->body}}</p>
            </li>
        @endforeach
    </div>
    <div class="text">
        <p> Um Ihre Daten auf unserem FTP-Server hochzuladen, benötigen Sie einen Account.<br>
            <br>
            Melden Sie sich einfach telefonisch bei unserer Vorstufe unter <b>(030) 42 84 62 - 55</b> oder senden Sie uns eine Mail an <a href="mailto:satz@udb.de">satz@udb.de</a> Sie erhalten von uns die Zugangsdaten für Ihren geschützten Ordner.</p>
    </div>
@endsection('content')