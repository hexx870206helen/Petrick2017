@extends('layout.base')

@section('title')

Helen

@endsection

@section('product-name')

hahahah

@endsection

@section('content')
	<div class="body container-fluid">
		<div class="body-one col-sm-10">
			<div class="col-sm-6 content-item">
				<span class="profile_pic"><img width="50" height ="50" class="img-circle" src="{{URL::asset('image/photo.jpg')}}" alt="profile_pic"></span>
				<h2 class="content-title">Hi, I am Helen...</h2>
				<p>I am a junior web developer/designer based in Brisbane, Australia. I have a passion for web design and love to create for web and mobile devices.</p>
			</div>			
		</div>
		<div class="body-two col-sm-10">
			<ul class="timeline">
				<li>
					<div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title">Studying in China</h4>
							<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i></small>2009-2011</p>
						</div>
						<div class="tiemline-body">
							<p>Studying in JiLin university</p>
						</div>
					</div>
				</li>
				<li class="timeline-inverted">
					<div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title">Working in China</h4>
							<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i></small>20011-2014</p>
						</div>
						<div class="tiemline-body">
							<p>Working in China Mobile Company</p>
						</div>
					</div>
				</li>
				<li>
					<div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title">Studying in Australia</h4>
							<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i></small>2014-2016</p>
						</div>
						<div class="tiemline-body">
							<p>Studying in Queensland University</p>
						</div>
					</div>
				</li>
				<li class="timeline-inverted">
					<div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title">Working in China</h4>
							<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i></small>20016-2017</p>
						</div>
						<div class="tiemline-body">
							<p>Working in DSITI</p>
						</div>
					</div>
				</li>
			</ul>	
		</div>
	</div>		
</div>
@endsection

@section('last-updated')

Last updated: 05 July 2017

@endsection
