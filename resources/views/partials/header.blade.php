<header>
    <a href="{{route('home')}}"><img src="{{asset('img/marchio-sito-test.png')}}" alt="La Molisana"></a>
    <nav>
        <ul class="main-menu">
            <li>
                <a href="{{route('home')}}" class="{{(url()->current() == route('home')) ? 'active' : ''}}">Home</a>
            </li>
            <li>
                <a href="{{route('prodotti')}}" class="{{(url()->current() == route('prodotti')) ? 'active' : ''}}">Prodotti</a>
            </li>
            <li>
                <a href="{{route('contatti')}}" class="{{(url()->current() == route('contatti')) ? 'active' : ''}}">Contatti</a>
            </li>
        </ul>
    </nav>
</header>
