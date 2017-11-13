@extends('layouts.apps')

@section('title')
Blog | MC3
@endsection

@section('content')

	<section class="section z-depth-1" id="header">
		<div class="container">	
			<div class="row" id="banner-content">
				<div class="col m8 offset-m2 s12 center">
					<h2>MC3 BLOG</h2>
					<img class="responsive-img" src="{{ URL::to('src/img/illustrations/header_blog.png') }}">
					<p>Approfondissez vos connaissance de l'impression 3D grâce à notre blog. Différents articles, tutoriels et actualités seront postés pour vous tenir au courant de toutes les nouveautées</p>
				</div>
			</div>
			<form class="row center">
				<div class="input-field col m6 offset-m3 s12 center">
		          <i class="material-icons prefix">search</i>
		          <input type="text" id="autocomplete-input" class="autocomplete">
		          <label for="autocomplete-input">Rechercher un article</label>
		        </div>
		        <div class="input-field col m6 offset-m3">
		        	<button class="waves-effect waves-light btn orange">Rechercher</button>
		        </div>
			</form>
		</div>
	</section>

	<section class="section" id="section-blog">
		<div class="container">
			<div class="row">
				
				<div class="col l4 m4 s12">
			      <div class="card hoverable">
			        <div class="card-image">
			          <img class="responsive-img" src="{{ URL::to('src/img/illustrations/java_formation.png') }}">
			          <a class="btn-floating halfway-fab waves-effect waves-light orange"><i class="material-icons">open_in_new</i></a>
			        </div>
			        <div class="card-content">
			        	<span class="card-title truncate">Formation Java (Niveau 1)</span>
			          	<p class="card-text truncate">Ne ratez pas le lancement de notre nouvelle formation Java, disponible dès le 26 Novembre 2017</p>
			        </div>
			      </div>
			    </div>

			    <div class="col l4 m4 s12">
			      <div class="card hoverable">
			        <div class="card-image">
			          <img class="responsive-img" src="{{ URL::to('src/img/illustrations/salle_formation.jpg') }}">
			          <a class="btn-floating halfway-fab waves-effect waves-light orange"><i class="material-icons">open_in_new</i></a>
			        </div>
			        <div class="card-content">
			        	<span class="card-title truncate">Mardi: Journée porte ouverte</span>
			          	<p class="card-text truncate">Venez découvrir l'entreprise et le monde de l'impression 3D à l'occasion de notre journée porte ouverte qui se déroule tous les mardi</p>
			        </div>
			      </div>
			    </div>
			    
			</div>
		</div>
	</section>

@endsection