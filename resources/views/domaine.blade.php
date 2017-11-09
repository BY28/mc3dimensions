@extends('layouts.apps')

@section('title')
Bijouterie | MC3
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
	

	</div>

	<div id="joaillerie">
		
		<section class="section no-pad-top" id="section-domaine">
			<div id="header-joaillerie" class="white"   style="background: url('{{ URL::to('src/img/backgrounds/jewelry.jpg') }}'); background-size: cover; background-position: center;min-height: 550px;">
				<div class="container">
					<div class="row">
						<div class="col s6" style="margin-top: 6%;">
							<h3>Bijouterie & Joaillerie</h3>
							<p>Ayez l'avantage d'imprimer en 3D et focalisez vous uniquement sur la création</p>
						</div>
					</div>
				</div>
			</div>
		</section>
			<div class="container">
				<div class="row">
					<div class="col m4 offset-m2 hide-on-small-only">
						<img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/372818495144198155/bijouterie.png" width="50%">
					</div>
					<div class="col m6">
						<h3>Bijouterie, joaillerie et horlogerie</h3>
						<p>Dans ce domaine, l'imprimante 3D vous permet de fabriquer à l’unité ou en série vos créations de bagues, colliers, bracelets, montres… avec une grande précision et en un temps record.</p>
					</div>
				</div>
			<div class="row">
				<div class="col s6">
					<h3>Pourquoi imprimer en 3D ?</h3>
					<p>L'impression 3D vous permet non seulement de gagner du temps mais aussi d'avoir un résultat final fiable et de haute précision. Ce qui laisse libre cours à votre imagination permettant ainsi de faire différents modèles personnalisés</p>
				</div>
				<div class="col s6 center">
					<div class="owl-carousel" id="domaine-carousel">
						<div><img src="http://www.thejewelleryeditor.com/media/images_thumbnails/filer_public_thumbnails/old/49578/EngagementRingStylesCuts002.jpg__760x0_q75_crop-scale_subsampling-2_upscale-false.jpg"></div>
						<div><img src="http://static.wixstatic.com/media/f5e7f8_9220a7bf7be6402685c732c60aed8a0f.png/v1/fill/w_327,h_308,al_c,usm_0.66_1.00_0.01/f5e7f8_9220a7bf7be6402685c732c60aed8a0f.png"></div>
						<div><img src="https://i.pinimg.com/564x/b1/48/db/b148db17939f1fec5a44a2ee1d8ae504.jpg"></div>
						<div><img src="https://i.pinimg.com/564x/0c/3c/83/0c3c830c02132fb3bee9438aee11db68.jpg"></div>
						<div><img src="https://static.gravotech.com/var/gravotech/storage/images/media/type3/_international/carrousels/produits/3design-rendu-photo-realiste-bague-anneaux/359694-1-int-FR/3design-rendu-photo-realiste-bague-anneaux_product_slide.jpg"></div>
						<div><img src="https://upload.wikimedia.org/wikipedia/commons/4/46/Jewelry-3d-pringint.jpg"></div>
						<div><img src="https://s-media-cache-ak0.pinimg.com/originals/13/29/a2/1329a2b5344f3e6efc49554fb26bce7b.jpg"></div>
					</div>
				</div>
			</div>

		</section>

	</div>

	<div id="prototypage">
		
	</div>

@endsection

@section('scripts')

<script type="text/javascript">
	$(document).ready(function(){
		 $('#domaine-carousel').owlCarousel({
		       items:1,
		       loop:true,
		       center:true,
		       margin:10,
		       autoplay:true,
		       autoplayTimeout:2500
		  });
	});
</script>

@endsection