@extends('layouts.pages')

@section('header')
	<h1>Commentaires et avis</h1>
	<h4>Liste des messages</h4>
@endsection

@section('content')
	
	<section class="section" id="comments-form" style="background-color: #fff">
		<div class="container">
			<div class="row">
				<div class="col s12">
				@foreach($comments as $comment)
	
					<p>{{ $comment->content }}</p>
					<div class="divider"></div>
					
				@endforeach
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