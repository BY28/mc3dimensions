@extends('layouts.apps')

@section('title')
Impression 3D | MC3
@endsection

@section('content')
	
	<section class="section" id="section-print">
		<div class="container">
			<div class="row">
				<div class="col m7 s12 left">
					<div class="row">

						<div class="col s11 z-depth-1" id="print-object">
							<div id="webglContainer"></div>
						</div>
					</div>

					<div class="row">
						<div class="col s11" id="object-options">
							<a class="btn-floating right waves-effect waves-light orange" id="object-rotation"><i class="material-icons">3d_rotation</i></a>
						</div>
					</div>
						
				</div>
				<div class="col m5 s12 z-depth-1" id="parameters-form">
					<h4>Paramètres</h4>
					<form>
						<div class="input-field">
						   <select>
						     <option value="" disabled selected>Imprimante</option>
						     <option value="1">Formlabs</option>
						     <option value="2">Cube Pro</option>
						   </select>
						   <label>Machine</label>
						</div>

						<div class="input-field">
						   <select>
						     <option value="" disabled selected>Matériau</option>
						     <option value="1">Formlabs</option>
						     <option value="2">Cube Pro</option>
						   </select>
						   <label>Matière</label>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

@endsection

@section('scripts')

<script type="text/javascript" src="{{ URL::to('src/js/threejs/three.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('src/js/threejs/libs/STLLoader.js') }}"></script>

<script type="text/javascript">
	$(document).ready(function() {
	    	$('select').material_select();
	  	});

	/* _APP */

	App = function(){
		this.scene, this.camera, this.renderer, this.container, this.objectContainer;
	}

	/* _VARIABLES */

	App.prototype.initVariables = function()
	{
		this.objectContainer = document.getElementById('print-object')
		this.WIDTH = this.objectContainer.offsetWidth;
		this.HEIGHT = this.objectContainer.offsetHeight;
		this.fieldOfView = 75;
		this.aspectRatio = this.WIDTH/this.HEIGHT;
		this.nearPlane = 0.1;
		this.farPlane = 10000;

		this.scene = new THREE.Scene();
		this.camera = new THREE.PerspectiveCamera(this.fieldOfView, this.aspectRatio, this.nearPlane, this.farPlane);
		this.renderer = new THREE.WebGLRenderer();
		this.container = document.getElementById('webglContainer');

		this.camera.position.set(0, 0, 150);
		this.renderer.shadowMap.enabled = true;
		this.renderer.setSize(this.WIDTH, this.HEIGHT);
		this.renderer.setPixelRatio(window.devicePixelRatio);
		this.container.appendChild(this.renderer.domElement);

		this.renderer.setClearColor(0xffffff);

		this.lights();
		this.events();

		/* OPTIONS */
		this.rotate = true;
	}

	/* FUNCTIONS */

	App.prototype.render = function()
	{
		this.renderer.render(this.scene, this.camera);
	}

	/* _LIGHTS */

	App.prototype.lights = function()
	{
		this.ambientLight = new THREE.AmbientLight(0xffffff);
		this.scene.add(this.ambientLight);
	}

	/* _ADD OBJECT */

	App.prototype.addObject = function()
	{
		this.mc3Object = new MC3Object();
		this.mc3Object.mesh.position.set(0, 0, 0);
		this.mc3Object.load(this.camera);
		this.scene.add(this.mc3Object.mesh);

	}

	App.prototype.createObject = function()
	{
		this.addObject();
	}

	App.prototype.update = function()
	{
		if(this.rotate)
		{
			this.mc3Object.rotate();
		}
	}

	/* EVENTS */

	App.prototype.handleWindowResize = function()
	{
		this.WIDTH = this.objectContainer.offsetWidth;
		this.HEIGHT = this.objectContainer.offsetHeight;
		this.aspectRatio = this.WIDTH/this.HEIGHT;

		this.renderer.setSize(this.WIDTH, this.HEIGHT);
		this.camera.aspect = this.aspectRatio;
		this.camera.updateProjectionMatrix();
	}

	App.prototype.handleRotationClick = function()
	{
		this.rotate = !this.rotate;
	}

	App.prototype.events = function()
	{
		var _this = this;
		window.addEventListener('resize', function(){ _this.handleWindowResize(); });

		var objectRotation = document.getElementById('object-rotation');
		objectRotation.addEventListener('click', function(){ _this.handleRotationClick(); });
	}

	/* _GLOBAL EVENTS */

	window.addEventListener('load', init, false);

	/* _OBJECT */

	MC3Object = function()
	{
		this.mesh = new THREE.Object3D();
		this.object = null;
		this.loader = new THREE.STLLoader();
		this.src = "ring.stl";
	}

	MC3Object.prototype.load = function(camera)
	{
		

		var _this = this;

		this.loader.load("{{ URL::to('src/assets/models') }}/" + this.src, function (geometry) {
			var material =  new THREE.MeshNormalMaterial({side: THREE.DoubleSide});
            var mesh = new THREE.Mesh(geometry, material);
            mesh.position.set(0, 0, 0);
            mesh.rotation.x = -45*Math.PI/2;
            var box = new THREE.Box3().setFromObject( mesh );
            /*camera.position.set(0, box.min.y + ((box.getSize().y)/2), box.max.z+box.getSize().z);*/
            camera.position.set(0, box.min.y + ((box.getSize().y)/2), box.max.y+((box.getSize().y)/2));
            _this.mesh.add(mesh);
        });
	}

	MC3Object.prototype.rotate = function()
	{
		this.mesh.rotation.y += 0.005;
	}

	/* _LOOP */

	function loop()
	{
		app.update();
		app.render();
		requestAnimationFrame(loop);
	}

	/* _INITIALIZATION */
	var app;

	function init()
	{
		app = new App();

		app.initVariables();
		app.createObject();

		loop();
	}

</script>
@endsection