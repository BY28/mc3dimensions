@extends('layouts.apps')

@section('title')
Dentaire | MC3
@endsection

@section('styles')

<style type="text/css">
	main{
		background: #fff;
	}
</style>

@endsection

@section('content')

	<div id="dentaire">
		
		<div id="header-dentaire" class="white"   style="background: url('{{ URL::to('src/img/backgrounds/dental.jpg') }}'); background-size: cover; background-position: center;min-height: 550px;">
			<div class="container">
				<div class="row">
					<div class="col s6" style="margin-top: 6%;">	
						<h3>Modernisez votre activité avec l'impression 3D</h3>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col s6">
					<img src="{{ URL::to('src/img/illustrations/rdltc.jpg')  }}" class="responsive-img">
				</div>
				<div class="col s6">
					<h5>Résine Dental LT Clear</h5>
					<p>Biocompatible classe 2, la résine Dental LT Claire peut être au contact sur le long terme. Elle permet d'imprimer des gouttières, attelles, splints et tout outil orthodontique utilisable sur le long terme. Vous pouvez proposer des nightguards sur mesure dans l'heure à vos patients. Sa couleur claire et transparente permet une précision optimale. Téléchargez notre guide pour plus d'informations.</p>
				</div>
			</div>
			<div class="row">
				<div class="col s6">
					<h5>Résine Grise Classique</h5>
					<p>La résine Grise a un rendu mat qui permet d'imprimer des pièces détaillées et fidèles. Elle s'utilise très simplement pour travailler sur des moules, des modèles orthodontiques et des gouttières. Son coût peu élevé en fait un matériau de choix pour les modèles éducatifs.</p>
				</div>
				<div class="col s6">
					<img src="{{ URL::to('src/img/illustrations/rgcd.jpg')  }}" class="responsive-img">
				</div>
			</div>
			<div class="row">
				<div class="col s6">
					<img src="{{ URL::to('src/img/illustrations/d3d.jpg')  }}" class="responsive-img">
				</div>
				<div class="col s6">
					<h5>Dentiers 3D</h5>
					<p>99% match Nous repoussons les limites de l'impression 3D pour dentistes en permettant d'imprimer directement des dentiers en 3D, à même votre bureau.</p>
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