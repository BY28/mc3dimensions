@extends('layouts.master')

@section('content')
<section class="section center" id="index-banner">
	<div id="index-particles"></div>
	<div class="container">	
		<div id="banner-content">
			<div class="owl-carousel" id="banner-carousel">
				<div data-hash="formation">
					<h1>Formations</h1>
					<h4>Formation 3D professionnelle</h4>
					<div class="row banner-text">
						<div class="col s6 offset-s3">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.</p>	
						</div>
					</div>
					
					<a href="#" class="waves-effect waves-light btn">Inscription</a>
				</div>
				<div data-hash="impression">
					<h1>Impression 3D</h1>
					<h4>Service d'impression à la demande</h4>
					<div class="row banner-text">
						<div class="col s6 offset-s3">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.</p>	
						</div>
					</div>
					
					<a href="#" class="waves-effect waves-light btn">Commande</a>
				</div>
				<div data-hash="vente">
					<h1>Qualité de service inégalabe</h1>
					<h4>Logiciel et matériel à la pointe de la technologie</h4>
					<div class="row banner-text">
						<div class="col s6 offset-s3">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.</p>	
						</div>
					</div>
					
					<a href="#" class="waves-effect waves-light btn">Boutique</a>
				</div>
				<div data-hash="services">
					<h1>Applications infinies</h1>
					<h4>Des services sur mesure pour votre sercteur d'activité</h4>
					<div class="row banner-text">
						<div class="col s6 offset-s3">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.</p>	
						</div>
					</div>
					
					<a href="#" class="waves-effect waves-light btn">Découvrir</a>
				</div>
			</div>
			<div id="banner-nav">
				
				<a href="#formation" class="icon icon-mono formation">facebook</a>
				<a href="#impression" class="icon icon-mono impression">twitter</a>
				<a href="#vente" class="icon icon-mono vente">google+</a>
				<a href="#services" class="icon icon-mono services">google+</a>
			</div>
		</div>
	</div>
</section>
<!--
<section class="section" id="services">
	
	<div class="container">	
		<div class="row">
			<div class="col s4">
				<div class="center promo">
	                <i class="material-icons">all_inclusive</i>
	                <p class="promo-caption">INFINITY</p>
	                <p class="light center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
              	</div>
			</div>
			<div class="col s4">
				<div class="center promo">
	                <i class="material-icons">lightbulb_outline</i>
	                <p class="promo-caption">IDEAS</p>
	                <p class="light center">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              	</div>
			</div>
			<div class="col s4">
				<div class="center promo">
	                <i class="material-icons">timer</i>
	                <p class="promo-caption">TIME</p>
	                <p class="light center">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
              	</div>
			</div>
		</div>
	</div>
</section>
-->

<section class="section center" id="partners">
	<div class="container">	
		<div class="owl-carousel" id="partners-carousel">
			<div><img src="{{ URL::to('src/img/partners/symantec.png') }}"></div>
			<div><img src="{{ URL::to('src/img/partners/autodesk.png') }}"></div>
			<div><img src="{{ URL::to('src/img/partners/gravotech.png') }}"></div>
			<div><img src="{{ URL::to('src/img/partners/solidworks.png') }}"></div>
			<div><img src="{{ URL::to('src/img/partners/3dsystems.png') }}"></div>
			<div><img src="{{ URL::to('src/img/partners/stratasys.png') }}"></div>
			<div><img src="{{ URL::to('src/img/partners/apc.png') }}"></div>
			<div><img src="{{ URL::to('src/img/partners/aruba.png') }}"></div>
			<div><img src="{{ URL::to('src/img/partners/creaform.png') }}"></div>
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
			<div><img src="{{ URL::to('src/img/partners/veritas.png') }}"></div>
		</div>
	</div>
</section>

<section class="section" id="index-formations">
	<div class="container">
		<div class="row">
			<div class="col s4">
				<h2>Formations</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
				<a href="#" class="waves-effect waves-light btn">Read more</a>
			</div>
			<div class="col s8 right">
				  <div class="row">
				    <div class="col s4">
				      <div class="card">
				        <div class="card-image">
				          <img src="https://lorempixel.com/400/400/">
				          <span class="card-title">Card Title</span>
				          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
				        </div>
				        <div class="card-content">
				          <p>I am a very simple card. I am good at containing small bits of information.</p>
				        </div>
				      </div>
				    </div>
				     <div class="col s4">
				      <div class="card">
				        <div class="card-image">
				          <img src="https://lorempixel.com/400/400/">
				          <span class="card-title">Card Title</span>
				          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
				        </div>
				        <div class="card-content">
				          <p>I am a very simple card. I am good at containing small bits of information.</p>
				        </div>
				      </div>
				    </div>
				     <div class="col s4">
				      <div class="card">
				        <div class="card-image">
				          <img src="https://lorempixel.com/400/400/">
				          <span class="card-title">Card Title</span>
				          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
				        </div>
				        <div class="card-content">
				          <p>I am a very simple card. I am good at containing small bits of information.</p>
				        </div>
				      </div>
				    </div>
				  </div>
			</div>
		</div>
	</div>
</section>

<section class="section" id="index-impression">
	<div class="container">
		<div class="row">
			<div class="col s8 left">
				  <div class="row">
				    <div class="col s4">
				      <div class="card">
				        <div class="card-image">
				          <img src="https://lorempixel.com/400/400/">
				          <span class="card-title">Card Title</span>
				          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
				        </div>
				        <div class="card-content">
				          <p>I am a very simple card. I am good at containing small bits of information.</p>
				        </div>
				      </div>
				    </div>
				     <div class="col s4">
				      <div class="card">
				        <div class="card-image">
				          <img src="https://lorempixel.com/400/400/">
				          <span class="card-title">Card Title</span>
				          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
				        </div>
				        <div class="card-content">
				          <p>I am a very simple card. I am good at containing small bits of information.</p>
				        </div>
				      </div>
				    </div>
				     <div class="col s4">
				      <div class="card">
				        <div class="card-image">
				          <img src="https://lorempixel.com/400/400/">
				          <span class="card-title">Card Title</span>
				          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
				        </div>
				        <div class="card-content">
				          <p>I am a very simple card. I am good at containing small bits of information.</p>
				        </div>
				      </div>
				    </div>
				  </div>
			</div>
			<div class="col s4 right">
				<h2>Impression 3D</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
				<a href="#" class="waves-effect waves-light btn">Read more</a>
			</div>
		</div>
	</div>
</section>
@endsection

@section('scripts')

<script type="text/javascript">
	$(document).ready(function(){
		 $('#partners-carousel').owlCarousel({
		       items:4,
		       loop:true,
		       center:true,
		       margin:10,
		       autoplay:true,
		       autoplayTimeout:2500
		  });
		 $('#banner-carousel').owlCarousel({
	       items:1,
	       loop:true,
	       center:true,
	       margin:10,
	       URLhashListener:true,
	       autoplayHoverPause:true,
	       /*autoplay:true,
		   autoplayTimeout:10000,*/
	       startPosition: 'URLHash'
	  	 });
	});
</script>

<script type="text/javascript" src="{{ URL::to('src/particles/js/particles.min.js') }}"></script>
<script type="text/javascript">particlesJS.load("index-particles", "{{ URL::to('src/particles/json/particles.json') }}", function(){});</script>
@endsection