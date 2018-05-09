<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>{{ config('app.name', 'AdminYDd') }}</title>
	@include('adminLTE.layouts.head')
	@yield('headjs')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
	@include('adminLTE.layouts.header')

	@include('adminLTE.layouts.sidebar')
	<!-- Content Wrapper. Contains page content -->
  	<div class="content-wrapper">
		@yield('content')
	 </div>
  	<!-- /.content-wrapper -->
	@include('adminLTE.layouts.footer')
	@include('adminLTE.layouts.control-sidebar')

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('themes/admin_lte/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('themes/admin_lte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('themes/admin_lte/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('themes/admin_lte/js/adminlte.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('themes/admin_lte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap  -->
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('themes/admin_lte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('themes/admin_lte/bower_components/chart.js/Chart.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('themes/admin_lte/js/demo.js') }}"></script>
@yield('js')
</html>