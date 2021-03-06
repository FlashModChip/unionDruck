@extends ('layout')

@section ('head')
    <link href="style/content/anfrageFormContent2.css" rel="stylesheet" type="text/css"/>
    <script src="js/confirmHandler.js" ></script>
@endsection
@section ('content')

    <h1 class="headerText">Anfrageformular</h1>

    <h4>Produkt</h4>
    <div class="formBlock">
        <p class="atab"><span class="bezeichnung ">Produktname: </span> {{ session()->get('prodName') }}</p>
        <p class="atab"><span class="bezeichnung">Format: </span>   {{ session()->get('formata') }}</p>
        <p><span class="bezeichnung">Seitenzahl: </span> {{ session()->get('seitenzahl') }}</p>
        <p><span class="bezeichnung">Papiersorte: </span> {{ session()->get('papierSorte') }}</p>
        <p><span class="bezeichnung">Auflage: </span>{{ session()->get('auflage') }}</p>

        <p class="bezeichnung">Farbigkeit: </p>
        <div class="prodFarben">
            @for ($i = 1; $i < $seiten+1; $i++)
                @if ($i < (($seiten+1) / 2))
                    <p class="linkesElem"> <span class="bezeichnung">Seite {{ $i }}: </span> {{session()->get('seitenFarben')[$i]}} </p>
                @else
                    <p class="rechtesElem"><span class="bezeichnung">Seite {{ $i }}: </span> {{session()->get('seitenFarben')[$i]}} </p>
                @endif
            @endfor
        </div>
    </div>


    <h4>Kontaktdaten</h4>
    <div class="formBlock">
        <p><span class="bezeichnung">Antragsteller: </span> {{ session()->get('benName') }}</p>
        <p><span class="bezeichnung">Firma: </span> {{ session()->get('firmName') }}</p>

        <p class="bezeichnung">Adresse: </p>
        <p> {{ session()->get('adressStreet') }}</p>
        <p> {{ session()->get('adressPLZ') }}</p>
        <p><span class="bezeichnung">Telefon: </span> {{ session()->get('telefon') }}</p>
        <p><span class="bezeichnung">Email: </span> {{ session()->get('email') }}</p>

        @if (session()->get('drucktermin'))
            <p><span class="bezeichnung">Drucktermin: </span> {{ session()->get('drucktermin') }}</p>
        @endif
        @if (session()->get('kommentar'))
            <p><span class="bezeichnung">Kommentar: </span>{{ session()->get('kommentar') }}</p>
        @endif
    </div>

    <div id="buttons">

            <a class="button" href="{{ url()->previous() }}" class="btn btn-warning"> <i class="fas fa-arrow-left"></i> zurück </a>
        <a  class="button submitButton" href="generate-pdf" class="btn btn-warning">senden </a>
{{--            <a class="button submitButton" href="sendeAnfrage" class="btn btn-warning"> <i class="fas fa-arrow-left"></i> senden </a>--}}
    </div>

@endsection('content')