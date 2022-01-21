@extends('master')

@section('title','Search')

@section('body')

		<div class="result" style="padding-top:150px;">

			@foreach($movies as $movie)
							<div class="col-lg-12 text-center">
								<!-- <div class="single-portfolio"> -->
									<div class="single-portfolio-img">
										<img src="{{$movie->image}}" alt="portfolio" />
										<a href="{{$movie->video}}" class="popup-youtube">
											<i class="icofont icofont-ui-play"></i>
										</a>
									</div>
									<div class="portfolio-content">
										<h2 class="text-center">{{$movie->name}}</h2>
										<div class="review text-center">
											
											<h4>{{$movie->rating}}</h4>
										</div>
									</div> 
								</div>
			@endforeach

		</div
	
	@endsection