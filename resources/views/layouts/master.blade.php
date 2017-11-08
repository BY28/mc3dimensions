<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>
		<link rel="icon" href="http://www.mc3antilles.com/images/mc3_logo/55x55.png"" />
		<link rel="stylesheet" href="{{ URL::to('src/materialize/css/materialize.css') }}">
		<link rel="stylesheet" href="{{ URL::to('src/materialize/css/materialicons.css') }}">
		<link rel="stylesheet" href="{{ URL::to('src/css/style.css') }}">
		<link rel="stylesheet" href="{{ URL::to('src/owlcarousel/css/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ URL::to('src/owlcarousel/css/owl.theme.default.min.css') }}">

		@yield('styles')
	</head>
	<body>

		

		<main>

			<section class="section no-pad-top" id="header">

				@include('partials.nav')

				<div class="container">	
					<div id="banner-content">
						<!-- <div id="header-particles"></div> -->
							@yield('header')
					</div>
				</div>
			</section>
			
			@yield('sidebar')
			@yield('content')
          
		</main>

		<footer>	
		
			@include('partials.footer')
		
		</footer>

		<script src="{{ URL::to('src/js/jquery.min.js') }}"></script>
		<script src="{{ URL::to('src/materialize/js/materialize.min.js') }}"></script>
		<script src="{{ URL::to('src/owlcarousel/js/owl.carousel.min.js') }}"></script>
		<script type="text/javascript">
			
			$(".button-collapse").sideNav();
        
			$(document).on('scroll', function (e) { updateColor(); });

			function updateColor() {
			  var o = $(document).scrollTop() / 500;
			    if (o > 0.9500) { o = 0.95; }
			    var e = $('nav');
			    var currentColor = e.css('background-color');
			    var rgb = currentColor.replace(/^(rgb|rgba)\(/, '').replace(/\)$/, '').replace(/\s/g, '').split(',');
			    var newColor = 'rgba(' + rgb[0] + ',' + rgb[1] + ',' + rgb[2] + ',' + o + ')';
			    e.attr('style', 'background-color: ' + newColor + ' !important');
			}

			updateColor();

		</script>
		<!-- 
		<script type="text/javascript" src="{{ URL::to('src/particles/js/particles.min.js') }}"></script>
		<script type="text/javascript">particlesJS.load("header-particles", "{{ URL::to('src/particles/json/particles.json') }}", function(){});</script>
		-->
		@yield('scripts')

	</body>
</html>