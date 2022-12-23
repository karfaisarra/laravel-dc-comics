<header>
    <div class="header_top bg-primary text-white">
        <div class="container">
            <ul class="list-unstyled d-flex gap-4 justify-content-end py-2">
                <li class="text-uppercase">Dc poxer visa</li>
                <li class="text-uppercase">Additional dc sites</li>
            </ul>
        </div>
    </div>
    <div class="header_bottom">
        <div class="container">
            <div class="navbar d-flex justify-content-between align-items-center">
                <div class="logo">
                    <img width="80" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                </div>
                <div class="menu d-flex justify-content-between gap-4">
                    <ul class="list-unstyled d-flex gap-3 justify-content-center py-2">
                        <li><a href="#" class="{{Route::currentRouteName() ==='characters'? 'active' : ''}}">Characters</a></li>
                        <li><a href="{{route('comics.index')}}" class="{{Route::currentRouteName() ==='comics'? 'active' : ''}}">Comics</a></li>
                        <li><a href="#" class="{{Route::currentRouteName() ==='movies'? 'active' : ''}}">Movies</a></li>
                        <li><a href="#" class="{{Route::currentRouteName() ==='tv'? 'active' : ''}}">Tv</a></li>
                        <li><a href="#" class="{{Route::currentRouteName() ==='games'? 'active' : ''}}">Games</a></li>
                        <li><a href="#" class="{{Route::currentRouteName() ===''? 'active' : ''}}">Collectibles</a></li>
                        <li><a href="#" class="{{Route::currentRouteName() ==='videos'? 'collectiblesactive' : ''}}">Videos</a></li>
                        <li><a href="#" class="{{Route::currentRouteName() ==='fans'? 'active' : ''}}">Fans</a></li>
                        <li><a href="#" class="{{Route::currentRouteName() ==='news'? 'active' : ''}}">News</a></li>
                        <li><a href="#" class="{{Route::currentRouteName() ==='shop'? 'active' : ''}}">Shop</a></li>
                    </ul>
                    <div class="search">
                        <input type="text" class="border-0  text-end" placeholder="Search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>