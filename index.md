@extends('master')
@section('title','Home Page')
@section('body')
		<!-- hero area start -->
		<section class="hero-area" id="home">
			<div class="container">
				<div class="hero-area-slider">
					 @foreach($types as $type)
					 @foreach($type->movies as $movie)
					<div class="row hero-area-slide">
						<div class="col-lg-6 col-md-5">
							<img  class="hero-area-content"
								 src="{{$movie->image}}" alt="Joker"> 
						</div>
						
						
						<div class="col-lg-6 col-md-7">
							<div class="hero-area-content pr-50">
								
								<h2>{{$movie->name}}</h2>
							
								<div class="review">
									<div class="author-review">
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
									</div>
									<h4>{{$movie->rating}}</h4>
								</div>
								<h4 style="font-size: bold">{{$type->name}}</h4>
								<br>
								<br><br>
								<p>{{$movie->discreption}}</p>

								<br>
								
								<p>Duration: {{$movie->duration}}</p>
								
									

												<h3>Cast:</h3>
							
								<div class="slide-cast">
									<div class="single-slide-cast">
										<img src="{{$actor1->image}}" alt="about"/> {{$actor1->name}}
									</div>

									<div class="single-slide-cast">
										<img src="{{$actor2->image}}" alt="about"/>{{$actor2->name}}
									</div>
									<div class="single-slide-cast">
										<img src="{{$actor3->image}}" alt="about"/> {{$actor3->name}}

									</div>
									<div class="single-slide-cast">
										<img src="{{$actor4->image}}" alt="about"/>{{$actor4->name}}

									</div>
									<div class="single-slide-cast text-center">
										5+
									</div>
								</div>
						
								<div class="slide-trailor">
								
									<a class="theme-btn theme-btn2"
										href="{{$movie->promotion}}"><i class="icofont icofont-play" >&nbsp;</i>Watch Trailer</a> 
										 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a class="theme-btn theme-btn2" 
										href="{{$movie->video}}"><i class="icofont icofont-ui-play"></i> Playing Now</a>
								</div>
									
							</div>
						</div>
					</div>
