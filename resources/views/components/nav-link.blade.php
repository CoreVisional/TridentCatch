{{-- Request to route to the specify navigation links --}}

@props(['route'])

<a class="nav-link header__flex" href="{{ route($route) }}">{{ $slot }}</a>