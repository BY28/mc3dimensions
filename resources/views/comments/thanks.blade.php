@extends('layouts.pages')

@section('header')
	<h1>Merci pour votre commentaire</h1>
	<h4>Nous prendrons en compte tous les avis lors du développement</h4>
	<a href="{{ URL::to('comments') }}" class="waves-effect waves-light btn orange">Ajouter un avis</a>
@endsection

@section('content')
	
	<section class="section" id="comments-form" style="background-color: #fff">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<img src="{{ URL::to('src/img/backgrounds/in-progress.jpg') }}" class="responsive-img">
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