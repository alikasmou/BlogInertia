<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>@yield('page-title')</title>
@include('frontend.layout.meta.meta')

<!-- Style Sheet -->
<link rel="stylesheet" href="{{mix('css/app.css')}}">
<link rel="stylesheet" href="{{mix('css/frontend.css')}}">
<!-- #BUG Must Call RTL Dynamicly -->
<link rel="stylesheet" href="{{mix('css/rtl.css')}}">
@yield('head-scripts')
</head>
    <body id="app">
        <header>
            @yield('header')
        </header>
        <main>
            @yield('main')
            @yield('aside')
        </main>
        <footer>
            @yield('footer')
        </footer>
        <script src="{{ mix('/js/frontend.js')}}" defer></script>
        @yield('footer-scripts')
    </body>
</html>