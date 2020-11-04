<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    
        <!-- Google Fonts -->
        <link href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&amp;display=swap') }}" rel="stylesheet" />
        <!-- All CSS Flies   -->
        <!--===== Vendor CSS (Bootstrap & Icon Font) =====-->
        <!-- <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/plugins/font-awesome.min.css" />
        <link rel="stylesheet" href="assets/css/plugins/ionicons.min.css" /> -->
        <!--===== Plugins CSS (All Plugins Files) =====-->
        <!-- <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css" />
        <link rel="stylesheet" href="assets/css/plugins/meanmenu.css" />
        <link rel="stylesheet" href="assets/css/plugins/nice-select.css" />
        <link rel="stylesheet" href="assets/css/plugins/owl-carousel.css" />
        <link rel="stylesheet" href="assets/css/plugins/slick.css" /> -->
        <!--===== Main Css Files =====-->
        <!-- <link rel="stylesheet" href="assets/css/style.css" /> -->
        <!-- ===== Responsive Css Files ===== -->
        <!-- <link rel="stylesheet" href="assets/css/responsive.css" /> -->

        <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->

        <link rel="stylesheet" href="{{ asset('assets/css/vendor/plugins.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
        <link rel="stylesheet" href="{{ asset ('assets/css/responsive.min.css')}}">
        @yield('style')
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
<!-- Header Start -->
<header class="main-header">
    <!-- Header Buttom Start -->
    <div class="header-navigation sticky-nav">
        <div class="container-fluid">
            <div class="row">
                <!-- Logo Start -->
                <div class="col-md-2 col-sm-2">
                    <div class="logo">
                        <a href="index.html"><img src="assets/images/logo/logo.jpg" alt="" /></a>
                    </div>
                </div>
                <!-- Logo End -->
                <!-- Navigation Start -->
                <div class="col-md-10 col-sm-10">
                    <!--Main Navigation Start -->
                    <div class="main-navigation d-none d-lg-block">
                        <ul>
                            <li class="menu-dropdown">
                                <a href="{{ route('welcome') }}">Home </a>
                                
                            </li>
                          
                            <li>
                                <a href="{{ route('orders')}}">Your Previous Orders</a>
                                </li>
                                
                                
                            <li>
                                <a href="{{ route('about')}}">About Us</a>
                                </li>
                          
                        </ul>
                    </div>
                    <!--Main Navigation End -->
                    <!--Header Bottom Account Start -->
                    <div class="header_account_area">
                        <!--Seach Area Start -->
                        <div class="header_account_list search_list">
                            <a href="javascript:void(0)"><i class="ion-ios-search-strong"></i></a>
                            <div class="dropdown_search">
                                <form action="#">
                                    <input placeholder="Search entire store here ..." type="text" />
                                    <div class="search-category">
                                        <select class="bootstrap-select" name="poscats">
                                            <option value="0">All categories</option>
                                            <option value="104">
                                                Fresh Food
                                            </option>
                                            <option value="183">
                                                - - Fresh Fruit
                                            </option>
                                            <option value="187">
                                                - - - - Bananas
                                            </option>
                                            <option value="188">
                                                - - - - Apples &amp; Pears
                                            </option>
                                            <option value="189">
                                                - - - - Berries &amp; Cherries
                                            </option>
                                            <option value="190">
                                                - - - - Oranges &amp; Citrus Fruit
                                            </option>
                                            <option value="191">
                                                - - - - Grapes
                                            </option>
                                            <option value="184">
                                                - - Fresh Vegetables
                                            </option>
                                            <option value="192">
                                                - - - - Potatoes &amp; Sweet Potatoes
                                            </option>
                                            <option value="193">
                                                - - - - Onions &amp; Leeks
                                            </option>
                                            <option value="194">
                                                - - - - Carrots &amp; Root Vegetables
                                            </option>
                                            <option value="195">
                                                - - - - Broccoli &amp; Cauliflower
                                            </option>
                                            <option value="196">
                                                - - - - Cabbages &amp; Greens
                                            </option>
                                            <option value="185">
                                                - - Fresh Salad &amp; Dips
                                            </option>
                                            <option value="197">
                                                - - - - Lettuce &amp; Salad bags
                                            </option>
                                            <option value="198">
                                                - - - - Tomatoes
                                            </option>
                                            <option value="199">
                                                - - - - Cucumber
                                            </option>
                                            <option value="200">
                                                - - - - Celery
                                            </option>
                                            <option value="201">
                                                - - - - Peppers
                                            </option>
                                            <option value="186">
                                                - - Milk, Butter &amp; Eggs
                                            </option>
                                            <option value="202">
                                                - - - - Milk
                                            </option>
                                            <option value="203">
                                                - - - - Spreads &amp; Margarine
                                            </option>
                                            <option value="204">
                                                - - - - Fresh Cream &amp; Custard
                                            </option>
                                            <option value="205">
                                                - - - - Eggs
                                            </option>
                                            <option value="206">
                                                - - - - Baking &amp; Cooking
                                            </option>
                                        </select>
                                    </div>
                                    <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                </form>
                            </div>
                        </div>
                        <!--Seach Area End -->
                        <!--Contact info Start -->
                        <div class="contact-link">
                            <div class="phone">
                                <p>Call us:</p>
                                <a href="tel:(+800)345678">(+800)345678</a>
                            </div>
                        </div>
                        <!--Contact info End -->
                        <!--Cart info Start -->
                        <div class="cart-info d-flex">
                            <div class="mini-cart-warp">
                                <a href="{{ route('cart.show')}}" class="count-cart"><span>{{ session()->has('cart') ? session()->get('cart')->totalQty : '0' }}</span></a>
                                
                            </div>
                        </div>
                        <!--Cart info End -->
                    </div>
                </div>
            </div>
            <!-- mobile menu -->
            <div class="mobile-menu-area">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            <li>
                                <a href="{{ route('welcome') }}">HOME</a>
                                <ul>
                                  
                                    <li>
                                        <a href="{{ route('furnitrue') }}">Home Furniture</a>
                                       
                                    </li>
                                    <li>
                                        <a href="{{ route('medical') }}">Home Medical</a>   
                                    </li>
                                    
                                </ul>
                                <li>
                                    <a href="{{ route('orders')}}">Your Previous Orders</a>
                                </li>
                            </li>
                            

                            
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- mobile menu end-->
        </div>
    </div>
    <!--Header Bottom Account End -->
