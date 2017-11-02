@extends('layouts.apps')

@section('title')
Impression 3D | MC3
@endsection

@section('content')

	<section class="section" id="section-send">
		<div class="container">
			<div class="row">
				<h3>Envoyez votre fichier</h3>
				<div class="col s12 z-depth-1 white">
					<form action="#">
					    <div class="file-field input-field">
					      <div class="btn">
					        <span>File</span>
					        <input type="file">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text">
					      </div>
					    </div>
					  </form>
				</div>
			</div>
		</div>
	</section>

@endsection