@extends ('layout')

@section ('content')


    <h2>Anfrageformular</h2>

    <form action="formular2" method="post" id="form2">
        @csrf
        Name:
        <input type="text" name="benName" size="20" maxlength="30"/> <br/>
        Firma:
        <input type="text" name="firmName" size="20" maxlength="30"/><br/>
        Produktname:
        <input type="text" name="prodName" size="20" maxlength="30"/><br/>
        <input type="submit" value="weiter" />
    </form>
{{--    <p>{{session('benName')}}</p>--}}

{{--        echo "Ihre Eingaben <br />\n";--}}
{{--        echo "Vorname: {$_POST['benName']}<br />\n";--}}
{{--        echo "Firma: {$_POST['firmName']}<br />\n";--}}

@endsection('content')