</header>
<!-- Header End -->
<div class="slider-area">
    <div class="slider-active-3 owl-carousel slider-hm8 owl-dot-style">
        <!-- Slider Single Item Start -->
        <div class="slider-height-6 d-flex align-items-start justify-content-start bg-img" style="background-image: url(assets/images/slider-image/sample-19.jpg);">
            <div class="container">
                <div class="slider-content-1 slider-animated-1 text-left">
                    {{-- <span class="animated">NOT FRIED NOT BAKED</span> --}}
                    <h1 class="animated">
                        Digital And Medical <br />
                        Furntirue Products
                    </h1>
                    {{-- <p class="animated">Free Shipping On Qualified Orders Over $35</p> --}}
                    <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                </div>
            </div>
        </div>
        <!-- Slider Single Item End -->
        <!-- Slider Single Item Start -->
        <div class="slider-height-6 d-flex align-items-start justify-content-start bg-img" style="background-image: url(assets/images/slider-image/sample-20.jpg);">
            <div class="container">
                <div class="slider-content-1 slider-animated-1 text-left">
                    <span class="animated">100% Quality</span>
                    <h1 class="animated">
                       Your Store <br />
                        Is Here
                    </h1>
                    {{-- <p class="animated">fresh New pack Brusting Fruits</p> --}}
                    <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                </div>
            </div>
        </div>
        <!-- Slider Single Item End -->
    </div>
</div>
<!-- Slider Arae End -->
<!-- Static Area Start -->
<section class="static-area mtb-60px">
    <div class="container">
        <div class="static-area-wrap">
            <div class="row">
                <!-- Static Single Item Start -->
                {{-- <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                    <div class="single-static pb-res-md-0 pb-res-sm-0 pb-res-xs-0">
                        <img src="assets/images/icons/static-icons-1.png" alt="" class="img-responsive" />
                        <div class="single-static-meta">
                            <h4>Free Shipping</h4>
                            <p>On all orders over $75.00</p>
                        </div>
                    </div>
                </div> --}}
                <!-- Static Single Item End -->
                <!-- Static Single Item Start -->
                <div class="col-lg-4 col-xs-12 col-md-6 col-sm-6">
                    <div class="single-static pb-res-md-0 pb-res-sm-0 pb-res-xs-0 pt-res-xs-20">
                        <img src="assets/images/icons/static-icons-2.png" alt="" class="img-responsive" />
                        <div class="single-static-meta">
                            <h4>Free Returns</h4>
                            <p>Returns are free within 9 days</p>
                        </div>
                    </div>
                </div>
                <!-- Static Single Item End -->
                <!-- Static Single Item Start -->
                <div class="col-lg-4 col-xs-12 col-md-6 col-sm-6">
                    <div class="single-static pt-res-md-30 pb-res-sm-30 pb-res-xs-0 pt-res-xs-20">
                        <img src="assets/images/icons/static-icons-3.png" alt="" class="img-responsive" />
                        <div class="single-static-meta">
                            <h4>100% Payment Secure</h4>
                            <p>Your payment are safe with us.</p>
                        </div>
                    </div>
                </div>
                <!-- Static Single Item End -->
                <!-- Static Single Item Start -->
                <div class="col-lg-4 col-xs-12 col-md-6 col-sm-6">
                    <div class="single-static pt-res-md-30 pb-res-sm-30 pt-res-xs-20">
                        <img src="assets/images/icons/static-icons-4.png" alt="" class="img-responsive" />
                        <div class="single-static-meta">
                            <h4>Support 24/7</h4>
                            <p>Contact us 24 hours a day</p>
                        </div>
                    </div>
                </div>
                <!-- Static Single Item End -->
            </div>
        </div>
    </div>
