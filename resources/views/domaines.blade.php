@extends('layouts.pages')

@section('title')
Impression 3D domaines | MC3
@endsection

@section('header')
	<h1>Des solutions faites pour vous</h1>
	<div class="row banner-text">
		<div class="col s6 offset-s3">
			<p>Quelques soit votre secteur, il est possible d'améliorer grandement son efficacité et sa rentabilité grâce à nos différentes solutions.</p>	
		</div>
	</div>
@endsection

@section('content')
<section class="section no-pad" id="section-domaines">
	<div class="">	
		<div class="row">

			<div class="col s12 center">
				<h4>La 3D est dans tous les domaines</h4>
				<img src="https://cdn.discordapp.com/attachments/194092101300912129/372881686016294925/impr.png" class="responsive-img">
			</div>
			
		</div>
		<div class="row blue lighten-2">
			<div class="col s4 offset-s2 center hide-on-small-only">
				<img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/372758599132512256/dentist-2351844.png">
			</div>
			<div class="col m4">
				<h3>Dentaire</h3>
				<p>L'impression 3D prends de plus en plus d'ampleur dans le secteur dentaire, plusieurs possibilités s'offrent à vous concernant ce domaine facilitant la tache pour la fabrication d'implants et différents appareils dentaires (couronnes, bridges...)</p>
				<a href="{{ URL::to('domaines/bijouterie') }}" class="waves-effect waves-light btn orange">En savoir plus</a>
			</div>
		</div>
		<div class="row purple lighten-2">
			<div class="col m4 offset-m2">
				<h3>Bijouterie</h3>
				<p>Les bijoutiers ont complètement adopté la nouvelle méthode de travail consistant à modéliser et imprimer en 3D leurs bijoux. Cette méthode rapide, efficace et surtout très précise a conquis bon nombre d'entre eux et nos clients en sont satisfait à 100%</p>
				<a href="{{ URL::to('domaines/bijouterie') }}" class="waves-effect waves-light btn orange">En savoir plus</a>
			</div>
			<div class="col m4 center hide-on-small-only">
				<img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/372818495144198155/bijouterie.png">
			</div>
		</div>
		<div class="row red lighten-1">
			<div class="col m4 offset-m2 center hide-on-small-only">
				<img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/372797024397164544/medical.png">
			</div>
			<div class="col m4">
				<h3>Santé</h3>
				<p>Que ce soit pour l'éducation ou dans le monde professionnel, la précision de l'impression 3D est un atout majeur dans le secteur médical permettant d'avoir des formes quasiment identiques à l'objet de base</p>
				<a href="{{ URL::to('domaines/bijouterie') }}" class="waves-effect waves-light btn orange">En savoir plus</a>
			</div>
		</div>
		<div class="row blue-grey lighten-2">
			<div class="col m4 offset-m2">
				<h3>Mécanique</h3>
				<p>Nous vous permettons d'obtenir des objets mécaniques complexes et performants difficilement réalisables par d'autres méthodes de fabrication</p>
				<a href="{{ URL::to('domaines/bijouterie') }}" class="waves-effect waves-light btn orange">En savoir plus</a>
			</div>
			<div class="col m4 center hide-on-small-only">
				<img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/372817126819627009/mechanic.png">
			</div>
		</div>
		<div class="row orange lighten-2">
			<div class="col m4 offset-m2 center hide-on-small-only">
				<img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/372844253409312779/archi.png">
			</div>
			<div class="col m4">
				<h3>Architecture</h3>
				<p>Obtenez un résultat rapide et précis pour vos différentes maquettes quelque soit leurs compléxité</p>
				<a href="{{ URL::to('domaines/bijouterie') }}" class="waves-effect waves-light btn orange">En savoir plus</a>
			</div>
		</div>
		<div class="row light-green lighten-2">
			<div class="col m4 offset-m2">
				<h3>Prototypage</h3>
				<p>Vous avez une idée et vos voulez la concrétiser ? Nos services sont fait pour vous.</p>
				<a href="{{ URL::to('domaines/bijouterie') }}" class="waves-effect waves-light btn orange">En savoir plus</a>
			</div>
			<div class="col m4 center hide-on-small-only">
				<img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/372859730789662722/prototype.png">
			</div>
		</div>
	</div>
</section>

@endsection