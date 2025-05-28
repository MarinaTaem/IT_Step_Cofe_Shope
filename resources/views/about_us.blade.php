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
    <style>
        .coffee-info {
            padding: 80px 0;
            background-color: #f9f9f9;
        }

        .coffee-info h2 {
            text-align: center;
            margin-bottom: 40px;
            color: #333;
        }

        .coffee-info p {
            font-size: 18px;
            line-height: 1.8;
            color: #555;
            max-width: 800px;
            margin: 0 auto 40px;
        }

        .profile-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            padding: 50px 0;
        }

        .profile-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 280px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .profile-card:hover {
            transform: translateY(-10px);
        }

        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 20px;
            border: 5px solid #f1f1f1;
        }

        .profile-card h3 {
            margin: 10px 0 5px;
            color: #333;
        }

        .profile-card p {
            color: #777;
            margin: 0;
            font-size: 16px;
        }
    </style>
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
                        <li><a href="#review">About Us></li>
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
                <h1 class="text-white" style="font-size: 70px">About Us </h1>

            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!-- Coffee Information Section -->
    <section class="coffee-info">
        <div class="container">
            <h2>The Art and Science of Coffee</h2>
            <p style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #333;">
                Coffee is more than just a beverage - it's a culture, a ritual, and for many, a way of life.
                From the high-altitude farms where coffee cherries are hand-picked to the careful roasting process
                that brings out unique flavor profiles, every step in the coffee journey matters. Our website is
                dedicated to helping you discover the world of specialty coffee, learn brewing techniques, and
                connect with fellow coffee enthusiasts who share your passion for the perfect cup.
            </p>
            <p style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #333;">
                Whether you're a casual drinker or an aspiring barista, understanding coffee's rich history and
                diverse varieties will enhance your appreciation for this remarkable drink. Explore with us as we
                delve into different brewing methods, regional characteristics, and the latest trends in the
                ever-evolving coffee scene.
            </p>
        </div>
    </section>
    <h1 style="text-align: center; font-size: 50px">Our Team</h1>

    <!-- Profile Cards Section -->
    <section class="profile-cards">
        <div class="profile-card">
            <img src="{{ asset('assets/img/nary.jpg') }}" alt="Profile" class="profile-img">
            <h3>Nary Sean</h3>
            <p style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #333;">
                naryseann@gmail.com</p>
        </div>

        <div class="profile-card">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Profile" class="profile-img">
            <h3>Michael Chen</h3>
            <p style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #333;">
                michael.chen@coffeeenthusiast.com</p>
        </div>

        <div class="profile-card">
            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Profile" class="profile-img">
            <h3>Emma Rodriguez</h3>
            <p style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #333;">
                emma.rodriguez@coffeeenthusiast.com</p>
        </div>

        <div class="profile-card">
            <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Profile" class="profile-img">
            <h3>David Kim</h3>
            <p style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #333;">
                david.kim@coffeeenthusiast.com</p>
        </div>

        <div class="profile-card">
            <img src="https://randomuser.me/api/portraits/women/90.jpg" alt="Profile" class="profile-img">
            <h3>Lisa Williams</h3>
            <p style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #333;">
                lisa.williams@coffeeenthusiast.com</p>
        </div>
    </section>

    <!-- start footer Area -->
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Us</h6>
                        <p style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #ffffff"
                            ;>
                            Brewing the finest coffee with passion and care for every cup.
                        </p>
                        <p class=" footer-text">
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

</html>