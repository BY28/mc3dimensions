@extends('layouts.apps')

@section('styles')

<style type="text/css">
	#appContainer{
		height: 700px;
		overflow: hidden;
		position: relative;
	}
	#options{
		height: 80px;
	}

	#clipContainer{
		display: none;
	}

	/* Range
   ========================================================================== */

input[type=range] + .thumb {
  position: absolute;
  top: 10px;
  left: 0;
  border: none;
  height: 0;
  width: 0;
  border-radius: 50%;
  background-color: orange;
  margin-left: 7px;
  -webkit-transform-origin: 50% 50%;
          transform-origin: 50% 50%;
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
}

input[type=range] + .thumb .value {
  display: block;
  width: 30px;
  text-align: center;
  color: orange;
  font-size: 0;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
}

input[type=range]::-webkit-slider-runnable-track {
  height: 3px;
  background: #ffffff;
  border: none;
}

input[type=range]::-webkit-slider-thumb {
  -webkit-appearance: none;
  border: none;
  height: 14px;
  width: 14px;
  border-radius: 50%;
  background-color: orange;
  -webkit-transform-origin: 50% 50%;
          transform-origin: 50% 50%;
  margin: -5px 0 0 0;
  -webkit-transition: .3s;
  transition: .3s;
}

input[type=range]:focus::-webkit-slider-runnable-track {
  background: #ffffff;
}

input[type=range]::-moz-range-track {
  height: 3px;
  background: #ffffff;
  border: none;
}

input[type=range]::-moz-range-thumb {
  border: none;
  height: 14px;
  width: 14px;
  border-radius: 50%;
  background: orange;
  margin-top: -5px;
}

input[type=range]:focus::-moz-range-track {
  background: #ffffff;
}

input[type=range]::-ms-fill-lower {
  background: #ffffff;
}

input[type=range]::-ms-fill-upper {
  background: #ffffff;
}

input[type=range]::-ms-thumb {
  border: none;
  height: 14px;
  width: 14px;
  border-radius: 50%;
  background: orange;
}

input[type=range]:focus::-ms-fill-lower {
  background: #ffffff;
}

input[type=range]:focus::-ms-fill-upper {
  background: #ffffff;
}
	/* END Range
   ========================================================================== */

</style>
<link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/loader.css') }}">
@endsection

@section('content')

