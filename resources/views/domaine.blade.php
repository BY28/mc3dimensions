@extends('layouts.apps')

@section('title')
Bijouterie | MC3
@endsection

@section('styles')

<style type="text/css">
	main{
		background: #fff;
	}
</style>

@endsection

<!--
@section('header')
	<h1>Bijouterie</h1>
	<h4>Accélérez vos processus de production</h4>
	<a href="{{ URL::to('inprogress') }}" class="waves-effect waves-light btn orange">Demander une impression 3D</a>
@endsection
-->

@section('content')
	<section class="white">
		<div class="container">
			
			<div class="nav-content">
		      <ul class="tabs">
		        <li class="tab"><a href="#dentaire">Dentaire</a></li>
		        <li class="tab"><a href="#joaillerie">Joaillerie</a></li>
		        <li class="tab"><a href="#prototypage">Prototypage</a></li>
		      </ul>
		    </div>
			
		</div>
	</section>

	<div id="dentaire">
		
		<div id="header-dentaire" class="white"   style="background: url('{{ URL::to('src/img/backgrounds/dental.jpg') }}'); background-size: cover; background-position: center;min-height: 550px;">
			<<div class="container">
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
					<img src="https://formlabs.com/media/upload/_thumbs/lt_bp_cartridge_parts.jpg.680x383_q80_crop-smart.jpg">
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
					<img src="https://formlabs.com/media/upload/_thumbs/dental-grey-media-card2x_vjCz88j.jpg.680x383_q80_crop-smart.jpg">
				</div>
			</div>
			<div class="row">
				<div class="col s6">
					<img src="https://formlabs.com/media/upload/_thumbs/denture-media-card2x_qmfpOxE.jpg.680x383_q80_crop-smart.jpg">
				</div>
				<div class="col s6">
					<h5>Dentiers 3D</h5>
					<p>99% match Nous repoussons les limites de l'impression 3D pour dentistes en permettant d'imprimer directement des dentiers en 3D, à même votre bureau.</p>
				</div>
			</div>
		</div>


	</div>

	<div id="joaillerie">

		<div id="header-joaillerie" class="white"   style="background: url('https://cdn.discordapp.com/attachments/194092101300912129/378585275141455882/Sans_titre-1.png');background-size: cover; background-position: center;min-height: 550px;">
			<div class="container">
				<div class="row">
					<div class="col s6" style="margin-top: 6%;">
						<h3>Créez des pièces plus précises que jamais</h3>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col s6">
					<img src="https://formlabs.com/media/upload/_thumbs/M_castable-overview4.png.680x383_q80_crop-smart.png">
				</div>
				<div class="col s6">
					<h5>Résine Calcinable</h5>
					<p>La résine Calcinable est une de nos résines les plus précises. Elle brûle et se consume sans laisser de résidus, permettant aux joailliers de passer directement du design numérique au modèle master. Les pièces imprimées en résine Calcinable sont destinées à être brûlées et à créer des empreintes de moules ou arbres de coulée.</p>
				</div>
			</div>
			<div class="row">
				<div class="col s6">
					<h5>Résine Grise Classique</h5>
					<p>La résine Grise a un rendu mat et détaillé qui la rend idéale pour se faire une idée rapide du produit fini, à coût dérisoire. Suffisamment robuste pour être manipulée par les clients, elle permet de créer des prototypes convaincants et réalistes.</p>
				</div>
				<div class="col s6">
					<img src="https://formlabs.com/media/upload/_thumbs/mask-ring-overview-attribute2x.jpg.680x383_q80_crop-smart.jpg">
				</div>
			</div>
			<div class="row">
				<div class="owl-carousel" id="jewels-carousel">
					<div><img src="{{ URL::to('src/img/jewels/1.jpg') }}"></div>
					<div><img src="{{ URL::to('src/img/jewels/2.jpg') }}"></div>
					<div><img src="{{ URL::to('src/img/jewels/3.jpg') }}"></div>
					<div><img src="{{ URL::to('src/img/jewels/4.jpg') }}"></div>
				</div>
			</div>
		</div>

			

	</div>

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
					<img src="https://static.formlabs.com/static/formlabs-web-frontend/img/products/resin/engineering/tough/gallery/M_drone.jpg?73898c5-4346535">
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
					<img src="https://static.formlabs.com/static/formlabs-web-frontend/img/products/resin/engineering/high-temp/gallery/M_fire.jpg?73898c5-4346535">
				</div>
			</div>
			<div class="row">
				<div class="col s6">
					<img src="https://static.formlabs.com/static/formlabs-web-frontend/img/products/resin/engineering/flexible/gallery/M_shoe.jpg?73898c5-4346535">
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
					<img src="https://static.formlabs.com/static/formlabs-web-frontend/img/products/resin/engineering/durable/gallery/M_durable-bottle.jpg?73898c5-4346535">
				</div>
			</div>
		</div>

	</div>

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