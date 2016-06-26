<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="{{url('image/favicon.ico')}}">
		
        <!-- Custom Title -->
        <title>Welcome to Laravel Demo | @yield('title')</title>
		<!-- /Custom Title -->
		
        <!-- Custom css and js for this template -->

        <link rel="stylesheet" href="{{ URL::asset('bower_resources/bootstrap/dist/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/carousel.css') }}">
        <script type="text/javascript" src="{{ URL::asset('bower_resources/bootstrap/dist/js/bootstrap.js') }}"></script>
		
		<!-- /Custom css and js for this template -->

  </head>
  <body>
        <!-- include navigation from resources/views/layout/nav/nav.blade.php -->
        @include('layouts.nav.nav')
		
        <!-- content section -->
        @yield('content')
		<!-- /content section -->
		
  </body>
</html>