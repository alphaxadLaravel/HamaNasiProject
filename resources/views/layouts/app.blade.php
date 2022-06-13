<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome - HamaNasi</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="favicon.ico">

	<!-- FontAwesome JS-->
	<script defer src="{{asset('plugins/fontawesome/js/all.min.js')}}"></script>

	<!-- App CSS -->
	<link id="theme-style" rel="stylesheet" href="{{asset('css/hamanasi.css')}}">
	<link rel="stylesheet" href="{{asset('css/icons.min.css')}}">
</head>
<body>

    <header class="app-header fixed-top">
        @include('components.up_nav')
        @include('components.sidebar')
    </header>

    <div class="app-wrapper mt-5">
		<div class="app-content pt-3 p-md-3 p-lg-4">
			<div class="container-xl">
                @yield('pages')
            </div>
        </div>
    </div>


	<!-- Javascript -->
	<script src="{{asset('plugins/popper.min.js')}}"></script>
	<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>

	<!-- Charts JS -->
	<script src="{{asset('plugins/chart.js/chart.min.js')}}"></script>
	<script src="{{asset('js/index-charts.js')}}"></script>

	<!-- Page Specific JS -->
	<script src="{{asset('js/app.js')}}"></script>

</body>

</html>