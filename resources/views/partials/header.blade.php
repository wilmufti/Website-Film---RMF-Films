<header>
    <div class="mobile-nav">
        <button class="burger"><i class="fa-solid fa-bars"></i></button>
    </div>
    <a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt="Logo" /></a>
    <nav>
        <h2>Browse</h2>
        <ul class="nav-links">
            <li class="{{ request()->routeIs('home') ? 'active-link' : '' }}"><i class="fa-solid fa-layer-group"></i><a href="{{ route('home') }}">Discover</a></li>
            <li class="{{ request()->routeIs('movies') ? 'active-link' : '' }}"><i class="fa-solid fa-video"></i><a href="{{ route('movies') }}">Movies</a></li>
            <li class="{{ request()->routeIs('tv') ? 'active-link' : '' }}"><i class="fa-solid fa-tv"></i><a href="{{ route('tv') }}">Tv Series</a></li>
            <li class="{{ request()->routeIs('people') ? 'active-link' : '' }}"><i class="fa-solid fa-users"></i><a href="{{ route('people') }}">People</a></li>
        </ul>
    </nav>
</header>

<div id="mobile-menu" class="overlay">
    <a class="close">&times;</a>
    <div class="overlay-content">
        <div class="{{ request()->routeIs('home') ? 'active-link-mobile' : '' }}"><i class="fa-solid fa-layer-group"></i><a href="{{ route('home') }}">Discover</a></div>
        <div class="{{ request()->routeIs('movies') ? 'active-link-mobile' : '' }}"><i class="fa-solid fa-video"></i><a href="{{ route('movies') }}">Movies</a></div>
        <div class="{{ request()->routeIs('tv') ? 'active-link-mobile' : '' }}"><i class="fa-solid fa-tv"></i><a href="{{ route('tv') }}">TvSeries</a></div>
        <div class="{{ request()->routeIs('people') ? 'active-link-mobile' : '' }}"><i class="fa-solid fa-users"></i><a href="{{ route('people') }}">People</a></div>
    </div>
</div>