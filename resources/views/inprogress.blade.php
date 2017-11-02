@extends('layouts.pages')

@section('title')
Développement... | MC3
@endsection

@section('header')

	<h1>Site en construction</h1>
	<h4>Fonctionnalité bientôt disponible</h4>

@endsection

@section('content')
<section class="section" id="in-progress">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<img src="{{ URL::to('src/img/backgrounds/in-progress.jpg') }}" class="responsive-img">
			</div>
		</div>
	</div>
</section>

@endsection