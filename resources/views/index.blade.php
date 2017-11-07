@extends('layouts.master')

@section('title')
Formations, Impression 3D, Logiciels et matériels informatique | MC3
@endsection

@section('header')
		<!--
			<div class="owl-carousel row center" id="banner-carousel">
				<div data-hash="formation">
					<h1>Formations</h1>
					<h4>Formation 3D professionnelle</h4>
					<div class="row banner-text">
						<div class="col s6 offset-s3">
							<p>Avec nos formations vous aurez une maitrise parfaite des logiciels 3D concernés. Notre expérience et savoir faire dans le domaine vous sera transmis par nos ingénieurs qualifiés</p>	
						</div>
					</div>
					
					<a href="{{ URL::to('formations') }}" class="waves-effect waves-light btn orange">Nos formations</a>
				</div>
				<div data-hash="impression">
					<h1>Impression 3D</h1>
					<h4>Service d'impression à la demande</h4>
					<div class="row banner-text">
						<div class="col s6 offset-s3">
							<p>MC3 fait vivre vos idées et accélère votre production! Notre équipe s'occupera de l'impression de vos différents objets avec une précision hors du commun. Tout ce que vous avez à faire est de nous envoyer vos fichiers</p>	
						</div>
					</div>
					
					<a href="{{ URL::to('print') }}" class="waves-effect waves-light btn orange">Envoyez vos fichiers</a>
				</div>
				<div data-hash="boutique">
					<h1>Qualité de service inégalabe</h1>
					<h4>Logiciel et matériel à la pointe de la technologie</h4>
					<div class="row banner-text">
						<div class="col s6 offset-s3">
							<p>Nos produits englobent toute la chaine de production, des logiciels de conception 3D aux imprimantes. Vous pouvez vous en procurer dès maintentant!</p>	
						</div>
					</div>
					
					<a href="{{ URL::to('products') }}" class="waves-effect waves-light btn orange">Nos produits</a>
				</div>
				<div data-hash="domaines">
					<h1>Applications infinies</h1>
					<h4>Des services sur mesure pour votre secteur d'activité</h4>
					<div class="row banner-text">
						<div class="col s6 offset-s3">
							<p>Nous vous proposons des services sur mesure selon votre secteur d'activité, vous bénéficierez d'un suivi irreprochable et de différents conseils pour vous aider à améliorer et accélérer votre industrie</p>	
						</div>
					</div>
					
					<a href="{{ URL::to('domaines') }}" class="waves-effect waves-light btn orange">Découvrir</a>
				</div>
			</div>
			<div class="row">
				<div id="banner-nav" class="center offset-m2">
					<a href="#formation" class="icon icon-mono formation">formation</a>
					<a href="#impression" class="icon icon-mono impression">impression</a>
					<a href="#boutique" class="icon icon-mono boutique">boutique+</a>
					<a href="#domaines" class="icon icon-mono domaines">domaines</a>
				</div>
			</div>
		-->

			<div class="row center-align" style="margin-bottom: 8%">
				<div class="col m4 hoverable" style="padding: 2%; background: rgba(255, 255, 255, 0.8); min-height: 450px; color: #34495e">
					<h4>Impression 3D</h4>
					<a href="{{ URL::to('print') }}" class="icon icon-mono impression revert">impression</a>
					<p>MC3 fait vivre vos idées et accélère votre production! Notre équipe s'occupera de l'impression de vos différents objets avec une précision hors du commun.</p>
					<a href="{{ URL::to('print') }}" class="waves-effect waves-light btn orange" style="margin-top: 10%">Impression 3D</a>
				</div>
				<div class="col m4 hoverable" style="padding: 2%; background: rgba(44, 62, 80, 0.6);min-height: 450px;">
					<h4>Software & Hardware</h4>
					<a href="{{ URL::to('products') }}" class="icon icon-mono boutique">boutique+</a>
					<p>Nos produits englobent toute la chaine de production, des logiciels de conception 3D aux imprimantes. Vous pouvez vous en procurer dès maintentant!</p>
					<a href="{{ URL::to('products') }}" class="waves-effect waves-light btn orange" style="margin-top: 10%">Produits</a>
				</div>

				<div class="col m4 hoverable" style="padding: 2%; background: rgba(255, 255, 255, 0.8); min-height: 450px; color: #34495e">
					<h4>Formation 3D</h4>
					<a href="{{ URL::to('formations') }}" class="icon icon-mono formation revert">formation</a>
					<p>Avec nos formations vous aurez une maitrise parfaite des logiciels 3D. Notre expérience et savoir faire dans le domaine vous sera transmis par nos ingénieurs qualifiés</p>
					<a href="{{ URL::to('formations') }}" class="waves-effect waves-light btn orange" style="margin-top: 10%">Formations</a>
				</div>

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
				<!-- <h4>La 3D dans tous les domaines</h4>
				<a href="{{ URL::to('domaines') }}" class="waves-effect waves-light btn orange">Tous les secteurs</a> -->
					  <div class="row">
					    <div class="col m4 s12 industry-item">
					    	<a href="{{ URL::to('domaines/bijouterie') }}">
						      	<img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/370942405559713792/exagon_ai.png">
						      	<h5>Dentaire</h5>
					    	</a>
						      	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						      	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						      	<a href="{{ URL::to('domaines') }}" class="waves-effect waves-light btn orange white-text">Découvrir</a>
					    </div>
					     <div class="col m4 s12 industry-item">
					     	<a href="{{ URL::to('domaines/bijouterie') }}">
						    <img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/370947412073644032/ring.png">
						      	<h5>Bijouterie</h5>
							</a>
						      	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						      	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						      	<a href="{{ URL::to('domaines') }}" class="waves-effect waves-light btn orange white-text">Découvrir</a>
					    </div>
					     <div class="col m4 s12  industry-item">
					     	<a href="{{ URL::to('domaines/bijouterie') }}">
						     <img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/370958148024139776/prot.png">
						      	<h5>Prototypage</h5>
						    </a>
						      	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						      	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						      	<a href="{{ URL::to('domaines') }}" class="waves-effect waves-light btn orange white-text">Découvrir</a>
					    </div>
					    <!--
					     <div class="col l2 m4 s6  industry-item">
					     	<a href="{{ URL::to('domaines/bijouterie') }}">
					      <img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/370949699890577408/healthcare.png">
						      	<h5>Santé</h5>
						    </a>
					    </div>
					    <div class="col l2 m4 s6  industry-item">
					    	<a href="{{ URL::to('domaines/bijouterie') }}">
						     <img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/370954231781523456/mecaNIK.png">
						      	<h5>Mécanique</h5>
						    </a>
					    </div>
					    <div class="col l2 m4 s6  industry-item">
					    	<a href="{{ URL::to('domaines/bijouterie') }}">
						     <img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/370956082643992576/home.png">
						      	<h5>Architecture</h5>
						    </a>
					    </div>
						-->
					  </div>
			</div>
		</div>
	
