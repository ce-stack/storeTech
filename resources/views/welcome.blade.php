@extends('layouts.app')

@section('content')

            <section class="best-sells-area mb-30px">
                <div class="container">
                    <!-- Section Title Start -->
                    
                    <!-- Section Title End -->
                    <!-- Best Sell Slider Carousel Start -->
                    <div class="best-sell-slider owl-carousel owl-nav-style">
                        <!-- Single Item -->
                        @foreach ($allProducts as $product)
                            
                   
                        <article class="list-product">
                            <div class="img-block">
                                <a href="#" class="thumbnail">
                                <img class="first-img" src="{{asset('assets/images/electronic')}}/{{ $product->image }}" alt="" />
                                    
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                           
                            <div class="product-decs">
                                <a class="inner-link" href="#"><span>STUDIO DESIGN</span></a>
                            <h2><a href="#" class="product-link">{{ $product->title }}</a></h2>
                               
                                <div class="pricing-meta">
                                    <ul>
                                    <li class="current-price">€: {{$product->price}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                <li class="cart"><a class="cart-btn" href="{{ route('product.show' , $product->id) }}">View Product </a></li>
                                    
                                </ul>
                            </div>
                        </article>
                        @endforeach
                        <!-- Single Item -->
                    </div>


                    <div class="best-sell-slider owl-carousel owl-nav-style">
                        <!-- Single Item -->
                        @foreach ($allProductsTwo as $product)
                            
                   
                        <article class="list-product">
                            <div class="img-block">
                                <a href="#" class="thumbnail">
                                <img class="first-img" src="{{asset('assets/images/electronic')}}/{{ $product->image }}" alt="" />
                                    
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                           
                            <div class="product-decs">
                                <a class="inner-link" href="#"><span>STUDIO DESIGN</span></a>
                            <h2><a href="#" class="product-link">{{ $product->title }}</a></h2>
                               
                                <div class="pricing-meta">
                                    <ul>
                                    <li class="current-price">€: {{$product->price}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                <li class="cart"><a class="cart-btn" href="{{ route('product.show' , $product->id) }}">View Product </a></li>
                                   
                                   
                                </ul>
                            </div>
                        </article>
                        @endforeach
                        <!-- Single Item -->
                    </div>
                    <!-- Best Sells Carousel End -->
                </div>
            </section>
            <!-- Best Sells Slider End -->

            <!-- Category Area Start -->
           
            <div class="banner-area-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="banner-inner">
                                <a href="#"><img src="assets/images/banner-image/34.jpg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brand-area">
                <div class="container">
                    <div class="brand-slider owl-carousel owl-nav-style owl-nav-style-2">
                        <div class="brand-slider-item">
                            <a href="#"><img src="assets/images/brand-logo/1.jpg" alt="" /></a>
                        </div>
                        <div class="brand-slider-item">
                            <a href="#"><img src="assets/images/brand-logo/2.jpg" alt="" /></a>
                        </div>
                        <div class="brand-slider-item">
                            <a href="#"><img src="assets/images/brand-logo/3.jpg" alt="" /></a>
                        </div>
                        <div class="brand-slider-item">
                            <a href="#"><img src="assets/images/brand-logo/4.jpg" alt="" /></a>
                        </div>
                        <div class="brand-slider-item">
                            <a href="#"><img src="assets/images/brand-logo/5.jpg" alt="" /></a>
                        </div>
                        <div class="brand-slider-item">
                            <a href="#"><img src="assets/images/brand-logo/1.jpg" alt="" /></a>
                        </div>
                        <div class="brand-slider-item">
                            <a href="#"><img src="assets/images/brand-logo/2.jpg" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Brand area end -->
            <!-- Footer Area start -->
            @endsection    