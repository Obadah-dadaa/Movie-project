@extends('master')
@section('title','Movies Details')
@section('body')
		<!-- breadcrumb area start -->
		<section class="breadcrumb-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumb-area-content">
							<h1>Movies Details</h1>
						</div>
					</div>
				</div>
			</div>
		</section><!-- breadcrumb area end -->
		<!-- transformers area start -->
		<section class="transformers-area">
			<div class="container">
				<div class="transformers-box">
					<div class="row flexbox-center">
						<div class="col-lg-5 text-lg-left text-center">
							<div class="transformers-content">
								<img src="{{$onemovie->image}}" alt="about" />
							</div>
						</div>
						<div class="col-lg-7">
							<div class="transformers-content">
								<h2>{{$onemovie->name}}</h2>
								<p> Crime | {{$type1->name}}</p>
								<ul>
									<li>
										<div class="transformers-left">
											Writer:
										</div>
										<div class="transformers-right">
											Scott Silver
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Director:
										</div>
										<div class="transformers-right">
											 Todd Phillips
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Time: 
										</div>
										<div class="transformers-right">
											{{$onemovie->duration}}
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Release:
										</div>
										<div class="transformers-right">
											2019-07-22
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Language:
										</div>
										<div class="transformers-right">
											English
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Cinema:
										</div>
										<div class="transformers-right">
											HB Movies  &nbsp;&nbsp;  | &nbsp;&nbsp;    Grand Seats        |&nbsp;&nbsp;  HB Max
											<div class="transformers-bottom">
												<p>May 19, 2022 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
												<p>May 19, 202 &nbsp;&nbsp;&nbsp;&nbsp;<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
												<p>May 19, 2022 <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
											</div>
											
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Share:
										</div>
										<div class="transformers-right">
											<a href="#"><i class="icofont icofont-social-facebook"></i></a>
											<a href="#"><i class="icofont icofont-social-twitter"></i></a>
											<a href="#"><i class="icofont icofont-social-google-plus"></i></a>
											<a href="#"><i class="icofont icofont-youtube-play"></i></a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<a href="/" class="theme-btn"><i class="icofont icofont-library"></i> Add to library</a>
				</div>
			</div>
		</section><!-- transformers area end -->
<br>
<br>



				<!-- transformers area start -->
		<section class="transformers-area">
			<div class="container">
				<div class="transformers-box">
					<div class="row flexbox-center">
						<div class="col-lg-5 text-lg-left text-center">
							<div class="transformers-content">
								<img src="{{$twomovie->image}}" alt="about" />
							</div>
						</div>
						<div class="col-lg-7">
							<div class="transformers-content">
								<h2>{{$twomovie->name}}</h2>
								<p> Crime | {{$type2->name}}</p>
								<ul>
									<li>
										<div class="transformers-left">
											Writer:
										</div>
										<div class="transformers-right">
											Stephen McFeely, Christopher Markus
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Director:
										</div>
										<div class="transformers-right">
											Joe Johnston
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Time: 
										</div>
										<div class="transformers-right">
											{{$twomovie->duration}}
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Release:
										</div>
										<div class="transformers-right">
											2005-04-5
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Language:
										</div>
										<div class="transformers-right">
											English
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Cinema:
										</div>
										<div class="transformers-right">
											HB Movies  &nbsp;&nbsp;  | &nbsp;&nbsp;    Grand Seats        |&nbsp;&nbsp;  HB Max
											<div class="transformers-bottom">
												<p>May 19, 2018 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
												<p>May 19, 2018 &nbsp;&nbsp;&nbsp;&nbsp;<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
												<p>May 19, 2018 <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
											</div>
											
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Share:
										</div>
										<div class="transformers-right">
											<a href="#"><i class="icofont icofont-social-facebook"></i></a>
											<a href="#"><i class="icofont icofont-social-twitter"></i></a>
											<a href="#"><i class="icofont icofont-social-google-plus"></i></a>
											<a href="#"><i class="icofont icofont-youtube-play"></i></a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<a href="/" class="theme-btn"><i class="icofont icofont-library"></i> Add to library</a>
				</div>
			</div>
		</section><!-- transformers area end -->