<!-- 					<div class="row hero-area-slide">
						<div class="col-lg-6 col-md-5">
							<div class="hero-area-content">
								<img src="{{$twomovie->image}}" alt="about" />
							</div>
						</div>
						<div class="col-lg-6 col-md-7">
							<div class="hero-area-content pr-50">
								<h2>{{$twomovie->name}}</h2>
								<div class="review">
									<div class="author-review">
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										
									</div>
									<h4>{{$twomovie->rating}}</h4>
								</div>
								<p>{{$twomovie->discreption}}</p>
								<p>Duration: {{$twomovie->duration}}</p>								
								<h3>Cast:</h3>
								<div class="slide-cast">
									<div class="single-slide-cast">
										<img src="{{$actor5->image}}" alt="about" />{{$actor5->name}}
									</div>
									<div class="single-slide-cast">
										<img src="{{$actor6->image}}" alt="about" />{{$actor6->name}}
									</div>
									<div class="single-slide-cast">
										<img src="{{$actor7->image}}" alt="about" />{{$actor7->name}}
									</div>
									<div class="single-slide-cast">
										<img src="{{$actor8->image}}" alt="about" />{{$actor8->name}}
									</div>
									
									<div class="single-slide-cast text-center">
										5+
									</div>
								</div>
								<div class="slide-trailor">
									<a class="theme-btn theme-btn2"
										href="{{$twomovie->promotion}}"><i class="icofont icofont-play" >&nbsp;</i>Watch Trailer</a> 
										 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a class="theme-btn theme-btn2" 
										href="{{$twomovie->video}}"><i class="icofont icofont-ui-play"></i> Playing Now</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row hero-area-slide">
						<div class="col-lg-6 col-md-5">
							<div class="hero-area-content">
								<img src="{{$threemovie->image}}" alt="about" />
							</div>
						</div>
						<div class="col-lg-6 col-md-7">
							<div class="hero-area-content pr-50">
								<h2>{{$threemovie->name}}</h2>
								<div class="review">
									<div class="author-review">
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
									</div>
									<h4>{{$threemovie->rating}}</h4>
								</div>
								<p>{{$threemovie->discreption}}</p>
								<p>Duration: {{$threemovie->duration}}</p>
								<h3 >Cast:</h3>
								<div class="slide-cast">
									<div class="single-slide-cast">
										<img src="{{$actor9->image}}" alt="about" />{{$actor9->name}}
									</div>
									<div class="single-slide-cast">
										<img src="{{$actor10->image}}" alt="about" />{{$actor10->name}}
									</div>
									<div class="single-slide-cast">
										<img src="{{$actor11->image}}" alt="about" />{{$actor11->name}}
									</div>
									<div class="single-slide-cast">
										<img src="{{$actor12->image}}" alt="about" />{{$actor12->name}}
									</div>
									
									<div class="single-slide-cast text-center">
										5+
									</div>
								</div>
								<div class="slide-trailor">
									<a class="theme-btn theme-btn2"
										href="{{$threemovie->promotion}}"><i class="icofont icofont-play" >&nbsp;</i>Watch Trailer</a> 
										 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a class="theme-btn theme-btn2" 
										href="{{$threemovie->video}}"><i class="icofont icofont-ui-play"></i> Playing Now</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row hero-area-slide">
						<div class="col-lg-6 col-md-5">
							<div class="hero-area-content">
								<img src="{{$fourmovie->image}}" alt="about" />
							</div>
						</div>
						<div class="col-lg-6 col-md-7">
							<div class="hero-area-content pr-50">
								<h2>{{$fourmovie->name}}</h2>
								<div class="review">
									<div class="author-review">
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
									</div>
									<h4>{{$fourmovie->rating}}</h4>
								</div>
								<p>{{$fourmovie->discreption}}</p>
								<p>Duration: {{$fourmovie->duration}}</p>
								<h3 >Cast:</h3>
								<div class="slide-cast">
									<div class="single-slide-cast">
										<img src="{{$actor13->image}}" alt="about" />{{$actor13->name}}
									</div>
									<div class="single-slide-cast">
										<img src="{{$actor14->image}}" alt="about" />{{$actor14->name}}
									</div>
									<div class="single-slide-cast">
										<img src="{{$actor15->image}}" alt="about" />{{$actor15->name}}
									</div>
									<div class="single-slide-cast">
										<img src="{{$actor16->image}}" alt="about" />{{$actor16->name}}
									</div>
									
									<div class="single-slide-cast text-center">
										5+
									</div>
								</div>
								<div class="slide-trailor">
									<a class="theme-btn theme-btn2"
										href="{{$fourmovie->promotion}}"><i class="icofont icofont-play" >&nbsp;</i>Watch Trailer</a> 
										 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a class="theme-btn theme-btn2" 
										href="{{$fourmovie->video}}"><i class="icofont icofont-ui-play"></i> Playing Now</a>
								</div>
							</div>
						</div>
					</div>

					<div class="row hero-area-slide">
						<div class="col-lg-6 col-md-5">
							<div class="hero-area-content">
								<img src="{{$fivemovie->image}}" alt="about" />
							</div>
						</div>
						<div class="col-lg-6 col-md-7">
							<div class="hero-area-content pr-50">
								<h2>{{$fivemovie->name}}</h2>
								<div class="review">
									<div class="author-review">
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
									</div>
									<h4>{{$fivemovie->rating}}</h4>
								</div>
								<p>{{$fivemovie->discreption}}</p>
								<p>Duration: {{$fivemovie->duration}}</p>
								<h3 >Cast:</h3>
								<div class="slide-cast">
									<div class="single-slide-cast">
										<img src="{{$actor17->image}}" alt="about" />{{$actor17->name}}
									</div>
									<div class="single-slide-cast">
										<img src="{{$actor18->image}}" alt="about" />{{$actor18->name}}
									</div>
									<div class="single-slide-cast">
										<img src="{{$actor19->image}}" alt="about" />{{$actor19->name}}
									</div>
									<div class="single-slide-cast">
										<img src="{{$actor20->image}}" alt="about" />{{$actor20->name}}
									</div>
									
									<div class="single-slide-cast text-center">
										5+
									</div>
								</div>
								<div class="slide-trailor">
									<a class="theme-btn theme-btn2"
										href="{{$fivemovie->promotion}}"><i class="icofont icofont-play" >&nbsp;</i>Watch Trailer</a> 
										 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a class="theme-btn theme-btn2" 
										href="{{$fivemovie->video}}"><i class="icofont icofont-ui-play"></i> Playing Now</a>
								</div>
							</div>
						</div>
					</div>
