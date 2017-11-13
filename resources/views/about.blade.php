@extends('layouts.pages')

@section('title')
Entreprise | MC3
@endsection

@section('header')
<div class="row center"  style="margin-top: 4%">
	<div class="col s6 offset-s3" style="padding: 10%; background-color: rgba(255, 255, 255, 0.8);">
		<h3>MC3 Algérie</h3>
	</div>
</div>
@endsection

@section('content')

	<section class="section" id="section-about">
			<div class="">

				

				<div class="row">

					<div class="col m4 offset-m3 s12">
						<h3>Qui sommes nous ?</h3>
						<p>MC3 est une équipe dédiée à la mise en place de solutions 3D complètes couvrant le cycle de développement de produits. De la numérisation laser au prototypage 3D en passant par la modélisation 3D. L’équipe MC3 accompagne les acteurs économiques mais aussi ceux l’enseignement/ formation professionnelle dans leur démarche de formation et méthodologie lie au développement de produits et visant à améliorer leur capacités de créativité d’innovations, de gestion de la qualité et de compétitivité.</p>
					</div>

					<div class="col m2">
						<img class="responsive-img" src="{{ URL::to('src/img/illustrations/who.png') }}">
					</div>
					
				</div>

				<div class="row" id="about-strength">
		            <div class="col m2 offset-m3 s12">
		              <div class="center promo promo-example">
		                <!-- <i class="material-icons">lightbulb_outline</i> -->
		                <img class="responsive-img" src="{{ URL::to('src/img/illustrations/creat.png') }}">
		                <p class="promo-caption">Créativité</p>
		                <p class="light center">Nous vous permettons d'innover dans vos différents secteurs d'activités grâce à nos services</p>
		              </div>
		            </div>
		            <div class="col m2 s12">
		              <div class="center promo promo-example">
		                <!-- <i class="material-icons">group</i> -->
		                 <img class="responsive-img" src="{{ URL::to('src/img/illustrations/qualite.png') }}">
		                <p class="promo-caption">Qualité</p>
		                <p class="light center">La proximité au client, le suivi et la qualité de service font partie de nos principaux atouts</p>
		              </div>
		            </div>
		            <div class="col m2 s12">
		              <div class="center promo promo-example">
		                <!-- <i class="material-icons">local_library</i> -->
		                 <img class="responsive-img" src="{{ URL::to('src/img/illustrations/exp.png') }}">
		                <p class="promo-caption">Efficacité</p>
		                <p class="light center">L'expérience, les compétences et le savoir faire de nos équipes sont mis à votre disposition afin de vous offir un résultat d'une qualité remarquable</p>
		              </div>
		            </div>
		          </div>

				<div class="row">

					<div class="col m2 offset-m3">
						<img class="responsive-img" src="{{ URL::to('src/img/illustrations/pack_3design_formlabs.jpg') }}">
					</div>
					<div class="col m4 s12">
						<h3>Produits et matériels</h3>
						<p>MC3 est le représentant officiel en Algérie des solutions 3D SolidWorks et de solutions complémentaires tel que Creaform, Stratasys, FARO pour a retro-conception, le prototypage rapide et le contrôle tridimensionnel. De plus MC3, offre une gamme complète de stations de travail à haute performance et autres hardware dédies à ces applications.</p>
					</div>
					
				</div>

				<div class="row">

					<div class="col m3 offset-m3 s12">
						<h3>Services et formations</h3>
						<p>MC3 offre une panoplie complète de curriculum de formations sur les technologies 3D couvrant des domaines tels que la conception de surfaces, moules, optimisation éléments finis, structure, mécanique des fluides, injection plastique et gestion électronique de documents. Toutes les formations sont dispensées par des experts certifiées disposant d’une double compétence industrielle et sur les produits.</p>
					</div>

					<div class="col m3">
						<img class="responsive-img  materialboxed" src="{{ URL::to('src/img/illustrations/salle_formation.jpg') }}">
					</div>
					
				</div>

				<div class="row">

					<div class="col m6 offset-m3 s12 center">
						<h3>Service d'études</h3>
						<img class="responsive-img" src="{{ URL::to('src/img/illustrations/se.png') }}">
						<p>Pour répondre aux besoins d’externalisation d’études électromécaniques et développement de produits innovants, MC3 met en place un bureau d’études offrants des services complets couvrant le design industriel , les mises en plan, la reprise 3D de plans 2D, Optimisation de performance produits avec la méthode des éléments finis et autres études d’ingénierie ainsi que des services de digitalisation, retro conception et prototypage rapide.</p>
					</div>
					
				</div>

			</div>
	</section>

@endsection

@section('scripts')

	<script type="text/javascript">
		  $(document).ready(function(){
		    $('.materialboxed').materialbox();
		  });
		      
	</script>

@endsection