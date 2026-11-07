<header class="header">
    <a href="{{ route('mustaren') }}">
        <img src="{{ asset('images/mustaren.png') }}" alt="Muštáreň logo" class="header-logo">
    </a>
    <span class="header-title">
        <a href="{{ route('welcome') }}">STRUŽINKA</a> - <a href="{{ route('mustaren') }}">MUŠTÁREŇ</a>
    </span>
</header>

<nav class="navbar">
    <ul class="navbar-menu">
        <li class="navbar-item"><a href="{{ url('/mustaren/ceny-mustu') }}" class="navbar-link">Ceny muštu</a></li>
        <li class="navbar-item"><a href="{{ url('/mustaren/kontakt') }}" class="navbar-link">Kontakt</a></li>
    </ul>
</nav>
