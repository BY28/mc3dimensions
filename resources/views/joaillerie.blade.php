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

@section('content')

	<div id="joaillerie">

		<div id="header-joaillerie" class="white"   style="background: url('{{ URL::to('src/img/backgrounds/jewelry.png')  }}');background-size: cover; background-position: center;min-height: 550px;">
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
					<img src="{{ URL::to('src/img/illustrations/rc.png')  }}" class="responsive-img">
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
					<img src="{{ URL::to('src/img/illustrations/rgc.jpg')  }}" class="responsive-img">
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