<header>
    <nav>
        <div class="col">
            <a href="{{ route('heroes.index') }}">
                <img class="logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo DC">
            </a>
        </div>
        <div class="col">
            <ul>
                <li>
                    <a @if (Route::is('character')) class="active" @endif
                        href="{{ route('character') }}">CHARACTERS</a>
                </li>
                <li>
                    <a @if (Route::is('home')) class="active" @endif
                        href="{{ route('heroes.index') }}">COMICS</a>
                </li>
                <li>
                    <a @if (Route::is('movies')) class="active" @endif href="{{ route('movies') }}">MOVIES</a>
                </li>
                <li>
                    <a @if (Route::is('tv')) class="active" @endif href="{{ route('tv') }}">TV</a>
                </li>
                <li>
                    <a @if (Route::is('games')) class="active" @endif href="{{ route('games') }}">GAMES</a>
                </li>
                <li>
                    <a @if (Route::is('collectibles')) class="active" @endif
                        href="{{ route('collectibles') }}">COLLECTIBLES</a>
                </li>
                <li>
                    <a @if (Route::is('videos')) class="active" @endif href="{{ route('videos') }}">VIDEOS</a>
                </li>
                <li>
                    <a @if (Route::is('fans')) class="active" @endif href="{{ route('fans') }}">FANS</a>
                </li>
                <li>
                    <a @if (Route::is('news')) class="active" @endif href="{{ route('news') }}">NEWS</a>
                </li>
                <li>
                    <a @if (Route::is('shop')) class="active" @endif href="{{ route('shop') }}">SHOP</a>
                </li>
            </ul>
        </div>
        <div class="col">
            <input type="text" placeholder="Search">
        </div>
    </nav>
    <div class="nav-bottom"></div>
</header>
