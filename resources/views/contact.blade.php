@extends('layouts.pages')

@section('title')
Contact | MC3
@endsection

@section('header')
<div class="row center">
	<h2>Contactez-nous !</h2>
	<p>MC3 Algérie fait tout pour être à l'écoute et au plus proche de vous</p>
</div>
@endsection

@section('content')

	<section class="section no-pad-top" id="section-contact">

		<div class="z-depth-1" id="mapContainer">
			 <div id="map"></div>
		</div>


		<div class="container">
			<div class="row">
				<div class="col m6 s12 z-depth-1 hoverable" id="contact-form">
					<h5>Restez en contact</h5>
					<p>Envoyez-nous votre message, requête ou commentaire.</p>
					{!! $errors->first('message', ' <div class="card-panel orange lighten-1"><span class="white-text">:message</span></div>') !!}
					<form action="#" method="post">
						<div class="input-field">
						 	<i class="material-icons prefix">email</i>
				         	<input id="email" type="email" class="validate">
				         	<label for="email">Email</label>
				        </div>
				        <div class="input-field">
							<i class="material-icons prefix">subject</i>
				        	<input id="subject" type="text" class="validate">
				        	<label for="subject">Sujet</label>
				        </div>
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
				<div class="col m6 s12">
						<h3>Informations</h3>
						<div class="divider"></div>
						<ul>
							<li><i class="material-icons prefix">email</i> 3dalgerie@mc3.fr</li>
							<li><i class="material-icons prefix">phone</i> 021 44 53 73</li>
							<li><i class="material-icons prefix">location_on</i> N°5 Lotissement Gigot - Les Vergers. BP70 BIS 16105. Birkhadem Cedex. Alger.</li>
						</ul>
						<img class="responsive-img" src="https://cdn.discordapp.com/attachments/194092101300912129/373480477702619136/contacy.png">
					</div>
			</div>
		</div>
	</section>

@endsection

@section('scripts')

	<script type="text/javascript">
		function initMap() {
	        // Create a map object and specify the DOM element for display.
	        var myLatLng = {lat:36.723156, lng: 3.05154};

	        var map = new google.maps.Map(document.getElementById('map'), {
	          center: myLatLng,
	          zoom: 12
	        });

	        var marker = new google.maps.Marker({
	          map: map,
	          position: myLatLng
	        });
    	}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJxWQIPOiN1AIGCG4-mp308Mv0hXQYcm0&callback=initMap"></script>
@endsection