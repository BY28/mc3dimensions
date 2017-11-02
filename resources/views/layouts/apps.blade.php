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

		@yield('styles')
	</head>
	<body>

		<header>	
			@include('partials.nav')
		</header>

		<main>

			@yield('sidebar')
			@yield('content')

		<div class="fixed-action-btn" id="commentsContainer" style="bottom: 45px; right: 24px;">
          <a href="{{ URL::to('comments') }}" class="btn-floating btn-large waves-effect waves-light pulse orange" onclick="$('.tap-target').tapTarget('open')" id="comments"><i class="material-icons">question_answer</i></a>
		</div>
		<div class="tap-target" data-activates="comments">
		    <div class="tap-target-content">
		      <h5>Contribuez au développement !</h5>
		      <p>Envoyez-nous vos remarques, critiques et idées d'améliorations. Vos avis sont les bienvenus et nous aideront lors du développement.</p>
		    </div>
		 </div>
          
		</main>


		@include('partials.footer')
		

		<script src="{{ URL::to('src/js/jquery.min.js') }}"></script>
		<script src="{{ URL::to('src/materialize/js/materialize.min.js') }}"></script>
		<script src="{{ URL::to('src/owlcarousel/js/owl.carousel.min.js') }}"></script>
		<script type="text/javascript">
			
			$(".button-collapse").sideNav();

			$(document).ready(function(){
		      	$('.tap-target').tapTarget('open');
		      	setTimeout(
			    function() {
			      $('.tap-target').tapTarget('close');
			  }, 3000);

		      	$('#commentsContainer').hover(function() {
		      		$('.tap-target').tapTarget('open');
				});
		      	$('.tap-target').mouseleave(function() {
		      		$('.tap-target').tapTarget('close');
				});
		    });

		</script>
		@yield('scripts')

	</body>
</html>