<section class="section">
	<div class="container">
		<div class="row">
			<div class="col s12" id="appWrapper">
				<div id="appContainer">
						<img src="https://cdn.discordapp.com/attachments/194092101300912129/375733781870673921/movezoom.png" class="responsive-img" style="position: absolute; top: 1%; left: 1%; width: 5%">
						<div id="loader" style="position: absolute; top: 25%; left: 38%; color: #ffffff; text-align: center; display: block">
							<h2>MC3 Viewer</h2>
							<p>Object Loading...</p>
							<div class="spinner">
							  <div class="bounce1"></div>
							  <div class="bounce2"></div>
							  <div class="bounce3"></div>
							</div>
						</div>
						<p class="range-field" id="clipContainer" style="position: absolute; bottom: 5%; right: 5%;">
					      <input type="range" id="constant" step="0.1" min="-100" max="100"/><a class="btn-floating waves-effect waves-light white tooltipped right" id="clip-close" data-position="right" data-delay="50" data-tooltip="Close"><i class="material-icons orange-text">close</i></a><a class="btn-floating waves-effect waves-light white tooltipped" id="clip-revert" data-position="right" data-delay="50" data-tooltip="Revert"><i class="material-icons orange-text">repeat</i></a>
					    </p>
				</div>
			</div>
			<div class="col s12 white z-depth-1 right-align" id="options">

				<a href="{{ URL::to('objects') }}" class="btn-floating btn-large waves-effect waves-light orange tooltipped left" data-position="bottom" data-delay="50" data-tooltip="Objects" style="top: 15%"><i class="material-icons">arrow_back</i></a>
				<!-- <a class="btn-floating btn-large waves-effect waves-light orange tooltipped" id="reset" data-position="bottom" data-delay="50" data-tooltip="Reset"><i class="material-icons">replay</i></a> -->
				<a class="btn-floating btn-large waves-effect waves-light orange tooltipped" id="rotate" data-position="bottom" data-delay="50" data-tooltip="Rotation"><i class="material-icons">3d_rotation</i></a>
				<a class="btn-floating btn-large waves-effect waves-light orange tooltipped" id="wireframe" data-position="bottom" data-delay="50" data-tooltip="Wireframe"><i class="material-icons">grid_on</i></a>
				<div class="fixed-action-btn vertical" style="position: relative; display: inline-block; right: 0%; top: 0%">
		            <a class="btn-floating btn-large orange tooltipped" data-position="bottom" data-delay="50" data-tooltip="Cut">
		              <i class="large material-icons">flip</i>
		            </a>
		            <ul>
		              <li><a class="btn-floating white" ><i class="material-icons orange-text tooltipped" id="clip-x" data-position="right" data-delay="50" data-tooltip="X axis">border_vertical</i></a></li>
		              <li><a class="btn-floating white" ><i class="material-icons orange-text tooltipped" id="clip-y" data-position="right" data-delay="50" data-tooltip="Y axis">border_horizontal</i></a></li>
		              <li><a class="btn-floating white" ><i class="material-icons orange-text tooltipped" id="clip-z" data-position="right" data-delay="50" data-tooltip="Z axis">border_outer</i></a></li>
		            </ul>
		        </div>
				<div class="fixed-action-btn vertical" style="position: relative; display: inline-block; right: 0%; top: 0%">
		            <a class="btn-floating btn-large orange tooltipped" data-position="bottom" data-delay="50" data-tooltip="View">
		              <i class="large material-icons">visibility</i>
		            </a>
		            <ul>
		              <li><a class="btn-floating white" ><i class="material-icons orange-text tooltipped" id="view-front" data-position="right" data-delay="50" data-tooltip="Front">border_all</i></a></li>
		              <li><a class="btn-floating white" ><i class="material-icons orange-text tooltipped" id="view-back" data-position="right" data-delay="50" data-tooltip="Back">border_inner</i></a></li>
		              <li><a class="btn-floating white" ><i class="material-icons orange-text tooltipped" id="view-right" data-position="right" data-delay="50" data-tooltip="Right">border_right</i></a></li>
		              <li><a class="btn-floating white" ><i class="material-icons orange-text tooltipped" id="view-left" data-position="right" data-delay="50" data-tooltip="Left">border_left</i></a></li>
		              <li><a class="btn-floating white" ><i class="material-icons orange-text tooltipped" id="view-top" data-position="right" data-delay="50" data-tooltip="Top">border_top</i></a></li>
		              <li><a class="btn-floating white" ><i class="material-icons orange-text tooltipped" id="view-bottom" data-position="right" data-delay="50" data-tooltip="Bottom">border_bottom</i></a></li>
		            </ul>
		        </div>
			</div>
		</div>
	</div>
</section>

@endsection

@section('scripts')

<script type="text/javascript" src="{{ URL::to('src/js/threejs/three.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('src/js/threejs/libs/STLLoader.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('src/js/threejs/libs/TrackballControls.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('src/js/createjs.min.js') }}"></script>
<script type="text/javascript">

/*
	_APP
*/

App = function(){
	this.scene, this.camera, this.renderer, this.container;
	this.controls;
}

/*
	_APP variables initialization
*/

App.prototype.initVariables = function()
{
	this.appWrapper = document.getElementById('appWrapper');
	this.WIDTH = this.appWrapper.offsetWidth;
	this.HEIGHT = this.appWrapper.offsetHeight;
	this.fieldOfView = 75;
	this.aspectRatio = this.WIDTH/this.HEIGHT;
	this.nearPlane = 0.1;
	this.farPlane = 10000;

	this.scene = new THREE.Scene();
	this.camera = new THREE.PerspectiveCamera(this.fieldOfView, this.aspectRatio, this.nearPlane, this.farPlane);
	this.renderer = new THREE.WebGLRenderer();
	this.container = document.getElementById('appContainer');

	this.camera.position.z = 15;
	this.renderer.shadowMap.enabled = true;
	this.renderer.setSize(this.WIDTH, this.HEIGHT);
	this.renderer.setPixelRatio(window.devicePixelRatio);
	this.container.appendChild(this.renderer.domElement);

	this.renderer.setClearColor(0x34495e);

	this.stage = new createjs.Stage("appTween");
 	createjs.Ticker.setFPS(60);
    createjs.Ticker.addEventListener("tick", this.stage);

	this.postprocessing();
	this.lights();
	this.events();
	this.createControls();
}

