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