-->
	@endforeach
	@endforeach
				</div> 
				<div class="hero-area-thumb">
					<div class="thumb-prev">
						<div class="row hero-area-slide">
							<div class="col-lg-6">
								<div class="hero-area-content">
									<img src="{{$fivemovie->image}}" alt="about" />
								</div>
							</div>
							<div class="col-lg-6">
								<div class="hero-area-content pr-50">
									<h2>$fivemovie->name</h2>
									<div class="review">
										<div class="author-review">
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
										</div>
										<h4>$fivemovie->rating</h4>
									</div>
								<p>{{$fivemovie->discreption}}</p>
								<p>Duration: {{$fivemovie->duration}}</p>
									<h3>Cast:</h3>
								<div class="slide-cast">
									<div class="single-slide-cast">
										<img src="{{$actor17->image}}" alt="about" />{{$actor17->name}}
									</div>
									<div class="single-slide-cast">
										<img src="{{$actor18->image}}" alt="about" />{{$actor18->name}}
									</div>
									<div class="single-slide-cast">
										<img src="{{$actor19->image}}" alt="about" />{{$actor19->name}}
									</div>
									<div class="single-slide-cast">
										<img src="{{$actor20->image}}" alt="about" />{{$actor20->name}}
									</div>
										<div class="single-slide-cast text-center">
											5+
										</div>
									</div>
									<div class="slide-trailor">
									<a class="theme-btn theme-btn2"
										href="{{$fivemovie->promotion}}"><i class="icofont icofont-play" >&nbsp;</i>Watch Trailer</a> 
										 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a class="theme-btn theme-btn2" 
										href="{{$fivemovie->video}}"><i class="icofont icofont-ui-play"></i> Playing Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="thumb-next">
						<div class="row hero-area-slide">
							<div class="col-lg-6">
								<div class="hero-area-content">
									<img src="{{$twomovie->image}}" alt="about" />
								</div>
							</div>
							<div class="col-lg-6">
								<div class="hero-area-content pr-50">
									<h2>{{$twomovie->name}}</h2>
									<div class="review">
										<div class="author-review">
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											
										</div>
										<h4>{{$twomovie->rating}}</h4>
									</div>
									<p>{{$twomovie->discreption}}</p>
									<p>Duration: {{$twomovie->duration}}</p>
									<h3>Cast:</h3>
									<div class="slide-cast">
									<div class="single-slide-cast">
										<img src="{{$actor5->image}}" alt="about" />{{$actor5->name}}
									</div>
									<div class="single-slide-cast">
										<img src="{{$actor6->image}}" alt="about" />{{$actor6->name}}
									</div>
									<div class="single-slide-cast">
										<img src="{{$actor7->image}}" alt="about" />{{$actor7->name}}
									</div>
									<div class="single-slide-cast">
										<img src="{{$actor8->image}}" alt="about" />{{$actor8->name}}
									</div>
										<div class="single-slide-cast text-center">
											5+
										</div>
									</div>
								<div class="slide-trailor">
									<a class="theme-btn theme-btn2"
										href="{{$twomovie->promotion}}"><i class="icofont icofont-play" >&nbsp;</i>Watch Trailer</a> 
										 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a class="theme-btn theme-btn2" 
										href="{{$twomovie->video}}"><i class="icofont icofont-ui-play"></i> Playing Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- hero area end -->
		

		<!-- portfolio section start -->
		<section class="portfolio-area pt-60">
			<div class="container">
				<div class="row flexbox-center">
					<div class="col-lg-6 text-center text-lg-left">
					    <div class="section-title">
							<h1><i class="icofont icofont-movie"></i> Spotlight This Month</h1>
						</div>
					</div>
					<div class="col-lg-6 text-center text-lg-right">
					    <div class="portfolio-menu">
							<ul>
								<li data-filter="*" class="active">All Movies</li>
								<li data-filter=".last">Latest Movies</li>
								<li data-filter=".top">Top Rated</li>
								<li data-filter=".most">Most Watched</li>
							</ul>
						</div>
					</div>
				</div>
				<hr />
				<div class="row">
					<div class="col-lg-9">
						<div class="row portfolio-item">
							@foreach($types as $type)
							@foreach($type->movies as $movie)
							<div class="col-md-4 col-sm-6 last top">
								<div class="single-portfolio">
									<div class="single-portfolio-img">
										<img src="{{$movie->image}}" alt="portfolio" />
										<a href="{{$movie->video}}" class="popup-youtube">
											<i class="icofont icofont-ui-play"></i>
										</a>
									</div>
									<div class="portfolio-content">
										<h2>{{$movie->name}}</h2>
										<div class="review">
											<div class="author-review">
												<i class="icofont icofont-star"></i>
												<i class="icofont icofont-star"></i>
												<i class="icofont icofont-star"></i>
												<i class="icofont icofont-star"></i>
												<i class="icofont icofont-star"></i>
											</div>
											<h4>{{$movie->rating}}</h4>
										</div>
									</div>
								</div>
							</div>
							@endforeach
							@endforeach
							<!-- <div class="col-md-4 col-sm-6 most ">
								<div class="single-portfolio">
									<div class="single-portfolio-img">
										<img src="{{$twomovie->image}}" alt="portfolio" />
										<a href="{{$twomovie->video}}" class="popup-youtube">
											<i class="icofont icofont-ui-play"></i>
										</a>
									</div>
									<div class="portfolio-content">
										<h2>{{$twomovie->name}}</h2>
										<div class="review">
											<div class="author-review">
												<i class="icofont icofont-star"></i>
												<i class="icofont icofont-star"></i>
												<i class="icofont icofont-star"></i>
												
											</div>
											<h4>{{$twomovie->rating}}</h4>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 last top">
								<div class="single-portfolio">
									<div class="single-portfolio-img">
										<img src="{{$threemovie->image}}" alt="portfolio" />
										<a href="{{$threemovie->video}}" class="popup-youtube">
											<i class="icofont icofont-ui-play"></i>
										</a>
									</div>
									<div class="portfolio-content">
										<h2>{{$threemovie->name}}</h2>
										<div class="review">
											<div class="author-review">
												<i class="icofont icofont-star"></i>
												<i class="icofont icofont-star"></i>
												<i class="icofont icofont-star"></i>
												<i class="icofont icofont-star"></i>
												
											</div>
											<h4>{{$threemovie->rating}}</h4>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 last most">
								<div class="single-portfolio">
									<div class="single-portfolio-img">
										<img src="{{$fourmovie->image}}" alt="portfolio" />
										<a href="{{$fourmovie->video}}" class="popup-youtube">
											<i class="icofont icofont-ui-play"></i>
										</a>
									</div>
									<div class="portfolio-content">
										<h2>{{$fourmovie->name}}</h2>
										<div class="review">
											<div class="author-review">
												<i class="icofont icofont-star"></i>
												<i class="icofont icofont-star"></i>
												<i class="icofont icofont-star"></i>
												<i class="icofont icofont-star"></i>
												
											</div>
											<h4>{{$fourmovie->rating}}</h4>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 top most">
								<div class="single-portfolio">
									<div class="single-portfolio-img">
										<img src="{{$fivemovie->image}}" alt="portfolio" />
										<a href="{{$fivemovie->video}}" class="popup-youtube">
											<i class="icofont icofont-ui-play"></i>
										</a>
									</div>
									<div class="portfolio-content">
										<h2>{{$fivemovie->name}}</h2>
										<div class="review">
											<div class="author-review">
												<i class="icofont icofont-star"></i>
												<i class="icofont icofont-star"></i>
												<i class="icofont icofont-star"></i>
												<i class="icofont icofont-star"></i>
												<i class="icofont icofont-star"></i>
											</div>
											<h4>{{$fivemovie->rating}}</h4>
										</div>
									</div>
								</div>
							</div> -->

						</div>
					</div>
					<div class="col-lg-3 text-center text-lg-left">
					    <div class="portfolio-sidebar">
							<img src="assets/img/sidebar/sidebar1.png" alt="sidebar" />
							<img src="assets/img/sidebar/sidebar2.png" alt="sidebar" />
							<img src="assets/img/sidebar/sidebar3.png" alt="sidebar" />
							<img src="assets/img/sidebar/sidebar4.png" alt="sidebar" />
						</div>
					</div>
				</div>
			</div>
		</section>


		<!-- portfolio section end -->
	

		<!-- Type section start -->

		<div class="portfolio-area pt-60">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center text-lg-left ">
					    <div class="section-title">
							<h1><i class="icofont icofont-movie"></i> Sorting By</h1>
						</div>
					</div>
				</div>
					<hr />
					<div class="row inner-menu-box">
					    <div class="col-lg-3 text-lg-left">	
					    	<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

							<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"aria-controls="v-pills-home" aria-selcted="false">All Types</a>

							@foreach($types as $type)
							<a class="nav-link" id="v-pills-{{$type->id}}-tab" data-toggle="pill" href="#v-pills-{{$type->id}}" role="tab"aria-controls="v-pills-{{$type->id}}" aria-selcted="false">{{$type->name}}</a>

							@endforeach
						</div>
					</div>
						<div class="col-lg-9 text-lg-right">
						   <div class="tab-content" id="v-pills-tab-Content">
							<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

							<div class="row">
								@foreach($types as $type)
								@foreach($type->movies as $movie)
							  <div class="col-md-4 col-sm-6 ">
								<div class="single-portfolio">
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
							</div>
								@endforeach 
							@endforeach 
					    	</div>
					    </div>



						@foreach($types as $type)
						<div class="tab-pane fade" id="v-pills-{{$type->id}}" role="tabpanel" aria-labelledby="v-pills-{{$type->id}}-tab">
							<div class="row">
								@foreach($type->movies as $one)
							<div class="col-md-4 col-sm-6 ">
									<div class="single-portfolio-img">
										<img src="{{$one->image}}" alt="portfolio" />
										<a href="{{$one->video}}" class="popup-youtube">
											<i class="icofont icofont-ui-play"></i>
										</a>
									</div>
									<div class="portfolio-content">
										<h2 class="text-center">{{$one->name}}</h2>
										<div class="review text-center">
											
											<h4>{{$one->rating}}</h4>
										</div>
									</div> 
								@endforeach
							</div>
						</div>
							@endforeach
						</div>
						
							</div>
						</div>
					</div>
				</div>
		<!-- type section end -->


		@endsection