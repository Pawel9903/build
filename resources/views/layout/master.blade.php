<!doctype html>
<html lang="pl">
@include('layout.partials.head')
<body>
<!-- *** THEME CONTAINER STARTS *** -->
<div class="contrive-theme-container">
@yield('content')
@include('layout.partials.footer')
</div>
<script type="text/javascript" src="{{ asset('js/theme.js') }}"></script>
@yield('page_js')
</body>
</html>