/*
	_APP functions
*/

	/* _RENDER */

App.prototype.render = function()
{
	this.renderer.render(this.scene, this.camera);
}

	/* _POSTPROCESSING */

App.prototype.postprocessing = function()
{

}

	/* _LIGHTS */

App.prototype.lights = function()
{
	this.ambientLight = new THREE.AmbientLight(0xffffff, 0.4);
	this.scene.add(this.ambientLight);

	this.directionalLight = new THREE.DirectionalLight(0xffffff, 0.6);
	this.directionalLight.position.set(0, 100, 150);
	this.directionalLight.lookAt(new THREE.Vector3( 0, 0, 0 ));
	this.directionalLight.castShadow = true;

	this.scene.add(this.directionalLight);
}

	/* _CONTROLS */

App.prototype.createControls = function()
{
	this.controls = new THREE.TrackballControls(this.camera, this.renderer.domElement);
}

App.prototype.updateControls = function()
{
	this.controls.update();
}


	/* _EVENTS */

App.prototype.handleWindowResize = function()
{
	this.WIDTH = this.appWrapper.offsetWidth;
	this.HEIGHT = this.appWrapper.offsetHeight;
	this.aspectRatio = this.WIDTH/this.HEIGHT;

	this.renderer.setSize(this.WIDTH, this.HEIGHT);
	this.camera.aspect = this.aspectRatio;
	this.camera.updateProjectionMatrix();
}

App.prototype.events = function()
{
	var _this = this;

	window.addEventListener('resize', function(){ _this.handleWindowResize(); });
}

window.addEventListener('load', init, false);

/*
	_OBJECTS
*/

MC3Object = function()
{
	this.mesh = new THREE.Object3D();
	this.object;
	this.material;
	this.box;
	this.localPlane = new THREE.Plane( new THREE.Vector3( 0, - 1, 0 ), 0.8 );
	//this.globalPlane = new THREE.Plane( new THREE.Vector3( - 1, 0, 0 ), 0.1 );

	this.loader = new THREE.STLLoader();
	this.loaded = false;
	this.rotate = false;
}

MC3Object.prototype.load = function(src)
{
	var _this = this;
	this.material = new THREE.MeshPhongMaterial({
		color: 0xecf0f1,
		specular: 0xecf0f1,
		shininess: 100,
		side: THREE.DoubleSide,
		clippingPlanes: [ this.localPlane ],
		clipShadows: true,
	});

					this.material.shading = THREE.SmoothShading
	this.loader.load( src, function ( geometry ) {
					_this.object = new THREE.Mesh( geometry, _this.material );
					_this.object.castShadow = true;
					_this.object.receiveShadow = true;
					_this.loaded = true;
					_this.box = new THREE.Box3().setFromObject( _this.object );
					_this.object.position.set( 0, 0, 0);
					_this.object.rotation.set( -90*Math.PI/180, 0, 0 );
					_this.object.geometry.mergeVertices();
	                _this.object.geometry.computeVertexNormals();
	                _this.box.getCenter( _this.object.position );
	                _this.mesh.add(_this.object);
				} );
}

/*
	_LOOP
*/

function loop()
{
	app.updateControls();
	if(mc3Object.loaded)
	{
		loader.style.display = 'none';
        //app.camera.position.set(0, mc3Object.box.min.y + ((mc3Object.box.getSize().y)/2), mc3Object.box.max.y+((mc3Object.box.getSize().y)/2));
        app.camera.position.set(mc3Object.object.position.x, mc3Object.object.position.y, mc3Object.object.position.z+mc3Object.box.getSize().y+mc3Object.box.getSize().x);
        mc3Object.object.rotation.set(-90*Math.PI/180, 0, 0);
        mc3Object.object.position.set(0, 0, 0);
		app.camera.lookAt(mc3Object.object.position);
		mc3Object.loaded = false;
	}


	if(mc3Object.rotate)
	{
		mc3Object.object.rotation.z += 0.005;
	}

	app.directionalLight.position.copy(new THREE.Vector3(app.camera.position.x, app.camera.position.y, app.camera.position.z));
	app.render();
	requestAnimationFrame(loop);
}