<br>
<br>

		<!-- transformers area start -->
		<section class="transformers-area">
			<div class="container">
				<div class="transformers-box">
					<div class="row flexbox-center">
						<div class="col-lg-5 text-lg-left text-center">
							<div class="transformers-content">
								<img src="{{$threemovie->image}}" alt="about" />
							</div>
						</div>
						<div class="col-lg-7">
							<div class="transformers-content">
								<h2>{{$threemovie->name}}</h2>
								<p> Funny | {{$type3->name}}</p>
								<ul>

									<li>
										<div class="transformers-left">
											Writer:
										</div>
										<div class="transformers-right">
											 Aline Brosh McKenna, Kelly Marcel, and Steve Zissis
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Director:
										</div>
										<div class="transformers-right">
											Craig Gillespie
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Time: 
										</div>
										<div class="transformers-right">
											{{$threemovie->duration}}
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Release:
										</div>
										<div class="transformers-right">
											2021-07-3
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Language:
										</div>
										<div class="transformers-right">
											English
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Cinema:
										</div>
										<div class="transformers-right">
											HB Movies  &nbsp;&nbsp;  | &nbsp;&nbsp;    Grand Seats        |&nbsp;&nbsp;  HB Max
											<div class="transformers-bottom">
												<p>Dec 19, 2021 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
												<p>Dec 19, 2018 &nbsp;&nbsp;&nbsp;&nbsp;<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
												<p>Nov 19, 2018 <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
											</div>
											
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Share:
										</div>
										<div class="transformers-right">
											<a href="#"><i class="icofont icofont-social-facebook"></i></a>
											<a href="#"><i class="icofont icofont-social-twitter"></i></a>
											<a href="#"><i class="icofont icofont-social-google-plus"></i></a>
											<a href="#"><i class="icofont icofont-youtube-play"></i></a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<a href="/" class="theme-btn"><i class="icofont icofont-library"></i> Add to library</a>
				</div>
			</div>
		</section><!-- transformers area end -->


<br>
<br>



				<!-- transformers area start -->
		<section class="transformers-area">
			<div class="container">
				<div class="transformers-box">
					<div class="row flexbox-center">
						<div class="col-lg-5 text-lg-left text-center">
							<div class="transformers-content">
								<img src="{{$fourmovie->image}}" alt="about" />
							</div>
						</div>
						<div class="col-lg-7">
							<div class="transformers-content">
								<h2>{{$fourmovie->name}}</h2>
								<p> {{$type4->name}} </p>
								<ul>
									<li>
										<div class="transformers-left">
											Writer:
										</div>
										<div class="transformers-right">
											 Jojo Moyes
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Director:
										</div>
										<div class="transformers-right">
											by Thea Sharrock
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Time: 
										</div>
										<div class="transformers-right">
											{{$fourmovie->duration}}
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Release:
										</div>
										<div class="transformers-right">
											2016-012-10
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Language:
										</div>
										<div class="transformers-right">
											English
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Cinema:
										</div>
										<div class="transformers-right">
											HB Movies  &nbsp;&nbsp;  | &nbsp;&nbsp;    Grand Seats        |&nbsp;&nbsp;  HB Max
											<div class="transformers-bottom">
												<p>May 19, 2018 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
												<p>May 19, 2018 &nbsp;&nbsp;&nbsp;&nbsp;<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
												<p>May 19, 2018 <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
											</div>
											
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Share:
										</div>
										<div class="transformers-right">
											<a href="#"><i class="icofont icofont-social-facebook"></i></a>
											<a href="#"><i class="icofont icofont-social-twitter"></i></a>
											<a href="#"><i class="icofont icofont-social-google-plus"></i></a>
											<a href="#"><i class="icofont icofont-youtube-play"></i></a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<a href="/" class="theme-btn"><i class="icofont icofont-library"></i> Add to library</a>
				</div>
			</div>
		</section><!-- transformers area end -->


