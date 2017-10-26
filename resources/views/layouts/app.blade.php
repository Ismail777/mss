<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MSS</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/AdminLTE.css')}}">
    <link rel="stylesheet" href="{{asset('css/skin-purple.min.css')}}">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
      @yield('styles')
</head>
<body class="skin-purple sidebar-mini">
    <div id="app">
      @include('_includes.nav.topnav')
      @include('_includes.nav.sidebar_new')

      <div class="container" >
        @include ('_includes._messeges')
        @yield('content')
      </div>
    </div>

    <!-- Scripts -->
    <script src="{{asset('js/app.js') }}"></script>
    <script src="{{asset('js/adminlte.min.js')}}"></script>
      @yield('scripts')
</body>
</html>
