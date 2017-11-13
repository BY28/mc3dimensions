@extends('layouts.apps')

@section('title')
Support | MC3
@endsection

@section('content')

<section class="section z-depth-1" id="header">
	<div class="container">	
		<div class="row" id="banner-content">
			<div class="col m8 offset-m2 s12 center">
				<h2>MC3 SUPPORT</h2>
				<!--<img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/373860126240669699/desk.png">
				<p>Approfondissez vos connaissance de l'impression 3D grâce à notre blog. Différents articles, tutoriels et actualités seront postés pour vous tenir au courant de toutes les nouveautées</p>-->
			</div>
		</div>
		<form class="row center">
			<div class="input-field col m6 offset-m3 s12 center">
	          <i class="material-icons prefix">search</i>
	          <input type="text" id="autocomplete-input" class="autocomplete">
	          <label for="autocomplete-input">Rechercher parmis nos articles</label>
	        </div>
	        <div class="input-field col m6 offset-m3">
	        	<button class="waves-effect waves-light btn orange">Rechercher</button>
	        </div>
		</form>
	</div>
</section>

<div class="container section">
	<div class="row">
		<div class="col s12 z-depth-1 white" style="padding: 0%">
			<h4 style="margin-left: 2%">Questions fréquentes</h4>
			<ul class="collapsible" data-collapsible="accordion" style="margin-bottom: 0%">
			    <li>
			      	<div class="collapsible-header"><i class="material-icons">add</i>Comment m'inscrire ?</div>
			      	<div class="collapsible-body"><span>Réponse à la question...</span></div>
			    </li>
			    <li>
			      	<div class="collapsible-header"><i class="material-icons">add</i>Comment envoyer un fichier ?</div>
			      	<div class="collapsible-body"><span>Réponse à la question...</span></div>
			    </li>
			    <li>
			      	<div class="collapsible-header"><i class="material-icons">add</i>Comment assister à une formation ?</div>
			      	<div class="collapsible-body"><span>Réponse à la question...</span></div>
			    </li>
			    <li>
			      	<div class="collapsible-header"><i class="material-icons">add</i>Quelles formations offrez-vous ?</div>
			      	<div class="collapsible-body"><span>Réponse à la question...</span></div>
			    </li>
			    <li>
			      	<div class="collapsible-header"><i class="material-icons">add</i>Quelle imprimante me conviendrait le mieux ?</div>
			      	<div class="collapsible-body"><span>Réponse à la question...</span></div>
			    </li>
		  	</ul>
		</div>
	</div>

	<div class="row">
				<div class="col m6 s12 z-depth-1 hoverable white" id="contact-form" style="padding:2%">
					<h5>Autre question ?</h5>
					<p>Posez-nous votre question.</p>
					{!! $errors->first('message', ' <div class="card-panel orange lighten-1"><span class="white-text">:message</span></div>') !!}
					<form action="#" method="post">
						<div class="input-field">
						 	<i class="material-icons prefix">email</i>
				         	<input id="email" type="email" class="validate">
				         	<label for="email">Email</label>
				        </div>
						<div class="input-field">
						 	<i class="material-icons prefix">phone</i>
				         	<input id="phone" type="text" class="validate">
				         	<label for="phone">Tel</label>
				        </div>
				        <div class="input-field">
							<i class="material-icons prefix">error</i>
				        	<input id="question" type="text" class="validate">
				        	<label for="question">Question</label>
				        </div>
						<div class="input-field">	
							<i class="material-icons prefix">mode_edit</i>
					        <textarea name="message" id="textarea" class="materialize-textarea" style="height: 18rem" data-length="1024"></textarea>
					        <label for="textarea" class="">Description</label>
						</div>
						<div class="input-field">	
							<button class="waves-effect waves-light btn orange right" type="submit"><i class="material-icons">send</i></button>
						</div>
						{{csrf_field()}}
					</form>
				</div>
				<div class="col m5 s12 white right z-depth-1" style="padding:2%">
						<h4>Coordonnées</h4>
						<div class="divider"></div>
						<ul>
							<li><i class="material-icons prefix">email</i> 3dalgerie@mc3.fr</li>
							<li><i class="material-icons prefix">phone</i> 021 44 53 73</li>
							<li><i class="material-icons prefix">location_on</i> N°5 Lotissement Gigot - Les Vergers. BP70 BIS 16105. Birkhadem Cedex. Alger.</li>
						</ul>
						<img class="responsive-img" src="{{ URL::to('src/img/illustrations/contact.png') }}">
					</div>
			</div>
</div>

@endsection