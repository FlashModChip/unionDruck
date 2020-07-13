@extends ('layout')

@section ('head')
    <link href="style/content/anfrageFormContent.css" rel="stylesheet" type="text/css"/>
    <script src="js/formHandler.js" ></script>
@endsection ('head')

@section ('content')
    <h1 class="headerText">Anfrageformular</h1>

    <form action="formular2" method="post" id="form1">
        @csrf

        <h2></h2>

        <fieldset>
            <legend>
                Angaben zum Produkt
            </legend>
            <hr>

            <div class="formBlock">
                <h4>Produktname*:</h4>
                <input class="inputbox" type="text" name="prodName" size="40" maxlength="30" required="required"/><br/>
            </div>

            <div class="formBlock">
                <h4>Format*:</h4>
                <label class="radio">
                    <input type="radio" name="formata" value="DIN A4">
                    <span class="checkmark"></span>
                    <span>DIN A4</span>
                </label>
                <label class="radio">
                    <input type="radio" name="formata" value="halbes Beliner">
                    <span class="checkmark"></span>
                    <span>Halbes Berliner</span>
                </label>
                <label class="radio">
                    <input type="radio" name="formata" value="berliner">
                    <span class="checkmark"></span>
                    <span>Berliner</span>
                </label>
            </div>

            <div class="formBlock">
                <h4>Seitenzahl*:</h4>
                <div id="seitenZahlenDOM">
                    <p>Bitte zuerst das Format auswählen!</p>
                </div>

            </div>

            <div class="formBlock">
                <h4>Papiersorte*:</h4>
                <label class="radio">
                    <input type="radio" name="papierSorte" value="45 g/qm">
                    <span class="checkmark"></span>
                    <span>45,5 g/qm</span>
                </label>
                <label class="radio">
                    <input type="radio" name="papierSorte" value="52 g/qm">
                    <span class="checkmark"></span>
                    <span>52,0 g/qm</span>
                </label>
            </div>

            <div class="formBlock">
                <h4>Auflage*:</h4>
                <input type="number" name="auflage" size="20" min="500" placeholder="2500" maxlength="30" required="required"/> <br/>
            </div>

            <div class="formBlock" >
                <h4>Farbigkeit*:</h4>

                <div id="colorPreset">
                    <p>Farben Vorauswahl:</p>
                    <label class="radio">
                        <input type="radio" name="farbenPreset" value="cmyk" >
                        <span class="checkmark"></span>
                        <span>CMYK</span>
                    </label>
                    <label class="radio">
                        <input type="radio" name="farbenPreset" value="gray" checked="checked">
                        <span class="checkmark"></span>
                        <span>Graustufen</span>
                    </label>
                </div>

                <div id="seitenFarben"><p>Bitte zuerst Seitenzahl auswählen!</p>
                    <div class="column firstCol"></div>
                    <div class="column secondCol"></div>
                </div>
            </div>

        </fieldset>

        <fieldset>
            <legend>
                Kontakt
            </legend>
            <hr>

            <div class="formBlock">
                <h4>Ansprechpartner*:</h4>
                <input type="text" name="benName" size="20" maxlength="30" required="required"/> <br />
            </div>

            <div class="formBlock">
                <h4>Institution/Firma:</h4>
                <input type="text" name="firmName" class="rightItem" size="20" maxlength="30" /><br />
            </div>

            <div class="formBlock">
                <h4>Adresse*:</h4>
                <input type="text" name="adressStreet" size="20" maxlength="30" placeholder="Strasse, Hausnummer" required="required"/><br /><br />
                <input type="text" name="adressPLZ" size="20" maxlength="30" placeholder="PLZ, Ort" required="required"/><br />
            </div>

            <div class="formBlock">
                <h4>Telefonnummer*:</h4>
                <input type="text" name="telefon" size="20" maxlength="30" /><br />
            </div>

            <div class="formBlock">
                <h4>E-Mail Adresse*:</h4>
                <input type="email" name="email" size="20" maxlength="100" required="required"/><br />
            </div>

            <div class="formBlock">
                <h4>möglicher Drucktermin:</h4>
                <input type="date" name="drucktermin" size="20" maxlength="30" /><br />
            </div>

            <div class="formBlock">
                <h4>Kommentar:</h4>
                <textarea rows="4" cols="60" name="kommentar" id="kommentar" placeholder="Ihr Kommentar"  ></textarea><br />
            </div>


            <div id="buttonDiv">
                <input type="reset" value="RESET" />
                <input type="submit" value="WEITER" />
            </div>
        </fieldset>
    </form>
    <div id="showSide">

    </div>

@endsection('content')