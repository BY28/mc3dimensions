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
			          <img class="responsive-img" src="https://fb-s-d-a.akamaihd.net/h-ak-fbx/v/t45.5328-0/c17.0.540.540/p180x540/20627393_1295823477209860_6333164414526554112_n.jpg?oh=5b4e7cfcdeefed2eb1f26b451c64b508&oe=5A79F9B5&__gda__=1517118654_e2299ba8d2aacdd190018b8049bbeb6d">
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
			          <img class="responsive-img" src="https://fb-s-b-a.akamaihd.net/h-ak-fbx/v/t45.5328-0/c0.6.552.552/p552x414/20627329_1339637999418113_292918813991632896_n.jpg?oh=198dd1549f7a1ee22d3ae0a0df4fc2f2&oe=5AAF3780&__gda__=1521271689_c3f92d27c16b17594c0322f25ad2b366">
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
			          <img class="responsive-img" src="https://fb-s-c-a.akamaihd.net/h-ak-fbx/v/t45.5328-0/c41.0.540.540/p180x540/20504881_1499920073400696_320361520414326784_n.jpg?oh=147ee5ae78f250937866e8f1b4a074cb&oe=5A7B6EE8&__gda__=1517717225_b8c1d536443bca3ab7fe8ef5fb59c6f6">
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
			          <img class="responsive-img" src="https://fb-s-a-a.akamaihd.net/h-ak-fbx/v/t45.5328-0/c61.0.540.540/p180x540/20627278_1700648413281258_3652275553832009728_n.jpg?oh=3d23a37d224ad1288ef70648108280f6&oe=5AA93E5A&__gda__=1518081617_cedc3d94cb070cbba00afe5ff89569b1">
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
			          <img class="responsive-img" src="https://fb-s-a-a.akamaihd.net/h-ak-fbx/v/t45.5328-0/c5.0.540.540/p180x540/20627385_1875012565848728_6178600150840115200_n.jpg?oh=93047ce499a8af6f32df54e76983d566&oe=5A69E463&__gda__=1517328226_6d1e9e8d68429e929f6b02d9057d1ac3">
			          <a class="btn-floating halfway-fab waves-effect waves-light orange"><i class="material-icons">add_shopping_cart</i></a>
			        </div>
			        <div class="card-content">
			        	<span class="card-title truncate">Pack Form2 + 3DESIGN Software</span>
			          	<p>1560000 DA</p>
			        </div>
			      </div>
			    </div>
			    
			    <div class="col l3 m4 s12">
			      <div class="card hoverable">
			        <div class="card-image">
			          <img class="responsive-img" src="http://lorempicsum.com/nemo/400/400/1">
			          <a class="btn-floating halfway-fab waves-effect waves-light orange"><i class="material-icons">add_shopping_cart</i></a>
			        </div>
			        <div class="card-content">
			        	<span class="card-title truncate">Nom Produit</span>
			          <p>0000 DA</p>
			        </div>
			      </div>
			    </div>
			    
			    <div class="col l3 m4 s12">
			      <div class="card hoverable">
			        <div class="card-image">
			          <img class="responsive-img" src="http://lorempicsum.com/nemo/400/400/2">
			          <a class="btn-floating halfway-fab waves-effect waves-light orange"><i class="material-icons">add_shopping_cart</i></a>
			        </div>
			        <div class="card-content">
			        	<span class="card-title truncate">Nom Produit</span>
			          <p>0000 DA</p>
			        </div>
			      </div>
			    </div>
			    
			    <div class="col l3 m4 s12">
			      <div class="card hoverable">
			        <div class="card-image">
			          <img class="responsive-img" src="http://lorempicsum.com/nemo/400/400/3">
			          <a class="btn-floating halfway-fab waves-effect waves-light orange"><i class="material-icons">add_shopping_cart</i></a>
			        </div>
			        <div class="card-content">
			        	<span class="card-title truncate">Nom Produit</span>
			          <p>0000 DA</p>
			        </div>
			      </div>
			    </div>
			    
			    <div class="col l3 m4 s12">
			      <div class="card hoverable">
			        <div class="card-image">
			          <img class="responsive-img" src="http://lorempicsum.com/nemo/400/400/4">
			          <a class="btn-floating halfway-fab waves-effect waves-light orange"><i class="material-icons">add_shopping_cart</i></a>
			        </div>
			        <div class="card-content">
			        	<span class="card-title truncate">Nom Produit</span>
			          <p>0000 DA</p>
			        </div>
			      </div>
			    </div>
			    
			    <div class="col l3 m4 s12">
			      <div class="card hoverable">
			        <div class="card-image">
			          <img class="responsive-img" src="http://lorempicsum.com/nemo/400/400/5">
			          <a class="btn-floating halfway-fab waves-effect waves-light orange"><i class="material-icons">add_shopping_cart</i></a>
			        </div>
			        <div class="card-content">
			        	<span class="card-title truncate">Nom Produit</span>
			          <p>0000 DA</p>
			        </div>
			      </div>
			    </div>
			    
			    <div class="col l3 m4 s12">
			      <div class="card hoverable">
			        <div class="card-image">
			          <img class="responsive-img" src="http://lorempicsum.com/nemo/400/400/6">
			          <a class="btn-floating halfway-fab waves-effect waves-light orange"><i class="material-icons">add_shopping_cart</i></a>
			        </div>
			        <div class="card-content">
			        	<span class="card-title truncate">Nom Produit</span>
			          <p>0000 DA</p>
			        </div>
			      </div>
			    </div>
			    
			    <div class="col l3 m4 s12">
			      <div class="card hoverable">
			        <div class="card-image">
			          <img class="responsive-img" src="http://lorempicsum.com/nemo/400/400/7">
			          <a class="btn-floating halfway-fab waves-effect waves-light orange"><i class="material-icons">add_shopping_cart</i></a>
			        </div>
			        <div class="card-content">
			        	<span class="card-title truncate">Nom Produit</span>
			          <p>0000 DA</p>
			        </div>
			      </div>
			    </div>
			    
			    <div class="col l3 m4 s12">
			      <div class="card hoverable">
			        <div class="card-image">
			          <img class="responsive-img" src="http://lorempicsum.com/nemo/400/400/8">
			          <a class="btn-floating halfway-fab waves-effect waves-light orange"><i class="material-icons">add_shopping_cart</i></a>
			        </div>
			        <div class="card-content">
			        	<span class="card-title truncate">Nom Produit</span>
			          <p>0000 DA</p>
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