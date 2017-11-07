@extends('layouts.apps')

@section('title')
3D bjects | MC3
@endsection

@section('content')

	<section class="section" id="shop-search">
		<div class="container">
			<form class="row center z-depth-1">
				<div class="input-field col s6">
		          <i class="material-icons prefix">search</i>
		          <input type="text" id="autocomplete-input" class="autocomplete">
		          <label for="autocomplete-input">Recherche</label>
		        </div>
		        <div class="input-field col s2">
				   <select>
				     <option value="" disabled selected>Filtrer</option>
				     <option value="1">Bijouterie</option>
				     <option value="2">Medical</option>
				   </select>
				   <label>Catégorie</label>
				</div>
				<div class="input-field col s2">
				   <select>
				     <option value="" disabled selected>Trier par</option>
				     <option value="1">Prix croissant</option>
				     <option value="2">Prix décroissant</option>
				     <option value="3">Les plus demandés</option>
				   </select>
				   <label>Tri</label>
				</div>
		        <div class="input-field col s2">
		        	<button class="waves-effect waves-light btn orange">Rechercher</button>
		        </div>
			</form>
		</div>
	</section>

	<section class="section" id="section-products">

		<div class="container">
			
			<div class="row">
			    
			    <div class="col l3 m4 s12">
			      <div class="card hoverable">
			      	<a href="{{ URL::to('objects/ring') }}" style="color: #34495e">
			        <div class="card-image waves-effect waves-block waves-light">
			          <img class="responsive-img activator" src="{{ URL::to('src/assets/img/ring.PNG') }}">
			        </div>
			        <div class="card-content">
			        	<span class="card-title truncate">Ring</span>
			          <p>.STL</p>
			        </div>
			        </a>
			      </div>
			    </div>
			    
			    <div class="col l3 m4 s12">
			      <div class="card hoverable">
			      	<a href="{{ URL::to('objects/skull') }}" style="color: #34495e">
			        <div class="card-image waves-effect waves-block waves-light">
			          <img class="responsive-img activator" src="{{ URL::to('src/assets/img/skull.PNG') }}">
			        </div>
			        <div class="card-content">
			        	<span class="card-title truncate">Skull</span>
			          <p>.STL</p>
			        </div>
			        </a>
			      </div>
			    </div>
			 
			 </div>
		</div>
		
	</section>

@endsection

@section('scripts')

	<script type="text/javascript">
		
		$(document).ready(function() {
	    	$('select').material_select();
	  	});
            
	</script>

@endsection