</section>

<section class="section" id="news" style="background: url('http://blog.zmorph3d.com/wp-content/uploads/2016/05/blog_header_mity_v2-1620x727.jpg'); background-attachment: fixed; background-size: cover; background-position: center;">
	<div class="container center" style="background-color: rgba(255, 255, 255, 0.8); padding: 1%;">
		<div class="row">
			<div class="col s12">
				<h2>Evénements & nouveautés</h2>
			</div>
		</div>
	
	<div class="owl-carousel owl-theme container" id="banner-carousel" style="text-align: justify;margin-top: 2%">
		<div>
			<div class="row">
				<div class="col s5">
					<img src="http://lorempicsum.com/nemo/350/200/6">
				</div>
				<div class="col s7">
					<h3>Mardi: Journée portes ouvertes!</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p>
				</div>
			</div>
		</div>

		<div>
			<div class="row">	
				<div class="col s5">
						<img src="http://lorempicsum.com/nemo/350/200/6">
				</div>
				<div class="col s7">
					<h3>Mardi: Journée portes ouvertes!</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p>
				</div>
			</div>
		</div>

		<div>
			<div class="row">
				<div class="col s5">
						<img src="http://lorempicsum.com/nemo/350/200/6">
				</div>
				<div class="col s7">
					<h3>Mardi: Journée portes ouvertes!</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p>
				</div>
			</div>
		</div>
	</div></div>
