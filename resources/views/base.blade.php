<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="https://themeim.com/demo/flynext/assets/css/fontawesome-all.min.css">



    <!-- bootstrap css link -->
    <link rel="stylesheet" href=" {{asset('assets/css/bootstrap.min.css')}} ">
    <!-- favicon -->
    <link rel="shortcut icon" href=" {{asset('assets/images/fav.png')}} " type="image/x-icon">
    <!-- swipper css link -->
    <link rel="stylesheet" href=" {{('assets/css/swiper.min.css')}} ">
    <!-- lightcase css links -->
    <link rel="stylesheet" href=" {{asset('assets/css/lightcase.css')}} ">
    <!-- odometer css link -->
    <link rel="stylesheet" href="{{asset('assets/css/odometer.css')}}">
    <!-- line-awesome-icon css -->
    <link rel="stylesheet" href="{{asset('assets/css/icomoon.css')}}">
    <!-- line-awesome-icon css -->
    <link rel="stylesheet" href="{{asset('assets/css/line-awesome.min.css')}}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!-- aos.css -->
    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">
    <!-- nice select css -->
    <link rel="stylesheet" href=" {{asset('assets/css/nice-select.css')}} ">
    <!-- main style css link -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body>


    <div class="page-wrapper">

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Preloader
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="preloader">
            <svg class="svg-loader" xmlns="http://www.w3.org/2000/svg" width="230" height="230">
                <path class="loader__path"
                    d="M86.429 40c63.616-20.04 101.511 25.08 107.265 61.93 6.487 41.54-18.593 76.99-50.6 87.643-59.46 19.791-101.262-23.577-107.142-62.616C29.398 83.441 59.945 48.343 86.43 40z"
                    fill="none" stroke="#0099cc" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"
                    stroke-dasharray="10 10 10 10 10 10 10 432" stroke-dashoffset="77" />
                <path class="loader__plane"
                    d="M141.493 37.93c-1.087-.927-2.942-2.002-4.32-2.501-2.259-.824-3.252-.955-9.293-1.172-4.017-.146-5.197-.23-5.47-.37-.766-.407-1.526-1.448-7.114-9.773-4.8-7.145-5.344-7.914-6.327-8.976-1.214-1.306-1.396-1.378-3.79-1.473-1.036-.04-2-.043-2.153-.002-.353.1-.87.586-1 .952-.139.399-.076.71.431 2.22.241.72 1.029 3.386 1.742 5.918 1.644 5.844 2.378 8.343 2.863 9.705.206.601.33 1.1.275 1.125-.24.097-10.56 1.066-11.014 1.032a3.532 3.532 0 0 1-1.002-.276l-.487-.246-2.044-2.613c-2.234-2.87-2.228-2.864-3.35-3.309-.717-.287-2.82-.386-3.276-.163-.457.237-.727.644-.737 1.152-.018.39.167.805 1.916 4.373 1.06 2.166 1.964 4.083 1.998 4.27.04.179.004.521-.076.75-.093.228-1.109 2.064-2.269 4.088-1.921 3.34-2.11 3.711-2.123 4.107-.008.25.061.557.168.725.328.512.72.644 1.966.676 1.32.029 2.352-.236 3.05-.762.222-.171 1.275-1.313 2.412-2.611 1.918-2.185 2.048-2.32 2.45-2.505.241-.111.601-.232.82-.271.267-.058 2.213.201 5.912.8 3.036.48 5.525.894 5.518.914 0 .026-.121.306-.27.638-.54 1.198-1.515 3.842-3.35 9.021-1.029 2.913-2.107 5.897-2.4 6.62-.703 1.748-.725 1.833-.594 2.286.137.46.45.833.872 1.012.41.177 3.823.24 4.37.085.852-.25 1.44-.688 2.312-1.724 1.166-1.39 3.169-3.948 6.771-8.661 5.8-7.583 6.561-8.49 7.387-8.702.233-.065 2.828-.056 5.784.011 5.827.138 6.64.09 8.62-.5 2.24-.67 4.035-1.65 5.517-3.016 1.136-1.054 1.135-1.014.207-1.962-.357-.38-.767-.777-.902-.893z"
                    fill="#000033" /></svg>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Preloader
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Header
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <header class="header-section header-section-one">
            <div class="header">
                <div class="header-bottom-area">
                    <div class="container-fluid">
                        <div class="header-menu-content">
                            <nav class="navbar navbar-expand-lg p-0">
                                <a class="site-logo site-title" href="{{route('home')}}"><img src= {{asset("assets/images/logo.png")}} 
                                        alt="site-logo"></a>
                                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="fas fa-bars"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav main-menu ml-auto">
                                        <li class="menu_has_children"><a href="{{route('home')}}"> </a></li>
                                        <li><a href="{{route('home')}}"></a></li>
                                        <li class="menu_has_children"><a href="{{route('home')}}"></a></li>
                                        @auth
                                        <li><a href="{{route('dashboard.user')}}"> {{Auth::user()->name}}</a></li>
                                        <div class="header-action-area">
                                            <a href="service-details.html" class="action-btn two"><i
                                                    class="icon-btn-icon"></i></a>
                                            <div class="header-action">
                                                <form method="POST" action="{{route('logout')}}">
                                                    @csrf
                                                    <button class="btn--base" ><i
                                                        class="icon-btn-icon"></i>Deconnexion</button>
                                                </form>
                                            </div>
                                        </div>
                                        @endauth
                                        @guest
                                        <li><a href="{{route('register')}}">S'inscrire</a></li>
                                        <li class="menu_has_children"><a href="{{route('login')}}">Se Conecter</a></li>
                                        @endguest
                                    </ul>
                                    <div class="header-right">
                                        <div class="search-bar d-none d-lg-block">
                                        </div>
                                        <div class="header-action-area">
                                            <a href="service-details.html" class="action-btn two"><i
                                                    class="icon-btn-icon"></i></a>
                                            <div class="header-action">
                                                <a href="{{route('posts.index')}}" class="btn--base"><i
                                                        class="icon-btn-icon"></i>Voir des annonces</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Header
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Banner
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        @yield('banner')
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Banner
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Scroll-To-Top
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <a href="index.html#" class="scrollToTop">
            <i class="las la-dot-circle"></i>
            <span>Top</span>
        </a>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Scroll-To-Top
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Call-widget
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!-- <div class="call-widget-wrapper">
            <button type="button" class="call-widget-btn"><span class="num"><i class="icon-call-icon"></i> +1 814 929
                    4263</span> <span class="arrow"></span></button>
            <div class="call-widget-form-area">
                <form class="book-form">
                    <div class="row justify-content-center mb-20-none">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                            <div class="book-select">
                                <label>From</label>
                                <div class="book-form-icon">
                                    <i class="icon-from-airplane"></i>
                                </div>
                                <select class="book-select form--control">
                                    <option value="dhaka" selected>Dhaka</option>
                                    <option value="london">London</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                            <div class="book-select">
                                <label>To</label>
                                <div class="book-form-icon">
                                    <i class="icon-to-airplane"></i>
                                </div>
                                <select class="book-select form--control">
                                    <option value="london" selected>London</option>
                                    <option value="dhaka">Dhaka</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                            <div class="book-select">
                                <label>Date</label>
                                <div class="book-form-icon">
                                    <i class="icon-schedule-icon"></i>
                                </div>
                                <select class="book-select form--control">
                                    <option value="25/12/2021" selected>25/12/2021</option>
                                    <option value="30/12/2021">30/12/2021</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 form-group">
                            <label>Passenger</label>
                            <div class="book-quantity">
                                <div class="book-plus-minus">
                                    <div class="dec qtybutton">-</div>
                                    <input class="book-plus-minus-box qty" type="text" name="qty" value="1" readonly>
                                    <div class="inc qtybutton">+</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 form-group">
                            <button type="submit" class="btn--base w-100 mt-10"><i class="icon-btn-icon"></i> Book
                                Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Call-widget
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


        @yield('content')
            

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start About
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--<section class="about-section bg-overlay-base ptb-120 bg_img" data-background="assets/images/bg/bg-1.png">
            <div class="about-element">
                <img src="assets/images/element/element-8.png" alt="element">
            </div>
            <div class="container">
                <div class="row justify-content-center mb-30-none">
                    <div class="col-xl-7 col-lg-7 mb-30">
                        <div class="about-content">
                            <span class="sub-title"><span>About</span> Flynext</span>
                            <h2 class="title">Private Jet Charters save your
                                time and give more comfort</h2>
                            <p>Flynext is the only way to fully travel on your terms. Whether it’s accessing a remote
                                destination or taking back control of productivity and flight scheduling</p>
                            <div class="about-book-area">
                                <div class="about-book-element">
                                    <img src="assets/images/element/element-7.png" alt="element">
                                </div>
                                <div class="about-book-left">
                                    <h3 class="call-title">Call for book an order</h3>
                                    <span class="call"><a href="tel:8-800-10-500">8-800-10-500</a></span>
                                </div>
                                <div class="about-book-right">
                                    <a href="service-details.html" class="btn--base"><i class="icon-btn-icon-v2"></i>
                                        Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 mb-30">
                        <div class="about-thumb-video">
                            <div class="video-main">
                                <div class="promo-video">
                                    <div class="waves-block">
                                        <div class="waves wave-1"></div>
                                        <div class="waves wave-2"></div>
                                        <div class="waves wave-3"></div>
                                    </div>
                                </div>
                                <a class="video-icon" data-rel="lightcase:myCollection"
                                    href="https://www.youtube.com/embed/Hw4ctvV25H0">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End About
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Feature
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--<section class="feature-section page-wrapper-two ptb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12 text-center">
                        <div class="section-header">
                            <span class="sub-title"> Découvrez les avantages <span> {{ config('app.name') }} </span> </span>
                            <h2 class="section-title">Discover Private Jet Benefits</h2>
                        </div>
                    </div>
                </div>
                <div class="feature-area">
                    <div class="row justify-content-center m-0">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="icon-world-svgrepo-com"></i>
                                </div>
                                <div class="feature-content">
                                    <h3 class="title">Luxury & Comfort Travel</h3>
                                    <p>As well as getting to fly to many different destinations as part of their job,
                                        airplane pilots get big discounts on money</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="icon-money-svgrepo-com-1"></i>
                                </div>
                                <div class="feature-content">
                                    <h3 class="title">Smart Costing Flight</h3>
                                    <p>Flying should be a pleasure and we’ll make your charter experience as luxurious
                                        and more comfortable as soon as possible.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="icon-briefcase"></i>
                                </div>
                                <div class="feature-content">
                                    <h3 class="title">Career progression</h3>
                                    <p>The first small jet-powered civil aircraft was the Morane-Saulnier MS.760 Paris,
                                        developed privately since 1940s</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="icon-note"></i>
                                </div>
                                <div class="feature-content">
                                    <h3 class="title">Flexible Schedule</h3>
                                    <p>Our technology consistently delivers the best pricing for charters – and the
                                        unique ability to buy individual seats all over the world.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="icon-job-announcement"></i>
                                </div>
                                <div class="feature-content">
                                    <h3 class="title">Excellent advantages</h3>
                                    <p>Search the world with ease and transparency.As the only tech-forward private
                                        aviation company, XO is able to bring you</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="icon-coolest-job"></i>
                                </div>
                                <div class="feature-content">
                                    <h3 class="title">Coolest Environment</h3>
                                    <p>Charter an entire jet, or offer the seats you don’t need through our app a need
                                        for full or even fractional jet ownership</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Feature
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Statistics
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--<section class="statistics-section bg-overlay-black ptb-120 bg_img" data-background="assets/images/bg/bg-2.png">
            <div class="container">
                <div class="statistics-area">
                    <div class="row mb-30-none">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                            <div class="statistics-item">
                                <div class="statistics-content">
                                    <div class="odo-area">
                                        <h3 class="odo-title odometer" data-odometer-final="95">0</h3>
                                    </div>
                                    <p>Professional Pilots</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                            <div class="statistics-item">
                                <div class="statistics-content">
                                    <div class="odo-area">
                                        <h3 class="odo-title odometer" data-odometer-final="68">0</h3>
                                    </div>
                                    <p>Jet Airplanes</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                            <div class="statistics-item">
                                <div class="statistics-content">
                                    <div class="odo-area">
                                        <h3 class="odo-title odometer" data-odometer-final="290">0</h3>
                                    </div>
                                    <p>World Airports</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                            <div class="statistics-item" data-aos="zoom-in" data-aos-duration="1200">
                                <div class="statistics-content">
                                    <div class="odo-area">
                                        <h3 class="odo-title odometer" data-odometer-final="195">0</h3>
                                    </div>
                                    <p>Directions</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Statistics
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

   <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Charter
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
   <!--<section class="charter-section pt-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-header-wrapper">
                        <div class="section-header">
                            <span class="sub-title">Des Opportunité Exceptionnelles</span>
                            <h2 class="section-title">Luxury Deals For You</h2>
                        </div>
                        <div class="slider-nav-area" data-aos="fade-left" data-aos-duration="1200">
                            <div class="slider-prev">
                                <i class="fas fa-chevron-left"></i>
                            </div>
                            <div class="slider-next">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="charter-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="charter-item">
                                    <div class="charter-thumb">
                                        <img src="assets/images/charter/charter-1.png" alt="charter">
                                    </div>
                                    <div class="charter-content">
                                        <h3 class="title"><a href="deals-details.html">Private Jet Charter</a></h3>
                                        <span class="sub-title">Legacy 600</span>
                                        <div class="charter-meta">
                                            <span class="seat">8 - 14 Seats</span>
                                            <span class="price">Price: $9,000/ hr</span>
                                        </div>
                                        <div class="charter-btn">
                                            <a href="service-details.html"><i class="icon-btn-icon-v2"></i> Book
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="charter-item">
                                    <div class="charter-thumb">
                                        <img src="assets/images/charter/charter-2.png" alt="charter">
                                    </div>
                                    <div class="charter-content">
                                        <h3 class="title"><a href="deals-details.html">Business Jet Charter</a></h3>
                                        <span class="sub-title">Beech BE300 Super King</span>
                                        <div class="charter-meta">
                                            <span class="seat">8 - 14 Seats</span>
                                            <span class="price">Price: $9,000/ hr</span>
                                        </div>
                                        <div class="charter-btn">
                                            <a href="service-details.html"><i class="icon-btn-icon-v2"></i> Book
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="charter-item">
                                    <div class="charter-thumb">
                                        <img src="assets/images/charter/charter-3.png" alt="charter">
                                    </div>
                                    <div class="charter-content">
                                        <h3 class="title"><a href="deals-details.html">Private Helicopter</a></h3>
                                        <span class="sub-title">Charter a A500</span>
                                        <div class="charter-meta">
                                            <span class="seat">8 - 14 Seats</span>
                                            <span class="price">Price: $9,000/ hr</span>
                                        </div>
                                        <div class="charter-btn">
                                            <a href="service-details.html"><i class="icon-btn-icon-v2"></i> Book
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="charter-item">
                                    <div class="charter-thumb">
                                        <img src="assets/images/charter/charter-4.png" alt="charter">
                                    </div>
                                    <div class="charter-content">
                                        <h3 class="title"><a href="deals-details.html">Air Ambulance</a></h3>
                                        <span class="sub-title">Beech BE300 Super King</span>
                                        <div class="charter-meta">
                                            <span class="seat">8 - 14 Seats</span>
                                            <span class="price">Price: $9,000/ hr</span>
                                        </div>
                                        <div class="charter-btn">
                                            <a href="service-details.html"><i class="icon-btn-icon-v2"></i> Book
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Charter
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Book-form
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--<section class="book-form-section ptb-120">
            <div class="container">
                <div class="book-form-area bg-overlay-black bg_img" data-background="assets/images/bg/bg-3.png">
                    <div class="row justify-content-center">
                        <div class="col-xl-12 text-center">
                            <div class="section-header white">
                                <span class="sub-title text-white"><span>Flynext</span> Book</span>
                                <h2 class="section-title">Book A Personal Flight</h2>
                            </div>
                            <form class="book-form">
                                <div class="row justify-content-center mb-20-none">
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                        <div class="book-select">
                                            <label>From</label>
                                            <div class="book-form-icon">
                                                <i class="icon-from-airplane"></i>
                                            </div>
                                            <select class="book-select form--control">
                                                <option value="dhaka" selected>Dhaka</option>
                                                <option value="london">London</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                        <div class="book-select">
                                            <label>To</label>
                                            <div class="book-form-icon">
                                                <i class="icon-to-airplane"></i>
                                            </div>
                                            <select class="book-select form--control">
                                                <option value="london" selected>London</option>
                                                <option value="dhaka">Dhaka</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                        <div class="book-select">
                                            <label>Date</label>
                                            <div class="book-form-icon">
                                                <i class="icon-schedule-icon"></i>
                                            </div>
                                            <select class="book-select form--control">
                                                <option value="25/12/2021" selected>25/12/2021</option>
                                                <option value="30/12/2021">30/12/2021</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                        <label>Passenger</label>
                                        <div class="book-quantity">
                                            <div class="book-plus-minus">
                                                <div class="dec qtybutton">-</div>
                                                <input class="book-plus-minus-box qty" type="text" name="qty" value="1"
                                                    readonly>
                                                <div class="inc qtybutton">+</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 form-group">
                                        <button type="submit" class="btn--base ml-auto mr-auto mt-30"><i
                                                class="icon-btn-icon"></i> Book Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Book-form
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Package
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--<section class="package-section section--bg ptb-120">
            <div class="package-element-one" data-aos="fade-right" data-aos-duration="1200">
                <img src="assets/images/element/element-24.png" alt="element">
            </div>
            <div class="package-element-two" data-aos="fade-left" data-aos-duration="1200">
                <img src="assets/images/element/element-1.png" alt="element">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12 text-center">
                        <div class="section-header white">
                            <span class="sub-title text-white"><span>Flynext</span> Package</span>
                            <h2 class="section-title">Flynext Tour Packages</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="package-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="package-item">
                                        <div class="package-thumb">
                                            <img src="https://themeim.com/demo/flynext/assets/images/package/package-9.png" alt="package">
                                            <div class="package-prize">
                                                <span>$115.00</span>
                                            </div>
                                        </div>
                                        <div class="package-content">
                                            <div class="package-content-header">
                                                <h3 class="title"><a href="package-details.html">Island of the Goods</a>
                                                </h3>
                                            </div>
                                            <div class="package-content-body">
                                                <ul class="package-list">
                                                    <li>Date : Thursday, Nov 4, 2021</li>
                                                    <li>Person : 2 Adults</li>
                                                </ul>
                                                <div class="package-content-footer">
                                                    <div class="package-btn">
                                                        <a href="service-details.html" class="custom-btn"><i
                                                                class="icon-btn-icon-v2 mr-2"></i> Book Now</a>
                                                    </div>
                                                    <div class="package-video">
                                                        <a data-rel="lightcase:myCollection"
                                                            href="https://www.youtube.com/embed/Hw4ctvV25H0">
                                                            <img src="https://themeim.com/demo/flynext/assets/images/icon/icon-17.png" alt="icon">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="package-item">
                                        <div class="package-thumb">
                                            <img src="https://themeim.com/demo/flynext/assets/images/package/package-10.png" alt="package">
                                            <div class="package-prize">
                                                <span>$110.00</span>
                                            </div>
                                        </div>
                                        <div class="package-content">
                                            <div class="package-content-header">
                                                <h3 class="title"><a href="package-details.html">City of the Goods</a>
                                                </h3>
                                            </div>
                                            <div class="package-content-body">
                                                <ul class="package-list">
                                                    <li>Date : Friday, Dec 7, 2021</li>
                                                    <li>Person : 3 Adults</li>
                                                </ul>
                                                <div class="package-content-footer">
                                                    <div class="package-btn">
                                                        <a href="service-details.html" class="custom-btn"><i
                                                                class="icon-btn-icon-v2 mr-2"></i> Book Now</a>
                                                    </div>
                                                    <div class="package-video">
                                                        <a data-rel="lightcase:myCollection"
                                                            href="https://www.youtube.com/embed/Hw4ctvV25H0">
                                                            <img src="https://themeim.com/demo/flynext/assets/images/icon/icon-17.png" alt="icon">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="package-item">
                                        <div class="package-thumb">
                                            <img src="https://themeim.com/demo/flynext/assets/images/package/package-11.png" alt="package">
                                            <div class="package-prize">
                                                <span>$120.00</span>
                                            </div>
                                        </div>
                                        <div class="package-content">
                                            <div class="package-content-header">
                                                <h3 class="title"><a href="package-details.html">Desert of the Goods</a>
                                                </h3>
                                            </div>
                                            <div class="package-content-body">
                                                <ul class="package-list">
                                                    <li>Date : Sunday, Sep 3, 2021</li>
                                                    <li>Person : 4 Adults</li>
                                                </ul>
                                                <div class="package-content-footer">
                                                    <div class="package-btn">
                                                        <a href="service-details.html" class="custom-btn"><i
                                                                class="icon-btn-icon-v2 mr-2"></i> Book Now</a>
                                                    </div>
                                                    <div class="package-video">
                                                        <a data-rel="lightcase:myCollection"
                                                            href="https://www.youtube.com/embed/Hw4ctvV25H0">
                                                            <img src="https://themeim.com/demo/flynext/assets/images/icon/icon-17.png" alt="icon">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-prev">
                                <i class="fas fa-chevron-left"></i>
                            </div>
                            <div class="slider-next">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Package
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Client
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--<section class="client-section ptb-120">
            <div class="client-element">
                <img src="https://themeim.com/demo/flynext/assets/images/client/map.png" alt="map">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12 text-center">
                        <div class="section-header">
                            <span class="sub-title">Témoignage sur <span>{{config('app.name')}}</span></span>
                            <h2 class="section-title">L'avis des utilisateurs</h2>
                        </div>
                    </div>
                </div>
                <div class="client-area">
                    <div class="row justify-content-center align-items-end mb-30-none">
                        <div class="col-xl-8 col-lg-8 col-md-6 mb-30">
                            <div class="client-slider-wrapper">
                                <div class="client-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="client-item">
                                                <div class="client-header">
                                                    <div class="client-quote">
                                                        <img src="https://themeim.com/demo/flynext/assets/images/client/quote.png" alt="client">
                                                    </div>
                                                    <div class="client-thumb">
                                                        <img src="https://themeim.com/demo/flynext/assets/images/client/client-3.png" alt="client">
                                                    </div>
                                                </div>
                                                <div class="client-content">
                                                    <p>We teach martial arts because we love it — not because we want to
                                                        make money on you.</p>
                                                </div>
                                                <div class="client-footer">
                                                    <div class="client-footer-left">
                                                        <h4 class="title"><a href="index.html#0">Randall Schwartz</a></h4>
                                                        <span class="sub-title">Sr. Consultant</span>
                                                    </div>
                                                    <div class="client-footer-right">
                                                        <span class="ratings">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star active"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="client-item">
                                                <div class="client-header">
                                                    <div class="client-quote">
                                                        <img src="https://themeim.com/demo/flynext/assets/images/client/quote.png" alt="client">
                                                    </div>
                                                    <div class="client-thumb">
                                                        <img src="https://themeim.com/demo/flynext/assets/images/client/client-4.png" alt="client">
                                                    </div>
                                                </div>
                                                <div class="client-content">
                                                    <p>We teach martial arts because we love it — not because we want to
                                                        make money on you.</p>
                                                </div>
                                                <div class="client-footer">
                                                    <div class="client-footer-left">
                                                        <h4 class="title">Andru Smith</h4>
                                                        <span class="sub-title">Marketing Manager</span>
                                                    </div>
                                                    <div class="client-footer-right">
                                                        <span class="ratings">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star active"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                            <div class="client-right-thumb">
                                <img src="https://themeim.com/demo/flynext/assets/images/client/client-big.png" alt="client">
                                <div class="client-thumb-overlay">
                                    <div class="video-main">
                                        <div class="promo-video">
                                            <div class="waves-block">
                                                <div class="waves wave-1"></div>
                                                <div class="waves wave-2"></div>
                                                <div class="waves wave-3"></div>
                                            </div>
                                        </div>
                                        <a class="video-icon" data-rel="lightcase:myCollection"
                                            href="https://www.youtube.com/embed/Hw4ctvV25H0">
                                            <i class="las la-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Client
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Brand
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--<div class="brand-section ptb-120">
            <div class="container">
                <div class="row justify-content-center mt-10-none mb-10-none">
                    <div class="col-xl-12 text-center">
                        <div class="brand-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <img src="assets/images/brand/brand-1.png" alt="brand">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <img src="assets/images/brand/brand-2.png" alt="brand">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <img src="assets/images/brand/brand-3.png" alt="brand">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <img src="assets/images/brand/brand-4.png" alt="brand">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <img src="assets/images/brand/brand-5.png" alt="brand">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Brand
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Blog
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--<section class="blog-section ptb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12 text-center">
                        <div class="section-header">
                            <span class="sub-title"><span>Flynext</span> Blog</span>
                            <h2 class="section-title">Latest News From Us</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-30-none">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img src="assets/images/blog/blog-1.png" alt="blog">
                            </div>
                            <div class="blog-content">
                                <div class="blog-post-meta">
                                    <span class="date">20 March 2022</span>
                                    <span class="comment">3 Comment</span>
                                </div>
                                <h3 class="title"><a href="blog-details.html">Charter flight of the Death Penalty in
                                        America</a></h3>
                                <p>With a vast array of popular private planes to choose from, travelling by private jet
                                    charter is the most efficient</p>
                                <div class="blog-btn">
                                    <a href="blog-details.html">Read More <i class="icon-Group-2361 ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img src="assets/images/blog/blog-2.png" alt="blog">
                            </div>
                            <div class="blog-content">
                                <div class="blog-post-meta">
                                    <span class="date">23 February 2022</span>
                                    <span class="comment">4 Comment</span>
                                </div>
                                <h3 class="title"><a href="blog-details.html">Our technology consistently deliver</a>
                                </h3>
                                <p>Private jet hire for leisure purposes allows yourself, your family and friends to
                                    travel in luxury, comfort and privacy. </p>
                                <div class="blog-btn">
                                    <a href="blog-details.html">Read More <i class="icon-Group-2361 ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img src="assets/images/blog/blog-3.png" alt="blog">
                            </div>
                            <div class="blog-content">
                                <div class="blog-post-meta">
                                    <span class="date">18 June 2022</span>
                                    <span class="comment">6 Comment</span>
                                </div>
                                <h3 class="title"><a href="blog-details.html">Search the world with ease and
                                        transparency</a></h3>
                                <p>It’s fast gaining in popularity as leisure time becomes increasingly precious and we
                                    value the experience of the journey</p>
                                <div class="blog-btn">
                                    <a href="blog-details.html">Read More <i class="icon-Group-2361 ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Blog
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Footer
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <footer class="footer-section section--bg pt-120">
            <div class="footer-element" data-aos="fade-left" data-aos-duration="1200">
                <img src= {{asset("assets/images/element/element-1.png")}}  alt="element">
            </div>
            <div class="container">
                <div class="footer-top-area">
                    <div class="row align-items-end mb-30-none">
                        <div class="col-xl-4 col-lg-3 col-md-6 mb-30">
                            <div class="footer-widget">
                                <div class="footer-logo">
                                    <a class="site-logo site-title" href="{{route('home')}}"><img src= {{asset("assets/images/logo.png")}} 
                                            alt="site-logo"></a>
                                </div>
                                <p> {{config('app.name')}} connecte des voyageurs disposant de kilos supplémentaires 
                                    dans leurs bagages avec des expéditeurs cherchant une solution d’envoi rapide et économique.</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                            <div class="footer-widget">
                                <h4 class="widget-title">EUROPE</h4>
                                <ul class="footer-list">
                                    <li><a href="index.html#0">Europe 45 Gloucester Road</a></li>
                                    <li><a href="index.html#0">London DT1M 3BF</a></li>
                                    <li><a href="index.html#0"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6 mb-30">
                            <div class="footer-widget">
                                <h4 class="widget-title">ASIA & PACIFIC</h4>
                                <ul class="footer-list">
                                    <li><a href="index.html#0">2473 Red Road Ste 98</a></li>
                                    <li><a href="index.html#0">Singapore SG</a></li>
                                    <li><a href="index.html#0"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                            <div class="footer-widget">
                                <h4 class="widget-title">NORTH AMERICA & AFRICA</h4>
                                <ul class="footer-list">
                                    <li><a href="index.html#0">Europe 45 Gloucester Road</a></li>
                                    <li><a href="index.html#0">London DT1M 3BF</a></li>
                                    <li><a href="index.html#0"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom-area">
                    <div class="row mb-30-none">
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                            <div class="footer-widget">
                                <h4 class="title">Get started</h4>
                                <ul class="footer-list">
                                    <li><a href="index.html#0">{{config('app.name')}}</a></li>
                                    <li><a href="index.html#0">S'inscrire</a></li>
                                    <li><a href="index.html#0">Se Connecter</a></li>
                                    <li><a href="index.html#0">Annonces</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                            <div class="footer-widget">
                                <h4 class="title">How it works</h4>
                                <ul class="footer-list">
                                    <li><a href="index.html#0">How it works</a></li>
                                    <li><a href="index.html#0">Ways to fly</a></li>
                                    <li><a href="index.html#0">Ways to buy</a></li>
                                    <li><a href="index.html#0">Private charter</a></li>
                                    <li><a href="index.html#0">Private Jet Cost</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 mb-30">
                            <div class="footer-widget">
                                <h4 class="title">About us</h4>
                                <ul class="footer-list">
                                    <li><a href="index.html#0">About us</a></li>
                                    <li><a href="index.html#0">News & press</a></li>
                                    <li><a href="index.html#0">Blog</a></li>
                                    <li><a href="index.html#0">FAQs</a></li>
                                    <li><a href="index.html#0">Careers</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                            <div class="footer-widget">
                                <h4 class="title">Newsletter</h4>
                                <p>Flynext was founded in 1991 by a group of safety-focused professionals erators.</p>
                                <form class="subscribe-form">
                                    <label class="subscribe-icon"><i class="las la-envelope"></i></label>
                                    <input type="text" class="form--control" placeholder="Enter Email">
                                    <button type="submit" class="btn--base">Subscribe Us <i
                                            class="icon-btn-icon ml-1"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright-area">
                    <div class="social-area">
                        <ul class="footer-social">
                            <li><a href="index.html#0"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="index.html#0" class="active"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="index.html#0"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="index.html#0"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <p>© 2022 Fly Next Airlines. All rights reserved.</p>
                </div>
            </div>
        </footer>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Footer
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    </div>




    <!-- jquery -->
    <script src=" {{asset('assets/js/jquery.js')}} "></script>
    <!-- bootstrap js -->
    <script src=" {{asset('assets/js/bootstrap.min.js')}} "></script>
    <!-- swipper js -->
    <script src=" {{asset('assets/js/swiper.min.js')}} "></script>
    <!-- lightcase js-->
    <script src="https://themeim.com/demo/flynext/assets/js/lightcase.js"></script>
    <!-- odometer js -->
    <script src=" {{asset('assets/js/odometer.min.js')}} "></script>
    <!-- viewport js -->
    <script src=" {{asset('assets/js/viewport.jquery.js')}} "></script>
    <!-- progress js -->
    <script src=" {{asset('assets/js/circle-progress.min.js')}} "></script>
    <!-- aos js file -->
    <script src=" {{asset('assets/js/aos.js')}} "></script>
    <!-- nice select js -->
    <script src="{{asset('assets/js/jquery.nice-select.js')}}"></script>
    <!-- main -->
    <script src="{{asset('assets/js/main.js')}}  "></script>


</body>

</html>