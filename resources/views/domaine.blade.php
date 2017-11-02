@extends('layouts.pages')

@section('title')
Bijouterie | MC3
@endsection

@section('header')
	<h1>Bijouterie</h1>
	<h4>Accélérez vos processus de production</h4>
	<a href="{{ URL::to('inprogress') }}" class="waves-effect waves-light btn orange">Demander une impression 3D</a>
@endsection

@section('content')
	<section class="section" id="section-domaine">
		
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

		 <div class="row center">
		    <div class="col s2  industry-item">
		    	<a href="{{ URL::to('domaines/bijouterie') }}">
			      	<img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/370942405559713792/exagon_ai.png">
			      	<h5>Dentaire</h5>
		    	</a>
		    </div>
		     <div class="col s2 industry-item">
		     	<a href="{{ URL::to('domaines/bijouterie') }}">
			    <img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/370947412073644032/ring.png">
			      	<h5>Bijouterie</h5>
				</a>
		    </div>
		     <div class="col s2  industry-item">
		     	<a href="{{ URL::to('domaines/bijouterie') }}">
		      <img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/370949699890577408/healthcare.png">
			      	<h5>Santé</h5>
			    </a>
		    </div>
		    <div class="col s2  industry-item">
		    	<a href="{{ URL::to('domaines/bijouterie') }}">
			     <img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/370954231781523456/mecaNIK.png">
			      	<h5>Mécanique</h5>
			    </a>
		    </div>
		    <div class="col s2  industry-item">
		    	<a href="{{ URL::to('domaines/bijouterie') }}">
			     <img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/370956082643992576/home.png">
			      	<h5>Architecture</h5>
			    </a>
		    </div>
		     <div class="col s2  industry-item">
		     	<a href="{{ URL::to('domaines/bijouterie') }}">
			     <img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/370958148024139776/prot.png">
			      	<h5>Prototypage</h5>
			    </a>
		    </div>
		 </div>

	</section>

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