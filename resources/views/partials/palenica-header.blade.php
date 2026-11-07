<header class="header">
    <a href="{{ route('palenica') }}">
        <img src="{{ asset('images/palenica.png') }}" alt="Pálenica logo" class="header-logo">
    </a>
    <span class="header-title">
        <a href="{{ route('welcome') }}">STRUŽINKA</a> - <a href="{{ route('palenica') }}">PÁLENICA</a>
    </span>
</header>

<nav class="navbar">
    <ul class="navbar-menu">
        <li class="navbar-item">
            <button type="button" class="navbar-link">O nás</button>
            <ul class="navbar-dropdown">
                <li><a href="{{ url('/palenica/historia') }}">História</a></li>
                <li><a href="{{ url('/palenica/sucasnost') }}">Súčasnosť</a></li>
            </ul>
        </li>
        <li class="navbar-item"><a href="{{ url('/palenica/cennik') }}" class="navbar-link">Cenník</a></li>
        <li class="navbar-item">
            <button type="button" class="navbar-link">Kvas</button>
            <ul class="navbar-dropdown">
                <li><a href="{{ url('/palenica/dovoz-kvasu') }}">Dovoz kvasu</a></li>
                <li><a href="{{ url('/palenica/cena-kvasu') }}">Cena kvasu</a></li>
            </ul>
        </li>
        <li class="navbar-item"><a href="{{ url('/palenica/kontakt') }}" class="navbar-link">Kontakt</a></li>
    </ul>
</nav>
