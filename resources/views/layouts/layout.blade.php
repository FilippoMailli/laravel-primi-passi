<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('titolo')</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        @yield('css')
    </head>
    <body>
        @include('partials.header')
        <main>
            @yield('mainContent')
        </main>
        @include('partials.footer')

        @yield('scripts')

        {{-- scripts --}}
    </body>
</html>