<br>
<br>





				<!-- transformers area start -->
		<section class="transformers-area">
			<div class="container">
				<div class="transformers-box">
					<div class="row flexbox-center">
						<div class="col-lg-5 text-lg-left text-center">
							<div class="transformers-content">
								<img src="{{$fivemovie->image}}" alt="about" />
							</div>
						</div>
						<div class="col-lg-7">
							<div class="transformers-content">
								<h2>{{$fivemovie->name}}</h2>
								<p>Crime | {{$type2->name}} |{{$type1->name}}</p>
								<ul>

									<li>
										<div class="transformers-left">
											Writer:
										</div>
										<div class="transformers-right">
											Oriol Paulo
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Director:
										</div>
										<div class="transformers-right">
											Oriol Paulo
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Time: 
										</div>
										<div class="transformers-right">
											{{$fivemovie->duration}}
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Release:
										</div>
										<div class="transformers-right">
											2016-01-5
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Language:
										</div>
										<div class="transformers-right">
											Spanish
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Cinema:
										</div>
										<div class="transformers-right">
											HB Movies  &nbsp;&nbsp;  | &nbsp;&nbsp;    Grand Seats        |&nbsp;&nbsp;  HB Max
											<div class="transformers-bottom">
												<p>May 19, 2018 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
												<p>May 19, 2018 &nbsp;&nbsp;&nbsp;&nbsp;<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
												<p>May 19, 2018 <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
											</div>
											
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Share:
										</div>
										<div class="transformers-right">
											<a href="#"><i class="icofont icofont-social-facebook"></i></a>
											<a href="#"><i class="icofont icofont-social-twitter"></i></a>
											<a href="#"><i class="icofont icofont-social-google-plus"></i></a>
											<a href="#"><i class="icofont icofont-youtube-play"></i></a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<a href="/" class="theme-btn"><i class="icofont icofont-library"></i> Add to library</a>
				</div>
			</div>
		</section><!-- transformers area end -->



		<!-- details area start -->
		<section class="details-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="details-content">
							<div class="details-reply">
								<h2>Leave a Reply</h2>
								<form action="#">
									<div class="row">
										<div class="col-lg-4">
											<div class="select-container">
												<input type="text" placeholder="Name"/>
												<i class="icofont icofont-ui-user"></i>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="select-container">
												<input type="text" placeholder="Email"/>
												<i class="icofont icofont-envelope"></i>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="select-container">
												<input type="text" placeholder="Phone"/>
												<i class="icofont icofont-phone"></i>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="textarea-container">
												<textarea placeholder="Type Here Message"></textarea>
												<button><i class="icofont icofont-send-mail"></i></button>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="details-comment">
								<a class="theme-btn theme-btn2" href="#">Post Comment</a>
								<p>You may use these HTML tags and attributes: You may use these HTML tags and attributes: You may use these HTML tags and attributes: </p>
							</div>
							<div class="details-thumb">
								<div class="details-thumb-prev">
									<div class="thumb-icon">
										<i class="icofont icofont-simple-left"></i>
									</div>
									<div class="thumb-text">
										<h4>Previous Post</h4>
										<p>Standard Post With Gallery</p>
									</div>
								</div>
								<div class="details-thumb-next">
									<div class="thumb-text">
										<h4>Next Post</h4>
										<p>Standard Post With Preview Image</p>
									</div>
									<div class="thumb-icon">
										<i class="icofont icofont-simple-right"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 text-center text-lg-left">
					    <div class="portfolio-sidebar">
							<img src="assets/img/sidebar/sidebar1.png" alt="sidebar" />
							<img src="assets/img/sidebar/sidebar2.png" alt="sidebar" />
							<img src="assets/img/sidebar/sidebar4.png" alt="sidebar" />
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- details area end -->
	
	@endsection