<!doctype html>
<html lang="pl">
@include('layout.partials.head')
<body>
<!-- *** THEME CONTAINER STARTS *** -->
    <div class="contrive-theme-container" id="app">
        @include('layout.partials.header')
        @yield('content')
        @include('layout.partials.footer')
    </div>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    @yield('page_js')
</body>
</html>
