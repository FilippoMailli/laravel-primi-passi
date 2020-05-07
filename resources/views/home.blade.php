<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <link rel="stylesheet" href={{asset('css/app.css')}}>
    </head>
    <body>
        <header>
            <img src="{{asset('img/marchio-sito-test.png')}}" alt="La Molisana">
            <nav>
                <ul class="main-menu">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="{{route('prodotti')}}">Prodotti</a>
                    </li>
                    <li>
                        <a href="#">Contatti</a>
                    </li>
                </ul>
            </nav>
        </header>
    </body>
</html>