/*
	_INITIALIZATION
*/

var app;
var mc3Object;
function init()
{
	app = new App();
	app.initVariables();
	
	mc3Object = new MC3Object();
	app.scene.add(mc3Object.mesh);

	//var globalPlanes = [ mc3Object.globalPlane ],
	Empty = Object.freeze( [] );
	app.renderer.clippingPlanes = Empty; // GUI sets it to globalPlanes
	app.renderer.localClippingEnabled = false;

	mc3Object.load("{{ URL::to('src/assets/models') }}/" + "{{$object}}" +'.stl');

	loop();
}

var loader = document.getElementById('loader');

var constant = document.getElementById('constant');
constant.addEventListener("input", function() {
    mc3Object.object.material.clippingPlanes[0].constant = constant.value;
}, false);

var revert = document.getElementById('clip-revert');
revert.addEventListener("click", function(){
	mc3Object.object.material.clippingPlanes[0].normal.x = -mc3Object.object.material.clippingPlanes[0].normal.x;
	mc3Object.object.material.clippingPlanes[0].normal.y = -mc3Object.object.material.clippingPlanes[0].normal.y;
	mc3Object.object.material.clippingPlanes[0].normal.z = -mc3Object.object.material.clippingPlanes[0].normal.z; 
});

var wireframe = document.getElementById('wireframe');
wireframe.addEventListener("click", function() {
    mc3Object.object.material.wireframe = !mc3Object.object.material.wireframe;
}, false);

var rotate = document.getElementById('rotate');
rotate.addEventListener("click", function() {
	app.renderer.localClippingEnabled = false;
	clipContainer.style.display = "none";
    mc3Object.rotate = !mc3Object.rotate;
}, false);

var clipContainer = document.getElementById('clipContainer');

var clipClose = document.getElementById('clip-close');
clipClose.addEventListener("click", function() {
	app.renderer.localClippingEnabled = false;
	clipContainer.style.display = "none";
}, false);

var clipX = document.getElementById('clip-x');
clipX.addEventListener("click", function() {
	constant.max = Math.ceil(mc3Object.box.getSize().x);
	constant.min = Math.floor(-mc3Object.box.getSize().x);
    mc3Object.rotate = false;
	createjs.Tween.get(mc3Object.object.rotation, {override:true})
	        .to({x: -90*Math.PI/180, y: 0, z: 0}, 250);
	mc3Object.object.material.clippingPlanes[0].normal.set(-1, 0, 0);
	app.renderer.localClippingEnabled = true;
	clipContainer.style.display = "block";
}, false);

var clipY = document.getElementById('clip-y');
clipY.addEventListener("click", function() {
	constant.max = Math.ceil(mc3Object.box.getSize().z);
	constant.min = Math.floor(-mc3Object.box.getSize().z);
    mc3Object.rotate = false;
	createjs.Tween.get(mc3Object.object.rotation, {override:true})
	        .to({x: -90*Math.PI/180, y: 0, z: 0}, 250);
	mc3Object.object.material.clippingPlanes[0].normal.set(0, -1, 0);
	app.renderer.localClippingEnabled = true;
	clipContainer.style.display = "block";
}, false);

var clipZ = document.getElementById('clip-z');
clipZ.addEventListener("click", function() {
	constant.max = Math.ceil(mc3Object.box.getSize().y);
	constant.min = Math.floor(-mc3Object.box.getSize().y);
    mc3Object.rotate = false;
	createjs.Tween.get(mc3Object.object.rotation, {override:true})
	        .to({x: -90*Math.PI/180, y: 0, z: 0}, 250);
	mc3Object.object.material.clippingPlanes[0].normal.set(0, 0, -1);
	app.renderer.localClippingEnabled = true;
	clipContainer.style.display = "block";
}, false);

var viewTop = document.getElementById('view-top');
viewTop.addEventListener("click", function() {
	app.renderer.localClippingEnabled = false;
	clipContainer.style.display = "none";

	createjs.Tween.get(app.camera.position, {override:true})
	        .to({x: mc3Object.object.position.x, y: mc3Object.object.position.y, z: mc3Object.object.position.z+mc3Object.box.getSize().y+mc3Object.box.getSize().x}, 250);
	createjs.Tween.get(mc3Object.object.rotation, {override:true})
	        .to({x: 0, y: 0, z: 0}, 250);
	createjs.Tween.get(mc3Object.object.position, {override:true})
	        .to({x: 0, y: 0, z: 0}, 250);
	app.camera.lookAt(mc3Object.object.position);
}, false);

