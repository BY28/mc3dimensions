@extends('layouts.pages')

@section('header')
	<h1>Choisissez votre formation</h1>
	<h4>Formation 3D professionnelle</h4>
	<div class="row banner-text">
		<div class="col s6 offset-s3">
			<p>Recevez une formation de qualité donné par nos ingénieurs expérimentés</p>	
		</div>
	</div>
@endsection

@section('content')
	<section class="section" id="formations">
		
		<div class="container">
			<h1>Nos formations</h1>
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
		</div>
	
	</section>

@endsection