@extends('master')
@section('title','Top Movies')
@section('body')

		<!-- breadcrumb area start -->
		<section class="breadcrumb-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumb-area-content">
							<h1>Top Movies</h1>
						</div>
					</div>
				</div>
			</div>
		</section><!-- breadcrumb area end -->
		
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
							<div class="col-md-4 col-sm-6 last top">
								<div class="single-portfolio">
									<div class="single-portfolio-img">
										<img src="{{$onemovie->image}}" alt="portfolio" />
										<a href="{{$onemovie->video}}" class="popup-youtube">
											<i class="icofont icofont-ui-play"></i>
										</a>
									</div>
									<div class="portfolio-content">
										<h2>{{$onemovie->name}}</h2>
										<div class="review">
											<div class="author-review">
												<i class="icofont icofont-star"></i>
												<i class="icofont icofont-star"></i>
												<i class="icofont icofont-star"></i>
												<i class="icofont icofont-star"></i>
												<i class="icofont icofont-star"></i>
											</div>
											<h4>{{$onemovie->rating}}</h4>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 most ">
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
							</div>
							<div class="col-md-4 col-sm-6 ">
								<div class="single-portfolio">
									<div class="single-portfolio-img">
										<img src="assets/img/portfolio/portfolio6.png" alt="portfolio" />
										<a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
											<i class="icofont icofont-ui-play"></i>
										</a>
									</div>
									<div class="portfolio-content">
										<h2>Last Hero</h2>
										<div class="review">
											<div class="author-review">
												<i class="icofont icofont-star"></i>
												<i class="icofont icofont-star"></i>
												<i class="icofont icofont-star"></i>
												
											</div>
											<h4>5.8</h4>
										</div>
									</div>
								</div>
							</div>
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
		


@endsection