var viewBottom = document.getElementById('view-bottom');
viewBottom.addEventListener("click", function() {
	app.renderer.localClippingEnabled = false;
	clipContainer.style.display = "none";

	createjs.Tween.get(app.camera.position, {override:true})
	        .to({x: mc3Object.object.position.x, y: mc3Object.object.position.y, z: mc3Object.object.position.z+mc3Object.box.getSize().y+mc3Object.box.getSize().x}, 250);
	createjs.Tween.get(mc3Object.object.rotation, {override:true})
	        .to({x: 180*Math.PI/180, y: 0, z: 0}, 250);
	createjs.Tween.get(mc3Object.object.position, {override:true})
	        .to({x: 0, y: 0, z: 0}, 250);

	app.camera.lookAt(mc3Object.object.position);
}, false);

var viewFront = document.getElementById('view-front');
viewFront.addEventListener("click", function() {
	app.renderer.localClippingEnabled = false;
	clipContainer.style.display = "none";

	createjs.Tween.get(app.camera.position, {override:true})
	        .to({x: mc3Object.object.position.x, y: mc3Object.object.position.y, z: mc3Object.object.position.z+mc3Object.box.getSize().y+mc3Object.box.getSize().x}, 250);
	createjs.Tween.get(mc3Object.object.rotation, {override:true})
	        .to({x: -90*Math.PI/180, y: 0, z: 0}, 250);
	createjs.Tween.get(mc3Object.object.position, {override:true})
	        .to({x: 0, y: 0, z: 0}, 250);

	app.camera.lookAt(mc3Object.object.position);
}, false);

var viewBack = document.getElementById('view-back');
viewBack.addEventListener("click", function() {
	app.renderer.localClippingEnabled = false;
	clipContainer.style.display = "none";

	createjs.Tween.get(app.camera.position, {override:true})
	        .to({x: mc3Object.object.position.x, y: mc3Object.object.position.y, z: mc3Object.object.position.z+mc3Object.box.getSize().y+mc3Object.box.getSize().x}, 250);
	createjs.Tween.get(mc3Object.object.rotation, {override:true})
	        .to({x: -90*Math.PI/180, y: 0, z: 180*Math.PI/180}, 250);
	createjs.Tween.get(mc3Object.object.position, {override:true})
	        .to({x: 0, y: 0, z: 0}, 250);

	app.camera.lookAt(mc3Object.object.position);
}, false);

var viewRight = document.getElementById('view-right');
viewRight.addEventListener("click", function() {
	app.renderer.localClippingEnabled = false;
	clipContainer.style.display = "none";

	createjs.Tween.get(app.camera.position, {override:true})
	        .to({x: mc3Object.object.position.x, y: mc3Object.object.position.y, z: mc3Object.object.position.z+mc3Object.box.getSize().y+mc3Object.box.getSize().x}, 250);
	createjs.Tween.get(mc3Object.object.rotation, {override:true})
	        .to({x: -90*Math.PI/180, y: 0, z: -90*Math.PI/180}, 250);
	createjs.Tween.get(mc3Object.object.position, {override:true})
	        .to({x: 0, y: 0, z: 0}, 250);

	app.camera.lookAt(mc3Object.object.position);
}, false);

var viewLeft = document.getElementById('view-left');
viewLeft.addEventListener("click", function() {
	app.renderer.localClippingEnabled = false;
	clipContainer.style.display = "none";

	createjs.Tween.get(app.camera.position, {override:true})
	        .to({x: mc3Object.object.position.x, y: mc3Object.object.position.y, z: mc3Object.object.position.z+mc3Object.box.getSize().y+mc3Object.box.getSize().x}, 250);
	createjs.Tween.get(mc3Object.object.rotation, {override:true})
	        .to({x: -90*Math.PI/180, y: 0, z: 90*Math.PI/180}, 250);
	createjs.Tween.get(mc3Object.object.position, {override:true})
	        .to({x: 0, y: 0, z: 0}, 250);

	app.camera.lookAt(mc3Object.object.position);
}, false);




</script>

@endsection