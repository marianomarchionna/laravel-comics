<header>
    <div class="header-nav container">
        <div class="logo">
            <a href="{{ route('pagina-home') }}"><img src="{{  asset('images/dc-logo.png') }}" alt="logo.png"></a>
        </div>
        <div class="nav-menu">
            <ul class="nav-items">
                <li class="nav-item"><a class="{{ Request::route()->getName() == 'pagina-characters' ? 'active' : '' }}" href="{{ route('pagina-characters') }}">CHARACTERS</a></li>
                <li class="nav-item"><a class="{{ Request::route()->getName() == 'pagina-comics' ? 'active' : '' }}" href="{{ route('pagina-comics') }}">COMICS</a></li>
                <li class="nav-item"><a class="{{ Request::route()->getName() == 'pagina-movies' ? 'active' : '' }}" href="{{ route('pagina-movies') }}">MOVIES</a></li>
                <li class="nav-item"><a class="{{ Request::route()->getName() == 'pagina-tv' ? 'active' : '' }}" href="{{ route('pagina-tv') }}">TV</a></li>
                <li class="nav-item"><a class="{{ Request::route()->getName() == 'pagina-games' ? 'active' : '' }}" href="{{ route('pagina-games') }}">GAMES</a></li>
                <li class="nav-item"><a class="{{ Request::route()->getName() == 'pagina-collectibles' ? 'active' : '' }}" href="{{ route('pagina-collectibles') }}">COLLECTIBLES</a></li>
                <li class="nav-item"><a class="{{ Request::route()->getName() == 'pagina-videos' ? 'active' : '' }}" href="{{ route('pagina-videos') }}">VIDEOS</a></li>
                <li class="nav-item"><a class="{{ Request::route()->getName() == 'pagina-fans' ? 'active' : '' }}" href="{{ route('pagina-fans') }}">FANS</a></li>
                <li class="nav-item"><a class="{{ Request::route()->getName() == 'pagina-news' ? 'active' : '' }}" href="{{ route('pagina-news') }}">NEWS</a></li>
                <li class="nav-item"><a class="{{ Request::route()->getName() == 'pagina-shop' ? 'active' : '' }}" href="{{ route('pagina-shop') }}">SHOP</a></li>
            </ul>
        </div>
    </div>
</header>