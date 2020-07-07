<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial=scale">
    <title>Union Druckerei Berlin</title>
    <link href="https://fonts.googleapis.com/css?family=Arvo:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">

{{--    jQuery     --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery-3.5.1.js"></script>
    <script src="js/mainHandler.js" ></script>

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link href="style/styles2.css" rel="stylesheet" type="text/css"/>
    @yield ('head')
</head>
<body>
    <div id="container">
        <header>
            <figure class="fig1">
                <img id="headerImage" src="img/headerbild.jpg" alt="bild" height="100%">
                <img id="headerImageMedia" src="img/headerbild.png" alt="bild" height="100%">
            </figure>
            <nav>
                <ul id="menu">
                    <li><a class="{{ Request::path() === '/' ? 'current_page_item' : '' }}"  href="/">START</a></li>
                    <li><a class="{{ Request::path() === 'info' ? 'current_page_item' : '' }}" href="/info">INFORMATIONEN</a></li>
                    <li><a class="{{ Request::path() === 'daten' ? 'current_page_item' : '' }}" href="/daten">DRUCKANFRAGE</a></li>
                    <li><a class="{{ Request::path() === 'impressum' ? 'current_page_item' : '' }}" href="/impressum">IMPRESSUM</a></li>
                    <li><a class="{{ Request::path() === 'datenschutz' ? 'current_page_item' : '' }}" href="/datenschutz">DATENSCHUTZ</a></li>
                </ul>
                <div class="menuBurger">&#9776; Menü</div>
            </nav>
        </header>
        <main>

            @yield ('content')

        </main>
        <footer>
            <h2>Union Druckerei Berlin Verwaltung GmbH</h2>
            <div class="footerText">

                    <p>Storkower Straße 127A+129<br>
                        D - 10407 Berlin</p>

                    <p>Tel.: +49 (0)30 42 84 62-0<br>
                        Fax: +49 (0)30 42 84 62-56</p>

                <p><a href="impressum.html">Impressum</a><br>
                <a href="mailto:udb@udb.de">udb@udb.de</a></p>
            </div>
        </footer>
    </div>
{{--<script>--}}
{{--    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){--}}
{{--        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),--}}
{{--        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)--}}
{{--    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');--}}

{{--    ga('create', 'UA-97744217-1', 'auto');--}}
{{--    ga('send', 'pageview');--}}


{{--    $('.handle').on('click', function(){--}}
{{--        $('nav ul').toggleClass('showing');--}}
{{--    });--}}
{{--</script>--}}
</body>
</html>

