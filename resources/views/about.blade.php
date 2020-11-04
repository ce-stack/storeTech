@extends('layouts.app')

@section('content')
    

        
        <!-- Breadcrumb Area start -->
            <section class="breadcrumb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumb-content">
                                <h1 class="breadcrumb-hrading">About Page</h1>
                                <ul class="breadcrumb-links">
                                    <li><a href="index.html">Home</a></li>
                                    <li>About</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Breadcrumb Area End -->

            <!-- About Area Start -->
            <section class="about-area">
                <div class="container">

                    @foreach ($abouts as $about)
                    <div class="row">
                        <div class="col-lg-6 mb-res-sm-50px">
                            <div class="about-left-image">
                                <img src="assets/images/electronic/10.jpg" alt="" class="img-responsive" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content">
                                <div class="about-title">
                                    <h2>Welcome To Ecolife</h2>
                                </div>
                                <p class="mb-30px">
                                    {{ $about->description }}
                                </p>
                            </div>
                        </div>
                    </div>    
                    @endforeach
                    
                    <div class="row mt-60px">
                        
                        <div class="col-md-6 mb-res-sm-30px">
                            <div class="single-about">
                                <h4>Our Team</h4>
                                <p>
                                   {{ $about->team }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-about">
                                <h4>Our Company</h4>
                                <p>
                                    {{ $about->company }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- About Area End -->

            @endsection