</section>
        <main class="py-4">
            @yield('content')
        </main>

        <!-- Footer Area start -->
        <footer class="footer-area">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <!-- footer single wedget -->
                        <div class="col-md-6 col-lg-4">
                            <!-- footer logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="assets/images/logo/footer-logo.png" alt="" /></a>
                            </div>
                            <!-- footer logo -->
                            <div class="about-footer">
                                <p class="text-info">We are a team of designers and developers that create high quality HTML template</p>
                                <div class="need-help">
                                    <p class="phone-info">
                                        NEED HELP?
                                        <span>
                                            (+800) 345 678 <br />
                                            (+800) 123 456
                                        </span>
                                    </p>
                                </div>
                                <div class="social-info">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="ion-social-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-youtube"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-google"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- footer single wedget -->
                        {{-- <div class="col-md-6 col-lg-2 mt-res-sx-30px mt-res-md-30px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Information</h4>
                                <div class="footer-links">
                                    <ul>
                                       
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Secure Payment</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Sitemap</a></li>
                                        <li><a href="#">Stores</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                        <!-- footer single wedget -->
                        <div class="col-md-6 col-lg-2 mt-res-md-50px mt-res-sx-30px mt-res-md-30px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Custom Links</h4>
                                <div class="footer-links">
                                    <ul>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Prices Drop</a></li>
                                        <li><a href="#">New Products</a></li>
                                        <li><a href="#">Best Sales</a></li>
                                        <li><a href="{{ route('orders') }}">Your Orders</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- footer single wedget -->
                        <div class="col-md-6 col-lg-4 mt-res-md-50px mt-res-sx-30px mt-res-md-30px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Newsletter</h4>
                                <div class="subscrib-text">
                                    <p>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</p>
                                </div>
                                <div id="mc_embed_signup" class="subscribe-form">
                                    <form
                                        id="mc-embedded-subscribe-form"
                                        class="validate"
                                        novalidate=""
                                        target="_blank"
                                        name="mc-embedded-subscribe-form"
                                        method="post"
                                        action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef"
                                    >
                                        <div id="mc_embed_signup_scroll" class="mc-form">
                                            <input class="email" type="email" required="" placeholder="Enter your email here.." name="EMAIL" value="" />
                                            <div class="mc-news" aria-hidden="true" style="position: absolute; left: -5000px;">
                                                <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" />
                                            </div>
                                            <div class="clear">
                                                <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Sign Up" />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="img_app">
                                    <a href="#"><img src="assets/images/icons/app_store.png" alt="" /></a>
                                    <a href="#"><img src="assets/images/icons/google_play.png" alt="" /></a>
                                </div>
                            </div>
                        </div>
                        <!-- footer single wedget -->
                    </div>
                </div>
            </div>
            <!--  Footer Bottom Area start -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <p class="copy-text">Copyright © <a href="https://hasthemes.com/"> HasThemes</a>. All Rights Reserved</p>
                        </div>
                        <div class="col-md-6 col-lg-8">
                            <img class="payment-img" src="assets/images/icons/payment.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <!--  Footer Bottom Area End-->
        </footer>
        <!--  Footer Area End -->
    </div>
    <script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
        <script src="{{asset ('assets/js/vendor/modernizr-3.7.1.min.js') }}"></script>

        <!--====== Plugins js ======-->
        <!-- <script src="assets/js/plugins/bootstrap.min.js"></script>
        <script src="assets/js/plugins/popper.min.js"></script>
        <script src="assets/js/plugins/meanmenu.js"></script>
        <script src="assets/js/plugins/owl-carousel.js"></script>
        <script src="assets/js/plugins/jquery.nice-select.js"></script>
        <script src="assets/js/plugins/countdown.js"></script>
        <script src="assets/js/plugins/elevateZoom.js"></script>
        <script src="assets/js/plugins/jquery-ui.min.js"></script>
        <script src="assets/js/plugins/slick.js"></script>
        <script src="assets/js/plugins/scrollup.js"></script>
        <script src="assets/js/plugins/range-script.js"></script> -->

        <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->

        <script src="{{ asset('assets/js/plugins.min.js') }}"></script>

        <!-- Main Activation JS -->
        <script src="{{ asset('assets/js/main.js') }}"></script>
        @include('sweetalert::alert')

        @yield('script')
</body>
</html>
