<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>
		<link rel="icon" href="http://www.mc3antilles.com/images/mc3_logo/55x55.png"" />
		<link rel="stylesheet" href="{{ URL::to('src/materialize/css/materialize.css') }}">
		<link rel="stylesheet" href="{{ URL::to('src/materialize/css/materialicons.css') }}">
		<link rel="stylesheet" href="{{ URL::to('src/css/apps.css') }}">
		<link rel="stylesheet" href="{{ URL::to('src/owlcarousel/css/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ URL::to('src/owlcarousel/css/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ URL::to('src/font-awesome/css/font-awesome.min.css') }}">

		@yield('styles')
	</head>
	<body>

		<header>	
			@include('partials.nav')
		</header>

		<main>

			@yield('sidebar')
			@yield('content')
          
		</main>


		@include('partials.footer')
		

		<script src="{{ URL::to('src/js/jquery.min.js') }}"></script>
		<script src="{{ URL::to('src/materialize/js/materialize.min.js') }}"></script>
		<script src="{{ URL::to('src/owlcarousel/js/owl.carousel.min.js') }}"></script>
		<script type="text/javascript">
			
			$(".button-collapse").sideNav();

		</script>
		@yield('scripts')

	</body>
</html>