</section>

<section class="section no-pad" id="index-formations" style="background: #34495e">
	<div class="">
	<!--
		<div class="row">
			<div class="col l4 m4 s12">
				<h2>Besoin d'une formation ?</h2>
				<p>Choisissez parmis l'une de nos différentes formations que vous ferez en compagnie de l'un de nos formateurs hautement qualifié.</p>
				<a href="{{ URL::to('formations') }}" class="waves-effect waves-light btn orange">Nos formations</a>
			</div>
			<div class="col l8 m8 s12">
				  <div class="row">
				    <div class="col m6 s12">
				      <div class="card">
				        <div class="card-image">
				          <img src="https://cdn.discordapp.com/attachments/194092101300912129/370989342358896641/ss.png">
				          <a href="{{ URL::to('formations/3design') }}" class="btn-floating halfway-fab waves-effect waves-light orange"><i class="material-icons">add</i></a>
				        </div>
				        <div class="card-content">
				          <p>Formation 3D sur le logiciel de conception de bijoux le plus performant du marché</p>
				        </div>
				      </div>
				    </div>
				     <div class="col m6 s12">
				      <div class="card">
				        <div class="card-image">
				          <img src="http://www.techno-midiazot.re/wp-content/uploads/2017/07/solidworks-3d-cad-web-image.png">
				          <a href="{{ URL::to('formations/3design') }}" class="btn-floating halfway-fab waves-effect waves-light orange"><i class="material-icons">add</i></a>
				        </div>
				        <div class="card-content">
				          <p>Formations solidworks adapté à votre niveau, choisissez entre basique et avancée</p>
				        </div>
				      </div>
				    </div>
				  </div>
			</div>
		</div>
	-->
	<!--
		<div class="row">
			<div class="col m4 center">
				<h4>Besoin d'une formation ?</h4>
				<p>Choisissez parmis l'une de nos différentes formations après l'achat de l'un de nos produits que vous ferez en compagnie de l'un de nos formateurs hautement qualifié.</p>
				<a href="{{ URL::to('formations') }}" class="waves-effect waves-light btn orange">Nos formations</a>
			</div>
			<div class="col m4 center">
				<img src="{{ URL::to('src/img/illustrations/3design_pc.PNG') }}" width="100%">
			</div>
			<div class="col m4 center">
				<h4>Contactez-nous !</h4>
				<p>Planifier un rendez-vous pour entamer votre formation ou avoir plus d'informations.</p>
				<a href="{{ URL::to('formations') }}" class="waves-effect waves-light btn orange">Contacter</a>
			</div>
		</div>
	-->
	<div class="row" style="background: url('http://www.3design.com/assets/images/mbr-2-2000x1500.jpg'); background-size: cover; background-repeat: no-repeat; background-position: left;">
		<div class="col m6 s12 center" style="padding: 0%; color:#ffffff; text-align: justify;">
			<div class="row">
				<div class="col l8 m12 offset-l2" style="background: rgba(44, 62, 80, 0.6); padding: 4%; margin-top: 20%">
					<h4>Besoin d'une formation ?</h4>
			<p>Choisissez parmis l'une de nos différentes formations après l'achat de l'un de nos produits que vous ferez en compagnie de l'un de nos formateurs hautement qualifié.</p>
			<a href="{{ URL::to('formations') }}" class="waves-effect waves-light btn orange right" style="margin-top: 2%">Nos formations</a>
				</div>
			</div>
			
		</div>

		<div class="col m6 s12 center" style="padding: 2%; background: #ecf0f1">
			<h4>Prenez un rendez-vous !</h4>
			<img src="{{ URL::to('src/img/illustrations/3design_pc.PNG') }}" width="60%">
			<div>
				<a href="{{ URL::to('contact') }}" class="waves-effect waves-light btn orange" style="margin-top: 2%;">Nous contacter</a>
			</div>
		</div>
	</div>
	</div>
