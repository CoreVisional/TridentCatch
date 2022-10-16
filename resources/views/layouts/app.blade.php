<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials._head')
</head>

<body>
    <div id="app">
        @include('partials._nav')
        <div class="app__content-container">
            @include('partials._errors')
            @yield('content')
        </div>
        @include('partials._footer')
    </div>

    @include('partials._back-to-top')
</body>

</html>