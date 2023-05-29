<nav class="nav justify-content-center align-items-center gap-4">
    @foreach($hrefs as $href)
    <a class="p-0 nav-link text-uppercase text-dark {{ Route::currentRouteName() === $href ? 'active' : '' }}" href="{{route($href)}}">{{$href}}</a>
    @endforeach
</nav>