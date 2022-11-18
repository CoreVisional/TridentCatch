<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="author" content="3RedDot">
<title>@yield('title')</title>

{{-- Favicon --}}
<link rel="icon" href="{{ asset('favicon.svg')}}">

{{-- Fonts --}}
<link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

{{-- Styles & Scripts --}}
@vite(['resources/js/app.js'])
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
