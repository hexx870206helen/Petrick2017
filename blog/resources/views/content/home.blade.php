@extends('layout.base')

@section('title')

Helen

@endsection

@section('product-name')

hahahah

@endsection

@section('content')

<div class="content_wrapper">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  		<!-- Indicators -->
		<ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<!-- Wrapper for slides -->
		<div class="carousel-inner">
		    <div class="item active">
		        <img src="{{URL::asset('image/banner-1.jpg')}}" alt="brisbane">
		    </div>
		    <div class="item">
		        <img src="{{URL::asset('image/banner-2.jpg')}}" alt="brisbane">
		    </div>
		    <div class="item">
		        <img src="{{URL::asset('image/banner-3.jpg')}}" alt="brisbane">
		    </div>
		</div>
		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left"></span>
		      <span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right"></span>
		      <span class="sr-only">Next</span>
		</a>
	</div>
	<div class="body">
		<div class="body-one">
			<div class="body-title">
			<h5> </h5><h2>Life in Australia</h2><h5> </h5>
			</div>
			<div class="body-content col-sm-12">
				<div class="col-sm-4">
					<div class="col-sm-12 content-item">
						<div class="content-title">
							<h2>My profile</h2>
						</div>
					</div>	
				</div>
				<div class="col-sm-4">
					<div class="col-sm-12 form-group">
						<form method="get" action="add-user">
							<label for="usr">Name:</label>
	  						<input type="text" class="form-control" id="usr" name="user_name">
  						</form>
					</div>
				</div>
			</div>
			<div class="body-content col-sm-12">
				<div class="col-sm-4">
					<div class="col-sm-12 content-item">
						<div class="content-title">
							<h2>Studying</h2>
						</div>
						<div class="thumbnail">
							<a href="#">
								<img src="{{URL::asset('image/studying.jpg')}}" alt="">
							</a>
						</div>
					</div>	
				</div>
				<div class="col-sm-4">
					<div class="col-sm-12 content-item">
						<div class="content-title">
							<h2>Working</h2>
						</div>
						<div class="thumbnail">
							<a href="#">
								<img src="{{URL::asset('image/working.jpg')}}" alt="">
							</a>
						</div>
					</div>	
				</div>
				<div class="col-sm-4">
					<div class="col-sm-12 content-item">
						<div class="content-title">
							<h2>Travelling</h2>
						</div>
						<div class="thumbnail">
							<a href="#">
								<img src="{{URL::asset('image/travelling.jpg')}}" alt="">
							</a>
						</div>
					</div>	
				</div>
			</div>
		</div>		
	</div>	
</div>
@endsection

@section('last-updated')

Last updated: 05 July 2017

@endsection
