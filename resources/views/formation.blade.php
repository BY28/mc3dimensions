@extends('layouts.pages')

@section('header')

	<h1>3DESIGN</h1>
	<h4>Logiciel de conception de bijoux</h4>
	<div class="row banner-text">
		<div class="col s6 offset-s3">
			<p>Du 06/03/2017 au 09/03/2017</p>	
		</div>
	</div>
	<a href="#formation-inscription" class="waves-effect waves-light btn transparent border">INSCRIPTION</a>
	<div><i class="material-icons">expand_more</i></div>
@endsection

@section('content')

<section class="section" id="formation-informations">
		
		<div class="container">
			<h1>Informations</h1>
			<div class="row">		
				<div class="col s5">
					<ul>
						<li><i class="material-icons">date_range</i> Du 06/03/2017 au 09/03/2017</li>
						<li><i class="material-icons">access_time</i> 3 jours</li>
						<li><i class="material-icons">attach_money</i> 20 000 DZD TTC</li>
						<li><i class="material-icons">school</i> Aucune exigence</li>
					</ul>
				</div>
				<div class="col s7">
					<h3>Pourquoi 3DESIGN?</h3>
					<p>Parce que 3DESIGN est le seul logiciel véritablement tout en un ! que ce soit pour dessiner vos modèles de bijoux en 3D, les présenter, valider, modifier, décliner, fabriquer et les vendre !</p> 
				</div>
			</div>
		</div>
	
</section>

<section class="section" id="formation-programme">
		
		<div class="container">
			<h1>Programme</h1>
			<div class="row center">		
				<div class="col s3 etape">
					<h3>Jour 1</h3>
					<div class="divider"></div>
					<ul>
						<li>Principe de base de 3DESIGN et l'interface utilisateur</li>
						<li>Introduction à l'ésquisse</li>
						<li>Modélisation de base des pièces</li>
					</ul>
				</div>
				<div class="col s3 etape">
					<h3>Jour 2</h3>
					<div class="divider"></div>
					<ul>
						<li>Formation de symétrie et dépouille</li>
						<li>Fonction de répétition</li>
					</ul>
				</div>
				<div class="col s3 etape">
					<h3>Jour 3</h3>
					<div class="divider"></div>
					<ul>
						<li>Fonction de révolution</li>
						<li>Coques et nervures</li>
						<li>Configuration</li>
					</ul>
				</div>
			</div>
		</div>
	
</section>

<section class="section" id="formation-inscription">
		
		<div class="container">
			<h1>Inscrivez-vous</h1>
			<div class="row">		
				<div class="col s12">
					<form>
					      <div class="row">
					        <div class="input-field col s6">
					          <input id="first_name" type="text" class="validate">
					          <label for="first_name">First Name</label>
					        </div>
					        <div class="input-field col s6">
					          <input id="last_name" type="text" class="validate">
					          <label for="last_name">Last Name</label>
					        </div>
					      </div>
					      <div class="row">
					        <div class="input-field col s6">
					          <input id="email" type="email" class="validate">
					          <label for="email">Email</label>
					        </div>
					      </div>
					      <div class="row">
					        <div class="input-field col s6">
					          <input id="phone" type="text" class="validate">
					          <label for="phone">Phone</label>
					        </div>
					      </div>
					      <button class="waves-effect waves-light btn orange">ENVOYER</button>
				    </form>
				</div>
			</div>
		</div>
	
</section>

@endsection