</section>

<section class="section center" id="index-impression">
	
	<div class="container">	
		<h2>Donnez vie à vos idées</h2>
		<div class="row">
			<div class="col s12">
				<img src="{{ URL::to('src/img/backgrounds/print-steps.png') }}" class="responsive-img">
			</div>
		</div>
		<a href="{{ URL::to('inprogress') }}" class="waves-effect waves-light btn orange">PASSER UNE COMMANDE</a>
	</div>
</section>

<section class="section no-pad" id="index-boutique" style="background: url('{{URL::to('src/img/backgrounds/formlabs-form-2.jpg')}}'); background-size: contain; background-repeat: no-repeat; background-position: center;">
	<div style="background: rgba(44, 62, 80, 0.6);">
	<div class="container center" style="padding: 4%">
		<div class="row">
			<!--
			<div class="col l8 m8 s12">
				  <div class="row">
				    <div class="col l4 m6 s12">
				      <div class="card">
				        <div class="card-image">
				          <img src="https://cdn.discordapp.com/attachments/194092101300912129/371289625114705921/11.png">
				          <a class="btn-floating halfway-fab waves-effect waves-light orange"><i class="material-icons">add_shopping_cart</i></a>
				        </div>
				        <div class="card-content">
				          <p>Imprimantes 3D</p>
				        </div>
				      </div>
				    </div>
				     <div class="col l4 m6 s12">
				      <div class="card">
				        <div class="card-image">
				          <img src="https://media.messe.ch/baselworld/OnlineCatalogue/images/bild/551x710/1014596.png">
				          <a class="btn-floating halfway-fab waves-effect waves-light orange"><i class="material-icons">add_shopping_cart</i></a>
				        </div>
				        <div class="card-content">
				          <p>Logiciels 3D</p>
				        </div>
				      </div>
				    </div>
				     <div class="col l4 m6 s12">
				      <div class="card">
				        <div class="card-image">
				          <img src="https://fb-s-c-a.akamaihd.net/h-ak-fbx/v/t45.5328-0/c41.0.540.540/p180x540/20504881_1499920073400696_320361520414326784_n.jpg?oh=147ee5ae78f250937866e8f1b4a074cb&oe=5A7B6EE8&__gda__=1517717225_b8c1d536443bca3ab7fe8ef5fb59c6f6">
				          <a class="btn-floating halfway-fab waves-effect waves-light orange"><i class="material-icons">add_shopping_cart</i></a>
				        </div>
				        <div class="card-content">
				          <p>Scanners 3D</p>
				        </div>
				      </div>
				    </div>
				  </div>
			</div>

			<div class="col l4 m4 s12">
				<h2>Equipez-vous !</h2>
				<p>Notre équipe vous conseillera pour vous doter de l'un de nos produits. Un investissement plus que nécessaire pour votre développement qui vous offrira un gain de temps considérable.</p>
				<a href="{{ URL::to('inprogress') }}" class="waves-effect waves-light btn orange">Liste des produits</a>
			</div>
			-->
			<div class="col s4 offset-s4" style="color: #ffffff">
				<h2>Equipez-vous !</h2>
				<p style="text-align: justify;">Notre équipe vous conseillera pour vous doter de l'un de nos produits. Un investissement plus que nécessaire pour votre développement qui vous offrira un gain de temps considérable.</p>
				<a href="{{ URL::to('inprogress') }}" class="waves-effect waves-light btn orange">Liste des produits</a>
			</div>
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
   		   nav:true,
	       margin:10,
	       autoplay:true,
        	autoplayHoverPause:true,
		   autoplayTimeout:5000,
	  	 });
	});
</script>
@endsection