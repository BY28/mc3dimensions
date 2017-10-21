@extends('layouts.master')

@section('header')


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
					
					<a href="#" class="waves-effect waves-light btn orange">Nos formations</a>
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
					
					<a href="#" class="waves-effect waves-light btn orange">Envoyez vos fichiers</a>
				</div>
				<div data-hash="boutique">
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
					
					<a href="#" class="waves-effect waves-light btn orange">Boutique</a>
				</div>
				<div data-hash="services">
					<h1>Applications infinies</h1>
					<h4>Des services sur mesure pour votre secteur d'activité</h4>
					<div class="row banner-text">
						<div class="col s6 offset-s3">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.</p>	
						</div>
					</div>
					
					<a href="#" class="waves-effect waves-light btn orange">Découvrir</a>
				</div>
			</div>
			<div id="banner-nav">
				<a href="#formation" class="icon icon-mono formation">formation</a>
				<a href="#impression" class="icon icon-mono impression">impression</a>
				<a href="#boutique" class="icon icon-mono boutique">boutique+</a>
				<a href="#services" class="icon icon-mono services">services</a>
			</div>
@endsection

@section('content')

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

<section class="section center" id="industries">
	
		<div id="industries-content">
			<div class="container">	
				<h2>Boostez votre activité</h2>
				<h4>La 3D dans tous les secteurs</h4>
					  <div class="row">
					    <div class="col s2  industry-item">
					    	<a href="#">
						      	<img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/370942405559713792/exagon_ai.png">
						      	<h5>Dentaire</h5>
					    	</a>
					    </div>
					     <div class="col s2 industry-item">
					     	<a href="#">
						    <img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/370947412073644032/ring.png">
						      	<h5>Bijouterie</h5>
							</a>
					    </div>
					     <div class="col s2  industry-item">
					     	<a href="#">
					      <img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/370949699890577408/healthcare.png">
						      	<h5>Santé</h5>
						    </a>
					    </div>
					    <div class="col s2  industry-item">
					    	<a href="#">
						     <img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/370954231781523456/mecaNIK.png">
						      	<h5>Mécanique</h5>
						    </a>
					    </div>
					    <div class="col s2  industry-item">
					    	<a href="#">
						     <img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/370956082643992576/home.png">
						      	<h5>Architecture</h5>
						    </a>
					    </div>
					     <div class="col s2  industry-item">
					     	<a href="#">
						     <img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/370958148024139776/prot.png">
						      	<h5>Prototypage</h5>
						    </a>
					    </div>
					  </div>
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
				<a href="#" class="waves-effect waves-light btn orange">Read more</a>
			</div>
			<div class="col s8">
				  <div class="row">
				    <div class="col s6">
				      <div class="card">
				        <div class="card-image">
				          <img src="https://cdn.discordapp.com/attachments/194092101300912129/370989342358896641/ss.png">
				          <a class="btn-floating halfway-fab waves-effect waves-light orange"><i class="material-icons">add</i></a>
				        </div>
				        <div class="card-content">
				          <p>Formation 3D sur le logiciel de conception de bijoux le plus performant du marché</p>
				        </div>
				      </div>
				    </div>
				     <div class="col s6">
				      <div class="card">
				        <div class="card-image">
				          <img src="http://www.techno-midiazot.re/wp-content/uploads/2017/07/solidworks-3d-cad-web-image.png">
				          <a class="btn-floating halfway-fab waves-effect waves-light orange"><i class="material-icons">add</i></a>
				        </div>
				        <div class="card-content">
				          <p>Formations solidworks adapté à votre niveau, choisissez entre basique et avancée</p>
				        </div>
				      </div>
				    </div>
				  </div>
			</div>
		</div>
	</div>
</section>

<section class="section center" id="index-impression">
	
	<div class="container">	
		<h2>Impression 3D</h2>
		<a href="#" class="waves-effect waves-light btn orange">PASSER UNE COMMANDE</a>
		<div class="row">
			<div class="col s4">
				<div class="center promo">
	                <i class="material-icons">lightbulb_outline</i>
	                <p class="promo-caption">CREATION</p>
	                <p class="light center">Créez et modélisez votre objet 3D sur le logiciel 3d de votre choix</p>
              	</div>
			</div>
			<div class="col s4">
				<div class="center promo">
	                <i class="material-icons">file_upload</i>
	                <p class="promo-caption">UPLOAD</p>
	                <p class="light center">Envoyez les fichiers .STL sur le site, choisissez l'un de nos différents matériaux et lancez votre commande</p>
              	</div>
			</div>
			<div class="col s4">
				<div class="center promo">
	                <i class="material-icons">timer</i>
	                <p class="promo-caption">RECEPTION</p>
	                <p class="light center">Recevez votre objet 3D en un temps reccord et avec un haut niveau de précision</p>
              	</div>
			</div>
		</div>
	</div>
</section>

<section class="section" id="index-boutique">
	<div class="container">
		<div class="row">
			<div class="col s8">
				  <div class="row">
				    <div class="col s4">
				      <div class="card">
				        <div class="card-image">
				          <img src="https://cdn.discordapp.com/attachments/194092101300912129/371289625114705921/11.png">
				          <a class="btn-floating halfway-fab waves-effect waves-light orange"><i class="material-icons">add</i></a>
				        </div>
				        <div class="card-content">
				          <p>Imprimantes 3D</p>
				        </div>
				      </div>
				    </div>
				     <div class="col s4">
				      <div class="card">
				        <div class="card-image">
				          <img src="https://media.messe.ch/baselworld/OnlineCatalogue/images/bild/551x710/1014596.png">
				          <a class="btn-floating halfway-fab waves-effect waves-light orange"><i class="material-icons">add</i></a>
				        </div>
				        <div class="card-content">
				          <p>Logiciels 3D</p>
				        </div>
				      </div>
				    </div>
				     <div class="col s4">
				      <div class="card">
				        <div class="card-image">
				          <img src="https://cdn.discordapp.com/attachments/194092101300912129/371286968132173857/ds.png">
				          <a class="btn-floating halfway-fab waves-effect waves-light orange"><i class="material-icons">add</i></a>
				        </div>
				        <div class="card-content">
				          <p>Scanners 3D</p>
				        </div>
				      </div>
				    </div>
				  </div>
			</div>

			<div class="col s4">
				<h2>Boutique</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
				<a href="#" class="waves-effect waves-light btn orange">Read more</a>
			</div>
			
		</div>
	</div>
</section>


@endsection

@section('scripts')

<script type="text/javascript">
	$(document).ready(function(){
		 $('#partners-carousel').owlCarousel({
		       items:7,
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
@endsection