@extends('layouts.apps')

@section('title')
Boutique | MC3
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
				     <option value="1">Software</option>
				     <option value="2">Hardware</option>
				   </select>
				   <label>Type</label>
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
			        <div class="card-image">
			          <img class="responsive-img" src="{{ URL::to('src/img/illustrations/product_form2.jpg') }}">
			          <a class="btn-floating halfway-fab waves-effect waves-light orange"><i class="material-icons">add_shopping_cart</i></a>
			        </div>
			        <div class="card-content">
			        	<span class="card-title truncate">Form2 3D Printer</span>
			          <p>960000 DA</p>
			        </div>
			      </div>
			    </div>
			    
			    <div class="col l3 m4 s12">
			      <div class="card hoverable">
			        <div class="card-image">
			          <img class="responsive-img" src="{{ URL::to('src/img/illustrations/product_3design.jpg') }}">
			          <a class="btn-floating halfway-fab waves-effect waves-light orange"><i class="material-icons">add_shopping_cart</i></a>
			        </div>
			        <div class="card-content">
			        	<span class="card-title truncate">3DESIGN Software (Formation incluse)</span>
			          <p>750000 DA</p>
			        </div>
			      </div>
			    </div>
			    
			    <div class="col l3 m4 s12">
			      <div class="card hoverable">
			        <div class="card-image">
			          <img class="responsive-img" src="{{ URL::to('src/img/illustrations/product_scanner.jpg') }}">
			          <a class="btn-floating halfway-fab waves-effect waves-light orange"><i class="material-icons">add_shopping_cart</i></a>
			        </div>
			        <div class="card-content">
			        	<span class="card-title truncate">Sense Scanner 3D</span>
			          <p>81000 DA</p>
			        </div>
			      </div>
			    </div>
			    
			    <div class="col l3 m4 s12">
			      <div class="card hoverable">
			        <div class="card-image">
			          <img class="responsive-img" src="{{ URL::to('src/img/illustrations/product_cubepro.jpg') }}">
			          <a class="btn-floating halfway-fab waves-effect waves-light orange"><i class="material-icons">add_shopping_cart</i></a>
			        </div>
			        <div class="card-content">
			        	<span class="card-title truncate">CubePro Duo 3D Printer</span>
			          <p>480000 DA</p>
			        </div>
			      </div>
			    </div>

			    <div class="col l3 m4 s12">
			      <div class="card hoverable">
			        <div class="card-image">
			          <img class="responsive-img" src="{{ URL::to('src/img/illustrations/product_pack.jpg') }}">
			          <a class="btn-floating halfway-fab waves-effect waves-light orange"><i class="material-icons">add_shopping_cart</i></a>
			        </div>
			        <div class="card-content">
			        	<span class="card-title truncate">Pack Form2 + 3DESIGN Software</span>
			          	<p>1560000 DA</p>
			        </div>
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