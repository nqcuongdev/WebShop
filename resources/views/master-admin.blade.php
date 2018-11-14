<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Admin Double C</title>

    <!-- Bootstrap -->
    <link href="{{url('/admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{url('/admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{url('/admin/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{url('/admin/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{url('/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{url('/admin/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{url('/admin/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{url('/admin/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
        <div class="main_container">
            @include('slidebar-admin')
            @yield('content')
            @include('footer-admin')
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{url('/admin/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{url('/admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{url('/admin/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{url('/admin/vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{url('/admin/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{url('/admin/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{url('/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{url('/admin/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{url('/admin/vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{url('/admin/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{url('/admin/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{url('/admin/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{url('/admin/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{url('/admin/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{url('/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{url('/admin/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{url('/admin/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{url('/admin/vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{url('/admin/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{url('/admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{url('/admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{url('/admin/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{url('/admin/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{url('/admin/build/js/custom.min.js')}}"></script>
	
  </body>
</html>
