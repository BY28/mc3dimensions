@extends('layouts.apps')

@section('title')
Prototypage | MC3
@endsection

@section('styles')

<style type="text/css">
	main{
		background: #fff;
	}
</style>

@endsection

@section('content')

	<div id="prototypage">
		
		<div id="header-prototypage" class="white"   style="background: url('{{ URL::to('src/img/backgrounds/prototyping.jpg') }}'); background-size: cover; background-position: center;min-height: 550px;">
			
		</div>

		<div class="container">
			<div class="row">
				<div class="col s8 offset-s2 center">
					<h3>Matériaux techniques pour prototypes et design industriel</h3>
				</div>
			</div>
			<div class="row">
				<div class="col s6">
					<img src="{{ URL::to('src/img/illustrations/hr.jpg')  }}" class="responsive-img">
				</div>
				<div class="col s6">
					<h5>Haute Résistance</h5>
					<p>Cette résine a été conçue pour simuler le plastique ABS et présente une résistance à la traction et un module d'élasticité comparables. Cette résine solide, résistante à la rupture et pouvant supporter des déformations ou des contraintes importantes, convient parfaitement au prototypage.</p>
				</div>
			</div>
			<div class="row">
				<div class="col s6">
					<h5>Haute Température</h5>
					<p>La résine Haute Température présente une température de déflexion à la chaleur de 289 ºC à 0,45 MPa, la plus élevée sur le marché des matériaux pour l'impression 3D. Elle donne de très bons résultats pour des applications statiques à haute température. Elle peut aussi s'utiliser pour des procédés de fabrication par moulage ou thermoformage.</p>
				</div>
				<div class="col s6">
					<img src="{{ URL::to('src/img/illustrations/ht.jpg')  }}" class="responsive-img">
				</div>
			</div>
			<div class="row">
				<div class="col s6">
					<img src="{{ URL::to('src/img/illustrations/fl.jpg')  }}" class="responsive-img">
				</div>
				<div class="col s6">
					<h5>Flexible</h5>
					<p>La résine Flexible simule un caoutchouc de dureté 80A. Ce matériau polyvalent s'utilise pour des pièces qui doivent se plier et se tordre au cours du temps. La résine Flexible convient parfaitement pour simuler des matériaux doux au toucher et pour ajouter des éléments ergonomiques à des ensembles faits de plusieurs matériaux.</p>
				</div>
			</div>
			<div class="row">
				<div class="col s6">
					<h5>Durable</h5>
					<p>La résine Durable a été conçue pour simuler le polypropylène (PP). Elle reprend sa forme initiale après de fortes pressions. Cette résine ductile et résistante à l'usure s'utilise pour réaliser des pièces qui doivent se déformer et présenter un aspect lisse et brillant.</p>
				</div>
				<div class="col s6">
					<img src="{{ URL::to('src/img/illustrations/dr.jpg')  }}" class="responsive-img">
				</div>
			</div>
		</div>

	</div>

	<section class="section no-pad" id="index-boutique" style="background: url('{{ URL::to('src/img/backgrounds/formplus.jpg') }}'); background-size: contain; background-repeat: no-repeat; background-position: center;">
			<div style="background: rgba(44, 62, 80, 0.6);">
				<div class="container center" style="padding: 4%">
					<div class="row">
						<div class="col s8 offset-s2" style="color: #ffffff">
							<h3>Plus d'informations ?</h3>
							<p>Contactez-nous pour toutes informations</p>
							<a href="http://mc3dimensions.dev/contact" class="waves-effect waves-light btn orange">Contact</a>
						</div>
					</div>
				</div>
			</div>
	</section>


@endsection

@section('scripts')

<script type="text/javascript">
	$(document).ready(function(){
		 $('#jewels-carousel').owlCarousel({
		       items:3,
		       loop:true,
		       center:true,
		       margin:10,
		       autoplay:true,
		       autoplayTimeout:2500
		  });
	});
</script>

@endsection