@extends('layouts.pages')

@section('header')
	<h1>Des solutions pour votre secteur</h1>
	<h4>La 3d dans tous les domaines</h4>
	<div class="row banner-text">
		<div class="col s6 offset-s3">
			<p>Quelques soit votre secteur, il est possible d'améliorer grandement son efficacité et sa rentabilité grâce à nos différentes solutions.</p>	
		</div>
	</div>
@endsection

@section('content')
<section class="section" id="section-domaines">
	<div class="container">	
		<div class="row">
			<div class="col s6 center">
				<img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/370942405559713792/exagon_ai.png">
			</div>
			<div class="col s6">
				<h3>Dentaire</h3>
				<p>L'impression 3D prends de plus en plus d'ampleur dans le secteur dentaire, plusieurs possibilités s'offrent à vous concernant ce domaine facilitant la tache pour la fabrication d'implants et différents appareils dentaires (couronnes, bridges...)</p>
				<a href="{{ URL::to('domaines/bijouterie') }}" class="waves-effect waves-light btn orange">En savoir plus</a>
			</div>
		</div>
		<div class="row">
			<div class="col s6">
				<h3>Bijouterie</h3>
				<p>Les bijoutiers ont complètement adopté la nouvelle méthode de travail consistant à modéliser et imprimer en 3D leurs bijoux. Cette méthode rapide, efficace et surtout très précise a conquis bon nombre d'entre eux et nos clients en sont satisfait à 100%</p>
				<a href="{{ URL::to('domaines/bijouterie') }}" class="waves-effect waves-light btn orange">En savoir plus</a>
			</div>
			<div class="col s6 center">
				<img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/370947412073644032/ring.png">
			</div>
		</div>
		<div class="row">
			<div class="col s6 center">
				<img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/370949699890577408/healthcare.png">
			</div>
			<div class="col s6">
				<h3>Santé</h3>
				<p>Que ce soit pour l'éducation ou dans le monde professionnel, la précision de l'impression 3D est un atout majeur dans le secteur médical permettant d'avoir des formes quasiment identiques à l'objet de base</p>
				<a href="{{ URL::to('domaines/bijouterie') }}" class="waves-effect waves-light btn orange">En savoir plus</a>
			</div>
		</div>
		<div class="row">
			<div class="col s6">
				<h3>Mécanique</h3>
				<p>Nous vous permettons d'obtenir des objets mécaniques complexes et performants difficilement réalisables par d'autres méthodes de fabrication</p>
				<a href="{{ URL::to('domaines/bijouterie') }}" class="waves-effect waves-light btn orange">En savoir plus</a>
			</div>
			<div class="col s6 center">
				<img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/370954231781523456/mecaNIK.png">
			</div>
		</div>
		<div class="row">
			<div class="col s6 center">
				<img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/370956082643992576/home.png">
			</div>
			<div class="col s6">
				<h3>Architecture</h3>
				<p>Obtenez un résultat rapide et précis pour vos différentes maquettes quelque soit leurs compléxité</p>
				<a href="{{ URL::to('domaines/bijouterie') }}" class="waves-effect waves-light btn orange">En savoir plus</a>
			</div>
		</div>
		<div class="row">
			<div class="col s6">
				<h3>Prototypage</h3>
				<p>Vous avez une idée ? Nos services sont fait pour vous.</p>
				<a href="{{ URL::to('domaines/bijouterie') }}" class="waves-effect waves-light btn orange">En savoir plus</a>
			</div>
			<div class="col s6 center">
				<img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/370958148024139776/prot.png">
			</div>
		</div>
	</div>
</section>

@endsection