@extends('layouts.pages')

@section('title')
Formations | MC3
@endsection

@section('header')
<div class="row center"  style="margin-top: 4%">
	<div class="col s6 offset-s3" style="padding: 10%; background-color: rgba(255, 255, 255, 0.8);">
		<h3>Formation 3D</h3>
		<p>Recevez une formation de qualité donné par nos ingénieurs expérimentés</p>	
	</div>
</div>
@endsection

@section('content')
	<section class="section" id="formations">
		
		<div class="container">
				<h2>Nos formations</h2>
				 <div class="row">
    <div class="col s12 m4">
      <div class="card sticky-action">
        <div class="card-image waves-effect waves-block waves-ligh">
          <img src="{{ URL::to('src/img/illustrations/3design_formation.png') }}" class="activator">
          <!-- <a class="btn-floating halfway-fab waves-effect waves-light orange"><i class="material-icons">add</i></a> -->
        </div>
        <div class="card-content">
          <span class="card-title activator truncate">3DESIGN</span>
          <!-- <p class="truncate">I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p> -->
        </div>
      	<div class="card-reveal">
      		<span class="card-title grey-text text-darken-4">3DESIGN<i class="material-icons right">close</i></span>
      		<p>Logiciel de conception de bijoux</p>
    	</div>
      	<div class="card-action">
      		<a href="#">Inscription</a>
      	</div>
      </div>
    </div>
    <div class="col s12 m4">
      <div class="card sticky-action">
        <div class="card-image waves-effect waves-block waves-ligh">
          <img src="{{ URL::to('src/img/illustrations/solidworks_formation.png') }}" class="activator">
          <!-- <a class="btn-floating halfway-fab waves-effect waves-light orange"><i class="material-icons">add</i></a> -->
        </div>
        <div class="card-content">
          <span class="card-title activator truncate">SOLIDWORKS</span>
          <!-- <p class="truncate">I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p> -->
        </div>
      	<div class="card-reveal">
      		<span class="card-title grey-text text-darken-4">SOLIDWORKS<i class="material-icons right">close</i></span>
      		<p>Logiciel de conception CAO</p>
    	</div>
      	<div class="card-action">
      		<a href="#">Inscription</a>
      	</div>
      </div>
    </div>
    <div class="col s12 m4">
      <div class="card sticky-action">
        <div class="card-image waves-effect waves-block waves-ligh">
          <img src="{{ URL::to('src/img/illustrations/java_formation.png') }}" class="activator">
          <!-- <a class="btn-floating halfway-fab waves-effect waves-light orange"><i class="material-icons">add</i></a> -->
        </div>
        <div class="card-content">
          <span class="card-title activator truncate">JAVA</span>
          <!-- <p class="truncate">I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p> -->
        </div>
      	<div class="card-reveal">
      		<span class="card-title grey-text text-darken-4">JAVA<i class="material-icons right">close</i></span>
      		<p>Langage de programmation</p>
    	</div>
      	<div class="card-action">
      		<a href="#">Inscription</a>
      	</div>
      </div>
    </div>
  </div>
		<!--
			<div class="row center">		
				<ul class="formations-caption">
					<li>
						<a href="{{ URL::to('formations/3design') }}">
							<img src="https://cdn.discordapp.com/attachments/194092101300912129/370989342358896641/ss.png" class="responsive-img center">
							<div class="caption">
								<div class="caption-text">
									<h1>3DESIGN</h1>
									<p>Logiciel de conception de bijoux</p>
								</div>
							</div>
						</a>
					</li>
					<li>
						<a href="{{ URL::to('formations/3design') }}">
							<img src="http://www.techno-midiazot.re/wp-content/uploads/2017/07/solidworks-3d-cad-web-image.png" class="responsive-img center">
							<div class="caption">
								<div class="caption-text">
									<h1>SolidWorks</h1>
									<p>Logiciel de conception CAO</p>
								</div>
							</div>
						</a>
					</li>
				</ul>
			</div>
		-->
		</div>
	
	</section>

@endsection