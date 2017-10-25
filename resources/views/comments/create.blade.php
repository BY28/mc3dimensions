@extends('layouts.pages')

@section('header')
	<h1>Donnez votre avis !</h1>
	<h4>Envoyez-nous vos remarques, critiques et idées d'ameliorations</h4>
	<a href="#comments-form" class="waves-effect waves-light btn transparent border">Donner mon avis</a>
@endsection

@section('content')
	
	<section class="section" id="comments-form" style="background-color: #fff">
		<div class="container">
			<div class="row">
				<div class="col s6">
					<h5>Entrez votre message</h5>
					{!! $errors->first('message', ' <div class="card-panel orange lighten-1"><span class="white-text">:message</span></div>') !!}
					<form action="{{ route('comments.create') }}" method="post">
						<div class="input-field">	
							<i class="material-icons prefix">mode_edit</i>
					        <textarea name="message" id="textarea" class="materialize-textarea" style="height: 18rem" data-length="1024"></textarea>
					        <label for="textarea" class="">Message</label>
						</div>
						<div class="input-field">	
							<button class="waves-effect waves-light btn orange right" type="submit">Envoyer</button>
						</div>
						{{csrf_field()}}
					</form>
				</div>

				<div class="col s6">
					<h4>Quel est le but du site ?</h4>
					<p>Les sites ont un grand impact sur le développement des entreprises acutelles, c'est donc un aspect très important.</p>
					<p>Ce site aura comme but de promouvoir les services proposés par la société et faciliter sa relation avec les clients, qui pourront voir les produits ou formations, et les choisir directement sur le site.</p>
					<p>Une autre partie servira à la commande d'objets 3D. Les personnes (bijoutiers, dentistes, prothesistes...) voulant imprimer des objets, pourront les demander sur le site. Une application sera développée afin d'afficher, visualiser et commander ces derniers, ce qui fera gagner beaucoup de temps.</p>
					<p>Cette version du site sera améliorée au fur et à mesure du développement, et les fonctionnalités y seront ajoutées petit à petit.</p>
				</div>

			</div>
		</div>
	</section>
@endsection

@section('scripts')

	<script type="text/javascript">
		
	  	$(document).ready(function(){
		 	$('#textarea').trigger('autoresize');
		});
		
	</script>

@endsection