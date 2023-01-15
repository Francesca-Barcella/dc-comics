<header>
    <!-- header top -->
    <div class="header_top bg-primary">
        <div class="container d-flex justify-content-end text-white text-uppercase pt-2">
            <h6 class="me-5">dc power visa</h6>
            <h6>additionale dc sites ▼</h6>
        </div>
    </div>
    <!-- header menu -->
    <div class="header_menu">
        <div class="container py-2 d-flex align-items-center justify-content-between center text-uppercase">
            <!-- logo -->
            <div>
                <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="" class="logo">
            </div>
            <!-- navbar -->
            <nav class="navbar navbar-expand-sm navbar-light">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'characters' ? 'bg-primary text-dark' : ''}}" href="{{ route('characters') }}">characters<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link px-3 {{ Route::currentRouteName() === 'comics' ? 'bg-primary text-dark' : ''}}" href="{{ route('comics') }}">comics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 {{ Route::currentRouteName() === 'movies' ? 'bg-primary text-dark' : ''}}" href="{{ route('movies') }}">movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 {{ Route::currentRouteName() === 'tv' ? 'bg-primary text-dark' : ''}}" href="{{ route('tv') }}">tv</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 {{ Route::currentRouteName() === 'games' ? 'bg-primary text-dark' : ''}}" href="{{ route('games') }}">games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 {{ Route::currentRouteName() === 'collectibles' ? 'bg-primary text-dark' : ''}}" href="{{ route('collectibles') }}">collectibles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 {{ Route::currentRouteName() === 'videos' ? 'bg-primary text-dark' : ''}}" href="{{ route('videos') }}">videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 {{ Route::currentRouteName() === 'fan' ? 'bg-primary text-dark' : ''}}" href="{{ route('fan') }}">fan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 {{ Route::currentRouteName() === 'shop' ? 'bg-primary text-dark' : ''}}" href="{{ route('shop') }}">shop <span class="text-primary">▼</span></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="search border-0 border-bottom border-secondary text-dark" type="text" placeholder="Search"> <span class="text-primary">⫯</span>
                </form>
            </nav>
        </div>
    </div>

    <!-- hjumbotron -->
    <div class="jumbotron">

    </div>

</header>