<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keyword')">
    <meta name="author" content="Funda of web IT">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
<link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/owl.theme.default.min.css')}}" rel="stylesheet">

</head>
<body>
    <div id="app">
        
      

        <main class="">
            @yield('content')
        </main>
    </div>

    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}" ></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}" ></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}" ></script>
  
    @yield('scripts')

</body>
</html>
