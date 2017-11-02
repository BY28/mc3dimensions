@extends('layouts.pages')

@section('header')
	<h1>Commentaires et avis</h1>
	<h4>Liste des messages</h4>
@endsection

@section('content')
	
	<section class="section" id="comments-form" style="background-color: #fff">
		<div class="container">
			
				@foreach($comments as $comment)
					<div class="row">
						<div class="col m8 offset-m2 s12 z-depth-2" style="padding: 1%">

							<p>{{ $comment->content }}</p>
							<div class="divider"></div>
							<p class="right">{{ $comment->created_at }}</p>
							
						</div>
					</div>
				@endforeach
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