<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('_includes._header');
<body class="skin-black-light sidebar-mini">
    <div id="app">
      @include('_includes.nav.topnav')
      @include('_includes.nav.sidebar_new')
      <div class="content-wrapper">
        @include('_includes._messeges')
        <div class="content" style="padding: 0px 20px 0px 20px;">
            @yield('content')
        </div>
      </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    @yield('scripts')
</body>
</html>
