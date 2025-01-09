<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Dumala</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN core-css ================== -->
	<link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/facebook/app.min.css') }}" rel="stylesheet" />
	<!-- ================== END core-css ================== -->
	
	<!-- ================== BEGIN page-css ================== -->
	<link href="{{ asset('assets/plugins/jvectormap-next/jquery-jvectormap.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/gritter/css/jquery.gritter.css') }}" rel="stylesheet" />

	<link href="{{ asset('assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" rel="stylesheet" />
	<!-- ================== END page-css ================== -->
    @stack('style-file')

    <!-- ================== BEGIN core-js ================== -->
	<script src="{{ asset('assets/js/vendor.min.js') }}"></script>
	<script src="{{ asset('assets/js/app.min.js') }}"></script>
	<!-- ================== END core-js ================== -->
	
	<!-- ================== BEGIN page-js ================== -->
	<script src="{{ asset('assets/plugins/gritter/js/jquery.gritter.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.canvaswrapper.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.colorhelpers.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.saturated.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.browser.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.drawSeries.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.uiConstants.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.time.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.resize.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.pie.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.crosshair.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.categories.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.navigate.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.touchNavigate.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.hover.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.touch.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.selection.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.symbol.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.legend.js') }}"></script>
	<script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/jvectormap-next/jquery-jvectormap.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/jvectormap-content/world-mill.js') }}"></script>
	<script src="{{ asset('assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ asset('assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
	<script src="{{ asset('assets/js/demo/dashboard.js') }}"></script>
    
	<!-- ================== END page-js ================== -->

	
	<!-- ================== BEGIN page-js ================== -->
	<script src="{{ asset('assets/plugins/moment/min/moment.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/@fullcalendar/core/index.global.js') }}"></script>
	<script src="{{ asset('assets/plugins/@fullcalendar/daygrid/index.global.js') }}"></script>
	<script src="{{ asset('assets/plugins/@fullcalendar/timegrid/index.global.js') }}"></script>
	<script src="{{ asset('assets/plugins/@fullcalendar/interaction/index.global.js') }}"></script>
	<script src="{{ asset('assets/plugins/@fullcalendar/list/index.global.js') }}"></script>
	<script src="{{ asset('assets/plugins/@fullcalendar/bootstrap/index.global.js') }}"></script>


	<script src="{{ asset('assets/plugins/parsleyjs/dist/parsley.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/@highlightjs/cdn-assets/highlight.min.js') }}"></script>
	<script src="{{ asset('assets/js/demo/render.highlight.js') }}"></script>

    @stack('script-file')
	<!-- ================== END page-js ================== -->
</head>
<body class="pace-done theme-green">
	<!-- BEGIN #loader -->
	<div id="loader" class="app-loader">
		<span class="spinner"></span>
	</div>
	<!-- END #loader -->

	<!-- BEGIN #app -->
	<div id="app" class="app app-header-fixed app-sidebar-fixed app-content-full-height">
		
        <!-- BEGIN #header -->

        @include('layouts.header')

		<!-- END #header -->
	
		<!-- BEGIN #sidebar -->

        @include('layouts.sidebar')

		<!-- END #sidebar -->
		
		<!-- BEGIN #content -->
		<div id="content" class="app-content d-flex flex-column p-0">

            @yield('content')

          
            <!-- @include('layouts.footer') -->
        </div>

		<!-- END #content -->
	
		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-theme btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- END #app -->
    @stack('scripts')
</body>
</html>