<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Double C</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="{{url('shoppers/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{url('shoppers/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('shoppers/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('shoppers/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{url('shoppers/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('shoppers/css/owl.theme.default.min.css')}}">


    <link rel="stylesheet" href="{{url('shoppers/css/aos.css')}}">

    <link rel="stylesheet" href="{{url('shoppers/css/style.css')}}">
    
  </head>
  <body>
  
  <div class="site-wrap">
    @include('header')

    @yield('content')

    @include('footer')
  </div>

  <script src="{{url('shoppers/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{url('shoppers/js/jquery-ui.js')}}"></script>
  <script src="{{url('shoppers/js/popper.min.js')}}"></script>
  <script src="{{url('shoppers/js/bootstrap.min.js')}}"></script>
  <script src="{{url('shoppers/js/owl.carousel.min.js')}}"></script>
  <script src="{{url('shoppers/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{url('shoppers/js/aos.js')}}"></script>

  <script src="{{url('shoppers/js/main.js')}}"></script>
    
  </body>
</html>