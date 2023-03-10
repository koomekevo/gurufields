<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials._head')
</head>
<body>
    <div id="app">
        <main class="py-4">
            @include('layouts.partials._navigation')
            @yield('content')
        </main>
    </div>
</body>
</html>
