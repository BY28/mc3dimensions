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
		<link rel="stylesheet" href="{{ URL::to('src/font-awesome/css/font-awesome.min.css') }}">

		@yield('styles')
	</head>
	<body>

		<main>

			<section class="section no-pad-top" id="header">
				@include('partials.nav')
				<div class="container">	
					<div id="banner-content center">
						<!-- <div id="header-particles"></div> -->
							@yield('header')
					</div>
				</div>
			</section>
			
			@yield('sidebar')
			@yield('content')
			<!--
			<section class="section" id="services">
			
				<div class="container">
					<div class="row center">		
						<div class="col m3 s6">
							<a href="{{ URL::to('formations') }}" class="icon icon-mono formation">formation</a>
							<h5>Formations</h5>
						</div>	
						<div class="col m3 s6">
							<a href="{{ URL::to('print') }}" class="icon icon-mono impression">impression</a>
							<h5>Impression3D</h5>
						</div>	
						<div class="col m3 s6">
							<a href="{{ URL::to('products') }}" class="icon icon-mono boutique">boutique+</a>
							<h5>Produits</h5>
						</div>	
						<div class="col m3 s6">
							<a href="{{ URL::to('domaines') }}" class="icon icon-mono domaines">domaines</a>
							<h5>Domaines</h5>
						</div>
					</div>
				</div>
		
			</section>
			-->
			<section class="section center" id="partners">
				<div class="container">	
					<div class="owl-carousel" id="partners-carousel">
						<div><img src="{{ URL::to('src/img/partners/symantec.png') }}"></div>
						<div><img src="{{ URL::to('src/img/partners/formlabs.png') }}"></div>
						<div><img src="{{ URL::to('src/img/partners/autodesk.png') }}"></div>
						<div><img src="{{ URL::to('src/img/partners/gravotech.png') }}"></div>
						<div><img src="{{ URL::to('src/img/partners/solidworks.png') }}"></div>
						<div><img src="{{ URL::to('src/img/partners/3dsystems.png') }}"></div>
						<div><img src="{{ URL::to('src/img/partners/stratasys.png') }}"></div>
						<div><img src="{{ URL::to('src/img/partners/creaform.png') }}"></div>
						<!--<div><img src="{{ URL::to('src/img/partners/apc.png') }}"></div>
						<div><img src="{{ URL::to('src/img/partners/aruba.png') }}"></div>
						<div><img src="{{ URL::to('src/img/partners/digium.png') }}"></div>
						<div><img src="{{ URL::to('src/img/partners/epson.png') }}"></div>
						<div><img src="{{ URL::to('src/img/partners/hewlettpackard.png') }}"></div>
						<div><img src="{{ URL::to('src/img/partners/hp.png') }}"></div>
						<div><img src="{{ URL::to('src/img/partners/lenovo.png') }}"></div>
						<div><img src="{{ URL::to('src/img/partners/logitech.png') }}"></div>
						<div><img src="{{ URL::to('src/img/partners/mitel.png') }}"></div>
						<div><img src="{{ URL::to('src/img/partners/netgear.png') }}"></div>
						<div><img src="{{ URL::to('src/img/partners/qnap.png') }}"></div>
						<div><img src="{{ URL::to('src/img/partners/smart.png') }}"></div>
						<div><img src="{{ URL::to('src/img/partners/tplink.png') }}"></div>
						<div><img src="{{ URL::to('src/img/partners/veritas.png') }}"></div>-->
					</div>
				</div>
			</section>

		 </div>

		</main>

		<footer>	
		
			@include('partials.footer')
		
		</footer>

		<script src="{{ URL::to('src/js/jquery.min.js') }}"></script>
		<script src="{{ URL::to('src/materialize/js/materialize.min.js') }}"></script>
		<script src="{{ URL::to('src/owlcarousel/js/owl.carousel.min.js') }}"></script>
		<script type="text/javascript">
			
			  // AFFIX LOWER NAVBAR ON SCROLL
			$(window).scroll(function() {    
			    var scroll = $(window).scrollTop();
			    if (scroll >= 32) {
			        $(".navbar-lower").addClass("navbar-fixed");
			    }
			    else {
			        $(".navbar-lower").removeClass("navbar-fixed");     
			    }
			});
			
			$(document).ready(function(){
				$('#partners-carousel').owlCarousel({
				       items:7,
				       loop:true,
				       center:true,
				       margin:10,
				       autoplay:true,
				       autoplayTimeout:2500
				  });
			});

			$(".button-collapse").sideNav();

			$(document).on('scroll', function (e) { updateColor(); });

			function updateColor() {
			  var o = $(document).scrollTop() / 500;
			    if (o > 0.950) { o = 0.95; }
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