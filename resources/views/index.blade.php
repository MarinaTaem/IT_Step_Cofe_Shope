<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{ asset('assets/img/fav.png') }}">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Coffee</title>

	<!-- In your <head> -->
	<link href="https://fonts.googleapis.com/css?family=Quicksand:700&display=swap" rel="stylesheet">
	<!--
			CSS
			============================================= -->

	@vite(['resources/css/app.css',
	'resources/js/app.js',
	'resources/css/linearicons.css',
	'resources/css/bootstrap.css',
	'resources/css/magnific-popup.css',
	'resources/css/nice-select.css',
	'resources/css/main.css',
	'resources/js/hoverIntent.js',
	'resources/js/main.js'
	])
</head>

<body>

	<header id="header" ">
		<div class=" header-top">
		<div class="container">
			<div class="row justify-content-end">
				<!-- Optional top-right content here -->
			</div>
		</div>
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="{{ route('home') }}">
						<img src="{{ asset('assets/img/logo.png') }}" alt="Logo" title="" />
					</a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active"><a href="{{ route('home') }}">Home</a></li>
						<li><a href="#about">Coffee</a></li>
						<li><a href="{{ route('about_us')}}">About Us></li>
						<li><a href="#blog"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
									viewBox="0 0 24 24">
									<path fill="currentColor" fill-rule="evenodd"
										d="M8 7a4 4 0 1 1 8 0a4 4 0 0 1-8 0m0 6a5 5 0 0 0-5 5a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3a5 5 0 0 0-5-5z"
										clip-rule="evenodd" />
								</svg></a></li>

						<ul>
							<li><a href="{{ route('generic') }}">Generic</a></li>
							<li><a href="{{ route('elements') }}">Elements</a></li>
						</ul>
						</li>
					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
		</div>
	</header><!-- #header -->


	<!-- Start Banner Area -->
	<section class="banner-area text-white" style="background-image: url({{ asset('assets/img/header-bg.jpg') }}); 
           background-size: cover; 
           background-position: center; 
           height: 100vh;">

		<div class="container h-100 d-flex align-items-center justify-content-center text-center">
			<div>
				<h3 class="text-white">Learn about coffee </h3>
				<h3 class="text-white">Make better coffee</h3>
				<a href="#" class="btn btn-outline-light mt-3"
					style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #ffffff">Coffe
					Menu</a>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->


	<!-- Start video-sec Area -->
	<section class="video-sec-area pb-100 pt-40" id="about">
		<div class="container">
			<div class="row justify-content-start align-items-center">
				<div class="col-lg-6 video-right justify-content-center align-items-center d-flex">
					<div class="overlay overlay-bg"></div>
					<a class="play-btn" href="https://www.youtube.com/watch?v=vFcS080VYQ0"><img class="img-fluid"
							src="{{ asset('assets/img/play_icon.png') }}" alt=""></a>
				</div>
				<div class="col-lg-6 video-left">
					<h6>Youtube Video</h6>
					<h1>What is coffee? <br>
						How humanity got hooked on coffee - Jonathan Morris</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End video-sec Area -->

	<!-- Start menu Area -->
	<section class="menu-area section-gap" id="coffee">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-10">
					<div class="title text-center">
						<h1 class="mb-10">Explore the Four Main Coffee Bean Varieties</h1>
						<p
							style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #2c2c2c">
							Each type brings its own flavor, aroma, and experience.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<!-- Arabica -->
				<div class="col-md-6 mb-4">
					<div class="single-menu p-4">
						<div class="title-div d-flex justify-content-between">
							<h4>Arabica</h4>
						</div>
						<p
							style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #2c2c2c">
							Arabica is the most popular coffee bean, known for its smooth, mild flavor and aromatic
							profile.
							Grown at higher altitudes, it contains less caffeine and is often considered of higher
							quality,
							making it ideal for specialty coffee lovers.
						</p>
					</div>
				</div>

				<!-- Robusta -->
				<div class="col-md-6 mb-4">
					<div class="single-menu p-4">
						<div class="title-div d-flex justify-content-between">
							<h4>Robusta</h4>
						</div>
						<p
							style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #2c2c2c">
							Robusta beans are stronger and more bitter, with a higher caffeine content and earthy
							flavor.
							Commonly used in instant coffee and espresso blends, they grow well at lower altitudes and
							are
							more resilient to pests and harsh climates.
						</p>
					</div>
				</div>

				<!-- Liberica -->
				<div class="col-md-6 mb-4">
					<div class="single-menu p-4">
						<div class="title-div d-flex justify-content-between">
							<h4>Liberica</h4>
						</div>
						<p
							style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #2c2c2c">
							Liberica beans are rare and produce a unique, bold cup with floral and woody notes. They are
							grown primarily in Southeast Asia and are known for their large bean size and strong, smoky
							aroma that sets them apart from other varieties.
						</p>
					</div>
				</div>

				<!-- Excelsa -->
				<div class="col-md-6 mb-4">
					<div class="single-menu p-4">
						<div class="title-div d-flex justify-content-between">
							<h4>Excelsa</h4>
						</div>
						<p
							style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #2c2c2c">
							Excelsa is a distinctive variety often used to add depth to coffee blends. It has a tart,
							fruity
							flavor and is grown mainly in Southeast Asia. Though classified under Liberica, it offers a
							different taste profile and adds complexity to brews.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- End menu Area -->

	<!-- Start gallery Area -->
	<section class="gallery-area section-gap" id="gallery">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-10">
					<div class="title text-center">
						<h1 class="mb-10">What kind of Coffee we serve for you</h1>
						<p
							style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #2c2c2c">
							Who are in extremely love with eco friendly system.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<a href="{{ asset('assets/img/g1.jpg') }}" class="img-pop-home">
						<img class="img-fluid" src="{{ asset('assets/img/g1.jpg') }}" alt="">
					</a>
					<a href="{{ asset('assets/img/g2.jpg') }}" class="img-pop-home">
						<img class="img-fluid" src="{{ asset('assets/img/g2.jpg') }}" alt="">
					</a>
				</div>
				<div class="col-lg-8">
					<a href="{{ asset('assets/img/g3.jpg') }}" class="img-pop-home">
						<img class="img-fluid" src="{{ asset('assets/img/g3.jpg') }}" alt="">
					</a>
					<div class="row">
						<div class="col-lg-6">
							<a href="{{ asset('assets/img/g4.jpg') }}" class="img-pop-home">
								<img class="img-fluid" src="{{ asset('assets/img/g4.jpg') }}" alt="">
							</a>
						</div>
						<div class="col-lg-6">
							<a href="{{ asset('assets/img/g5.jpg') }}" class="img-pop-home">
								<img class="img-fluid" src="{{ asset('assets/img/g5.jpg') }}" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End gallery Area -->

	<!-- Start review Area -->
	<section class="review-area section-gap" id="review">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-10">
					<div class="title text-center">
						<h1 class="mb-10">Their Favorite Coffee, Their Real Stories</h1>
						<p
							style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #2c2c2c">
							Hear what our customers say about the unique coffee types we offer.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<!-- Arabica Review -->
				<div class="col-lg-6 col-md-6 single-review">
					<div class="d-flex align-items-start mb-4">
						<img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d"
							class="rounded-circle me-3" width="70" alt="Arabica Reviewer">
						<div>
							<h4 class="mb-1">Liam Johnson - Arabica Lover</h4>
							<div class="star text-warning mb-2">
								<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
								<i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i>
							</div>
							<p
								style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #2c2c2c">
								“Arabica from this shop is smooth, rich, and aromatic. It's my go-to for relaxing
								mornings. The system helped me learn its origin and flavor profile — makes the
								experience special every time.”
							</p>
						</div>
					</div>
				</div>

				<!-- Robusta Review -->
				<div class="col-lg-6 col-md-6 single-review">
					<div class="d-flex align-items-start mb-4">
						<img src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e"
							class="rounded-circle me-3" width="70" alt="Robusta Reviewer">
						<div>
							<h4 class="mb-1">Ava Martinez - Robusta Enthusiast</h4>
							<div class="star text-warning mb-2">
								<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
								<i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
							</div>
							<p
								style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #2c2c2c">
								“Robusta gives me the strong kick I need during work. Thanks to the system’s
								descriptions, I picked the perfect bold brew. I never knew coffee could be this
								empowering.”
							</p>
						</div>
					</div>
				</div>

				<!-- Liberica Review -->
				<div class="col-lg-6 col-md-6 single-review">
					<div class="d-flex align-items-start mb-4">
						<img src="https://images.unsplash.com/photo-1544723795-3fb6469f5b39" class="rounded-circle me-3"
							width="70" alt="Liberica Reviewer">
						<div>
							<h4 class="mb-1">Noah Lee - Liberica Explorer</h4>
							<div class="star text-warning mb-2">
								<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
								<i class="fa fa-star"></i> <i class="fa fa-star"></i>
							</div>
							<p
								style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #2c2c2c">
								“Liberica’s fruity and woody taste blew my mind. I wouldn’t have discovered it without
								this platform. It’s not just a coffee system — it’s a journey.”
							</p>
						</div>
					</div>
				</div>

				<!-- Excelsa Review -->
				<div class="col-lg-6 col-md-6 single-review">
					<div class="d-flex align-items-start mb-4">
						<img src="https://images.unsplash.com/photo-1552058544-f2b08422138a" class="rounded-circle me-3"
							width="70" alt="Excelsa Reviewer">
						<div>
							<h4 class="mb-1">Emma Brown - Excelsa Adventurer</h4>
							<div class="star text-warning mb-2">
								<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i>
								<i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
							</div>
							<p
								style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #2c2c2c">
								“Excelsa’s tart and dark flavors intrigued me. The system guided me perfectly to
								discover
								this rare gem. It’s now my favorite after-dinner brew.”
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<!-- End review Area -->

	<!-- Start blog Area -->
	<!-- Start recommendation Area -->
	<section class="recommendation-area section-gap" id="recommendation">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-10">
					<div class="title text-center">
						<h1 class="mb-10">Our Top Coffee Recommendations</h1>
						<p
							style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #2c2c2c">
							Discover the two most popular coffee types loved worldwide</p>
					</div>
				</div>
			</div>

			<div class="row">
				<!-- Arabica Recommendation -->
				<div class="col-lg-6 single-recommendation">
					<div class="thumb"
						style="background: url('https://images.unsplash.com/photo-1447933601403-0c6688de566e?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80') center/cover; height: 400px; border-radius: 8px;">
					</div>
					<div class="details p-4">
						<h4 class="mb-3">Arabica Coffee</h4>
						<p class="mb-4"
							style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #2c2c2c">
							The world's most popular coffee, making up 60-70% of global production. Arabica beans are
							prized for their smooth, complex flavor profile with notes of fruit and sugar, and higher
							acidity.
						</p>
						<div class="features">
							<div class="d-flex align-items-center mb-2">
								<span class="lnr lnr-leaf mr-2"></span>
								<span
									style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #2c2c2c">Origin:
									Ethiopian highlands</span>
							</div>
							<div class="d-flex align-items-center mb-2">
								<span class="lnr lnr-thermometer mr-2"></span>
								<span
									style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #2c2c2c">Grows
									best at 900-2,000m altitude</span>
							</div>
							<div class="d-flex align-items-center">
								<span class="lnr lnr-coffee-cup mr-2"></span>
								<span
									style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #2c2c2c">Caffeine
									content: 1.2-1.5%</span>
							</div>
						</div>
					</div>
				</div>

				<!-- Robusta Recommendation -->
				<div class="col-lg-6 single-recommendation">
					<div class="thumb"
						style="background: url('https://images.unsplash.com/photo-1517701550927-30cf4ba1dba5?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80') center/cover; height: 400px; border-radius: 8px;">
					</div>
					<div class="details p-4">
						<h4 class="mb-3">Robusta Coffee</h4>
						<p class="mb-4"
							style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #2c2c2c">
							Known for its strong, bold flavor and higher caffeine content. Robusta beans are hardier
							plants that produce a more bitter coffee, often used in espresso blends for that perfect
							crema.
						</p>
						<div class="features">
							<div class="d-flex align-items-center mb-2">
								<span class="lnr lnr-leaf mr-2"></span>
								<span
									style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #2c2c2c">Origin:
									Central and West Africa</span>
							</div>
							<div class="d-flex align-items-center mb-2">
								<span class="lnr lnr-thermometer mr-2"></span>
								<span
									style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #2c2c2c">Grows
									at 0-900m altitude</span>
							</div>
							<div class="d-flex align-items-center">
								<span class="lnr lnr-coffee-cup mr-2"></span>
								<span
									style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #2c2c2c">Caffeine
									content: 2.2-2.7%</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End recommendation Area -->



	<!-- End blog Area -->


	<!-- start footer Area -->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p
							style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #ffffff">
							Brewing the finest coffee with passion and care for every cup.
						</p>
						<p class="footer-text">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script> All rights reserved | This template is made with <i class="fa fa-heart-o"
								aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
				</div>
				<div class="col-lg-5  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p
							style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #ffffff">
							Stay update with our latest</p>
						<div class="" id="mc_embed_signup">
							<form target="_blank" novalidate="true"
								action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
								method="get" class="form-inline">
								<input class="form-control" name="EMAIL" placeholder="Enter Email"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
									required="" type="email"
									style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #ffffff">
								<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right"
										aria-hidden="true"></i></button>
								<div style="position: absolute; left: -5000px;">
									<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
										type="text">
								</div>

								<div class="info pt-20"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p
							style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #ffffff">
							Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
	</script>
	<script type="text/javascript"
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>

	<script>
		window.addEventListener('scroll', () => {
    const header = document.getElementById('header');
    if (window.scrollY > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });
	</script>
</body>