@extends('frontend.layouts.master')

@section('content')


    <!-- ***** Benifits Area Start ***** -->
    <section id="benifits" class="section benifits-area ptb_100">
        <div class="container">
            <div class="row">
                <!-- Benifits Item -->
                @foreach($benifits as $post)
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up">
                    <div class="benifits-item text-center p-3">
                        <div class="feature-icon">
                            <img src="{{$post->image}}" alt="">
                        </div>
                        <!-- Benifits Text -->
                        <div class="benifits-text">
                            <h3 class="mb-2">{{$post->title}}</h3>
                            <p>{!!$post->description!!}</p>
                        </div>
                    </div>
                 </div>
                 @endforeach

            </div>
        </div>
    </section>
    <!-- ***** Benifits Area End ***** -->

    <!-- ***** About App Area Start ***** -->
    <section class="section about-app-area ptb_100">
        <div class="shapes-container">
            <div class="shape-1"></div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <!-- About Text -->
                    <div class="about-text">
                        <!-- Headings -->
                        <div class="headings d-flex align-items-center mb-4">
                            <span class="text-uppercase d-none d-sm-block">About</span>
                              @foreach($abouts as $post)
                            <!-- <h2 class="text-capitalize">Easy To Manage All Your Transaction Using EPS App</h2> -->
                            <h2 class="text-capitalize">{{$post->title}}</h2>
                        </div>
                        <p class="my-3">
                          <p class="my-3" style="margin-right: 0px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 1.8; color: rgb(119, 119, 119); font-family: Poppins, sans-serif;">
                          {!!$post->description1!!}
                          </p>
                          <p class="d-none d-sm-block my-3" style="margin-right: 0px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 1.8; color: rgb(119, 119, 119); font-family: Poppins, sans-serif;">
                              {!!$post->description2!!}
                          </p>
                        </p>
                        @endforeach
                        <!-- <p class="my-3">
                          <p class="my-3" style="margin-right: 0px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 1.8; color: rgb(119, 119, 119); font-family: Poppins, sans-serif;">EPS strives to make digital transaction effortless by enabling mass people with an easy and instant payment system. Easy Payment System (EPS) is an innovative payment solution permitted by Bangladesh Bank as a Payment System Operator (PSO). EPS eases the transaction providing services including fund transfer, merchant payment, bill payment, balance enquiry, mobile top-up, etc.
                          </p>
                          <p class="d-none d-sm-block my-3" style="margin-right: 0px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 1.8; color: rgb(119, 119, 119); font-family: Poppins, sans-serif;">EPS is developed by Optimum Solution and Services Ltd. (OSSL), a global technology solution provider.
                          </p>
                        </p> -->
                        <!-- Store Buttons -->
                        <div class="button-group store-buttons">
                            <a href="#" data-toggle="modal" data-target="#modal-default"  class="btn btn-bordered">
                                <i class="icofont icofont-brand-android-robot dsp-tc"></i>
                                <p class="dsp-tc">GET IT ON
                                    <br> <span>Google Play</span></p>
                            </a>
                            <a href="#" data-toggle="modal" data-target="#modal-default"  class="btn btn-bordered">
                                <i class="icofont icofont-brand-apple dsp-tc"></i>
                                <p class="dsp-tc">AVAILABLE ON
                                    <br> <span>Apple Store</span></p>
                            </a>
                        </div>
                    </div>
                </div>
                  @foreach($abouts as $post)
                <div class="col-12 col-lg-6">
                    <!-- About Thumb -->
                    <div class="about-thumb text-center d-none d-lg-block">
                        <img src="{{$post->image}}" alt="">
                    </div>
                </div>
                  @endforeach
            </div>
        </div>
    </section>
    <!-- ***** About App Area End ***** -->

    <!-- ***** Work Area Start ***** -->
    <section class="section work-area ptb_100">
        <!-- Work Slider Wrapper -->
        <div class="work-wrapper d-none d-md-block">
            <div class="work-slider-wrapper" data-aos="zoom-in">
                <!-- Work Slider -->
                <ul class="work-slider owl-carousel">
                    <li class="slide-item">
                        <img src="{{asset('assets/img/screenshots/1.png')}}" alt="">
                    </li>
                    <li class="slide-item">
                        <img src="{{asset('assets/img/screenshots/2.png')}}" alt="">
                    </li>
                    <li class="slide-item">
                        <img src="{{asset('assets/img/screenshots/3.png')}}" alt="">
                    </li>
                    <li class="slide-item">
                        <img src="{{asset('assets/img/screenshots/4.png')}}" alt="">
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center d-md-none">
                <!-- Section Heading -->
                <div class="col-12 col-md-10 col-lg-6">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2 class="text-capitalize">Few steps to Setup</h2>
                        <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                        <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                    </div>
                </div>
            </div>
            <!-- Work Content -->
            <div class="row justify-content-end justify-content-lg-between work-content" id="work-slider-pager">
                <div class="col-12 col-sm-6">
                    <a href="#" class="pager-item active">
                        <!-- Single Work -->
                        <div class="single-work d-inline-block text-center p-4">
                            <h3 class="mb-2">Balance Transfer</h3>
                            <p>Under this service, an account holder in a bank/MFS/e-wallet can send money from his/her account to a receiver’s bank/MFS/e-wallet account using EPS.</p>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6">
                    <a href="#" class="pager-item">
                        <!-- Single Work -->
                        <div class="single-work d-inline-block text-center p-4">
                            <h3 class="mb-2">Bill and Fee Payment</h3>
                            <p>Using EPS App, the registered user will be able to pay bills and fees.</p>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6">
                    <a href="#" class="pager-item">
                        <!-- Single Work -->
                        <div class="single-work d-inline-block text-center p-4">
                            <h3 class="mb-2">Merchant Payment</h3>
                            <p>Any offline merchant can use EPS to receive the payment into his/her bank/MFS/e-wallet account from a walking customer’s bank/MFS/e-wallet account.</p>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6">
                    <a href="#" class="pager-item">
                        <!-- Single Work -->
                        <div class="single-work d-inline-block text-center p-4">
                            <h3 class="mb-2">Corporate Services</h3>
                            <p>EPS will provide one-stop solution for the corporate clients dealing with large number of transactions. Easy Wage Disbursement is one of such services to be availed from EPS.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Work Area End ***** -->

    <!-- ***** Features Area Start ***** -->
    <section id="features" class="section features-area ptb_100">
        <div class="shapes-container">
            <div class="shape bg-shape"></div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="features-text">
                        <!-- Headings -->
                        <div class="headings d-flex align-items-center mb-4">
                            <span class="text-uppercase d-none d-sm-block">Features</span>
                            <h2 class="text-capitalize">EPS Is The Only All In One Payment System To Do Any Kind Of Transaction</h2>
                        </div>
                        <p class="my-3">VISION To accelerate the transformation to achieve a sustainable digital financial eco-system. MISSION To minimize the barriers of digital transaction, and support financial institutions by facilitating their customers/clients with digital payment services.</p>
                        <!-- Counter List -->
                        <!--<div class="counter-list">
                            <ul>
                                <li>

                                    <div class="single-counter px-4 py-3 text-center">

                                        <div class="counter-icon">
                                            <i class="icofont-repair"></i>
                                        </div>

                                        <div class="counter-text">
                                            <span class="counter d-inline-block mt-3 mb-2">2350</span>
                                            <h5>Users</h5>
                                        </div>
                                    </div>
                                </li>
                                <li>

                                    <div class="single-counter px-4 py-3 text-center">

                                        <div class="counter-icon">
                                            <i class="icofont-heart-alt"></i>
                                        </div>

                                        <div class="counter-text">
                                            <span class="counter d-inline-block mt-3 mb-2">1895</span>
                                            <h5>Acounts</h5>
                                        </div>
                                    </div>
                                </li>
                                <li>

                                    <div class="single-counter px-4 py-3 text-center">

                                        <div class="counter-icon">
                                            <i class="icofont-beard"></i>
                                        </div>

                                        <div class="counter-text">
                                            <span class="counter d-inline-block mt-3 mb-2">1580</span>
                                            <h5>Developers</h5>
                                        </div>
                                    </div>
                                </li>
                                <li>

                                    <div class="single-counter px-4 py-3 text-center">

                                        <div class="counter-icon">
                                            <i class="icofont-safety"></i>
                                        </div>

                                        <div class="counter-text">
                                            <span class="counter d-inline-block mt-3 mb-2">1358</span>
                                            <h5>Download</h5>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>-->
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 offset-lg-1">
                    <!-- Featured Items -->
                    <div class="featured-items">
                        <ul>
                            <li>
                                <!-- Single Features Item -->
                                <div class="single-features media p-3">
                                    <!-- Features Title -->
                                    <div class="features-title mr-3">
                                        <img src="assets/img/icon/icon-1.svg" alt="">
                                    </div>
                                    <!-- Features Text -->
                                    <div class="features-text media-body">
                                        <h3>Fast Transaction</h3>
                                        <p>EPS aims to enable its users with an obstacle free transaction.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <!-- Single Features Item -->
                                <div class="single-features media p-3">
                                    <!-- Features Title -->
                                    <div class="features-title mr-3">
                                        <img src="assets/img/icon/icon-2.svg" alt="">
                                    </div>
                                    <!-- Features Text -->
                                    <div class="features-text media-body">
                                        <h3>Instant Banking service</h3>
                                        <p>Multiple banking services will be integrated into a single payment system.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <!-- Single Features Item -->
                                <div class="single-features media p-3">
                                    <!-- Features Title -->
                                    <div class="features-title mr-3">
                                        <img src="assets/img/icon/icon-3.svg" alt="">
                                    </div>
                                    <!-- Features Text -->
                                    <div class="features-text media-body">
                                        <h3>Balance Inquiry</h3>
                                        <p>Users can check available balance& transaction history from anywhere, any time.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <!-- Single Features Item -->
                                <div class="single-features media p-3">
                                    <!-- Features Title -->
                                    <div class="features-title mr-3">
                                        <img src="assets/img/icon/icon-4.svg" alt="">
                                    </div>
                                    <!-- Features Text -->
                                    <div class="features-text media-body">
                                        <h3>Mobile Top-up</h3>
                                        <p>Hassle free Mobile Recharge will be in your hand.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Area End ***** -->

    <!-- ***** Screenshots Area Start ***** -->
    <section id="screenshots" class="section screenshots-area ptb_100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- App Screenshot Slider Area -->
                    <div class="app-screenshots">
                        <!-- Single Screenshot Item -->
                        <div class="single-screenshot">
                            <img src="assets/img/screenshots/1.png" alt="">
                            <!-- Screenshots Overlay -->
                            <div class="screenshots-overlay">
                                <a href="assets/img/screenshots/1.png" data-fancybox="images"><i class="icofont-image"></i></a>
                            </div>
                        </div>
                        <!-- Single Screenshot Item -->
                        <div class="single-screenshot">
                            <img src="assets/img/screenshots/2.png" alt="">
                            <!-- Screenshots Overlay -->
                            <div class="screenshots-overlay">
                                <a href="assets/img/screenshots/2.png" data-fancybox="images"><i class="icofont-image"></i></a>
                            </div>
                        </div>
                        <!-- Single Screenshot Item -->
                        <div class="single-screenshot">
                            <img src="assets/img/screenshots/3.png" alt="">
                            <!-- Screenshots Overlay -->
                            <div class="screenshots-overlay">
                                <a href="assets/img/screenshots/3.png" data-fancybox="images"><i class="icofont-image"></i></a>
                            </div>
                        </div>
                        <!-- Single Screenshot Item -->
                        <div class="single-screenshot">
                            <img src="assets/img/screenshots/4.png" alt="">
                            <!-- Screenshots Overlay -->
                            <div class="screenshots-overlay">
                                <a href="assets/img/screenshots/4.png" data-fancybox="images"><i class="icofont-image"></i></a>
                            </div>
                        </div>
                        <!-- Single Screenshot Item -->
                        <div class="single-screenshot">
                            <img src="assets/img/screenshots/5.png" alt="">
                            <!-- Screenshots Overlay -->
                            <div class="screenshots-overlay">
                                <a href="assets/img/screenshots/5.png" data-fancybox="images"><i class="icofont-image"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Screenshots Area End ***** -->

    <!-- ***** Price Plan Area Start ***** -->
    <!-- <section id="pricing" class="section price-plan-area ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-6"> -->
                    <!-- Section Heading -->
                    <!-- <div class="section-heading text-center">
                        <h2 class="text-capitalize">Affordable Pricing Plans</h2>
                        <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                        <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="price-plan-wrapper">
                    <div class="single-price-plan">
                        <div class="price-header d-flex align-items-center justify-content-between my-4 px-3">
                            <h4 class="plan-title text-uppercase">
                                Starter
                            </h4>
                            <div class="plan-cost">
                                <span class="plan-price">$19</span>
                                <span class="plan-type text-uppercase">/month</span>
                            </div>
                        </div>
                        <ul class="plan-features pb-3">
                            <li><i class="icofont-check"></i>5GB Linux Web Space</li>
                            <li><i class="icofont-check"></i>5 MySQL Databases</li>
                            <li><i class="icofont-check"></i>Unlimited Email</li>
                            <li><i class="icofont-check"></i>250Gb mo Transfer</li>
                            <li><i class="icofont-close"></i>24/7 Tech Support</li>
                            <li><i class="icofont-close"></i>Daily Backups</li>
                        </ul>
                        <div class="plan-select">
                            <a class="btn btn-bordered text-uppercase" href="#">Select Plan</a>
                        </div>
                    </div>
                    <div class="single-price-plan">
                        <div class="price-header d-flex align-items-center justify-content-between my-4 px-3">
                            <h4 class="plan-title text-uppercase">
                                Basic
                            </h4>
                            <div class="plan-cost">
                                <span class="plan-price">$29</span>
                                <span class="plan-type text-uppercase">/month</span>
                            </div>
                        </div>
                        <ul class="plan-features pb-3">
                            <li><i class="icofont-check"></i>10GB Linux Web Space</li>
                            <li><i class="icofont-check"></i>10 MySQL Databases</li>
                            <li><i class="icofont-check"></i>Unlimited Email</li>
                            <li><i class="icofont-check"></i>500Gb mo Transfer</li>
                            <li><i class="icofont-check"></i>24/7 Tech Support</li>
                            <li><i class="icofont-close"></i>Daily Backups</li>
                        </ul>
                        <div class="plan-select">
                            <a class="btn btn-bordered text-uppercase" href="#">Select Plan</a>
                        </div>
                    </div>
                    <div class="single-price-plan featured">
                        <div class="price-header d-flex align-items-center justify-content-between my-4 px-3">
                            <h4 class="plan-title text-uppercase">
                                Pro
                            </h4>
                            <div class="plan-cost">
                                <span class="plan-price">$49</span>
                                <span class="plan-type text-uppercase">/month</span>
                            </div>
                        </div>
                        <ul class="plan-features pb-3">
                            <li><i class="icofont-check"></i>25GB Linux Web Space</li>
                            <li><i class="icofont-check"></i>25 MySQL Databases</li>
                            <li><i class="icofont-check"></i>Unlimited Email</li>
                            <li><i class="icofont-check"></i>2000Gb mo Transfer</li>
                            <li><i class="icofont-check"></i>24/7 Tech Support</li>
                            <li><i class="icofont-check"></i>Daily Backups</li>
                        </ul>
                        <div class="plan-select">
                            <a class="btn btn-bordered text-uppercase" href="#">Select Plan</a>
                        </div>
                    </div>
                    <div class="single-price-plan">
                        <div class="price-header d-flex align-items-center justify-content-between my-4 px-3">
                            <h4 class="plan-title text-uppercase">
                                Ultra
                            </h4>
                            <div class="plan-cost text-uppercase">
                                <span class="plan-price">$99</span>
                                <span class="plan-type">/month</span>
                            </div>
                        </div>
                        <ul class="plan-features pb-3">
                            <li><i class="icofont-check"></i>100GB Linux Web Space</li>
                            <li><i class="icofont-check"></i>Unlimited Databases</li>
                            <li><i class="icofont-check"></i>Unlimited Email</li>
                            <li><i class="icofont-check"></i>10000Gb mo Transfer</li>
                            <li><i class="icofont-check"></i>24/7 Tech Support</li>
                            <li><i class="icofont-check"></i>Daily Backups</li>
                        </ul>
                        <div class="plan-select">
                            <a class="btn btn-bordered text-uppercase" href="#">Select Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ***** Price Plan Area End ***** -->

    <!-- ***** Testimonial Area Start ***** -->
    <!--<section class="section testimonial-area ptb_100">
        <div class="shapes-container">
            <div class="shape bg-shape"></div>
        </div>
        <div class="container text-center">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-8">
                    <div class="testimonials owl-carousel">
                        <div class="single-testimonial p-3 p-md-5">
                            <img src="assets/img/avatar/avatar-1.png" class="mx-auto d-block" alt="">
                            <h3 class="client-name mt-4 mb-2">John Doe</h3>
                            <h5 class="client-address fw-4">Los Angeles, California</h5>
                            <div class="client-rating mt-2 mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="client-description">
                                <div class="client-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam rem sunt nulla ducimus expedita, incidunt laborum assumenda. Deleniti iste placeat nostrum incidunt rem laudantium, sapiente, cum, molestias unde, quidem labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial p-3 p-md-5">
                            <img src="assets/img/avatar/avatar-2.png" class="mx-auto d-block" alt="">
                            <h3 class="client-name mt-4 mb-2">Jassica William</h3>
                            <h5 class="client-address fw-4">Los Angeles, California</h5>
                            <div class="client-rating mt-2 mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="client-description">
                                <div class="client-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam rem sunt nulla ducimus expedita, incidunt laborum assumenda. Deleniti iste placeat nostrum incidunt rem laudantium, sapiente, cum, molestias unde, quidem labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial p-3 p-md-5">
                            <img src="assets/img/avatar/avatar-3.png" class="mx-auto d-block" alt="">
                            <h3 class="client-name mt-4 mb-2">Johnson Smith</h3>
                            <h5 class="client-address fw-4">Los Angeles, California</h5>
                            <div class="client-rating mt-2 mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="client-description">
                                <div class="client-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam rem sunt nulla ducimus expedita, incidunt laborum assumenda. Deleniti iste placeat nostrum incidunt rem laudantium, sapiente, cum, molestias unde, quidem labore.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial-thumb d-none d-md-block">
                        <div class="thumb-prev">
                            <span>
                                <img src="assets/img/avatar/avatar-3.png" alt="">
                            </span>
                        </div>
                        <div class="thumb-next">
                            <span>
                                <img src="assets/img/avatar/avatar-2.png" alt="">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ***** Testimonial Area End ***** -->

    <!-- ***** Team Area Start ***** -->
    <!--<section id="team" class="section team-area ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-6">
                    <div class="section-heading text-center">
                        <h2 class="text-capitalize">Meet our Team Experts</h2>
                        <p class="d-none d-sm-block mt-4">EPS is developed by Optimum Solution and Services Ltd. (OSSL), a global technology solution provider.</p>
                        <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="team-slider owl-carousel">
                    <div class="single-team text-center px-3 py-2 m-2">
                        <div class="team-photo mx-auto">
                            <img src="assets/img/avatar/avatar-1.png" alt="">
                        </div>
                        <div class="team-content mt-2 mb-1">
                            <h3 class="team-name mt-3 mb-2">Jonayed Hasan</h3>
                            <h5 class="team-post mb-2">Co-Founder &amp; CEO</h5>
                            <p class="team-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, ex quibusdam aliquid dicta a explicabo.</p>
                            <div class="team-media mt-3">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="single-team text-center px-3 py-2 m-2">
                        <div class="team-photo mx-auto">
                            <img src="assets/img/avatar/avatar-2.png" alt="">
                        </div>
                        <div class="team-content mt-2 mb-1">
                            <h3 class="team-name mt-3 mb-2">Jassica William</h3>
                            <h5 class="team-post mb-2">Web Developer</h5>
                            <p class="team-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, ex quibusdam aliquid dicta a explicabo.</p>
                            <div class="team-media mt-3">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="single-team text-center px-3 py-2 m-2">
                        <div class="team-photo mx-auto">
                            <img src="assets/img/avatar/avatar-3.png" alt="">
                        </div>
                        <div class="team-content mt-2 mb-1">
                            <h3 class="team-name mt-3 mb-2">John Deo</h3>
                            <h5 class="team-post mb-2">ISO Developer</h5>
                            <p class="team-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, ex quibusdam aliquid dicta a explicabo.</p>
                            <div class="team-media mt-3">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="single-team text-center px-3 py-2 m-2">
                        <div class="team-photo mx-auto">
                            <img src="assets/img/avatar/avatar-4.png" alt="">
                        </div>
                        <div class="team-content mt-2 mb-1">
                            <h3 class="team-name mt-3 mb-2">Johnson Smith</h3>
                            <h5 class="team-post mb-2">Android Developer</h5>
                            <p class="team-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, ex quibusdam aliquid dicta a explicabo.</p>
                            <div class="team-media mt-3">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="single-team text-center px-3 py-2 m-2">
                        <div class="team-photo mx-auto">
                            <img src="assets/img/avatar/avatar-5.png" alt="">
                        </div>
                        <div class="team-content mt-2 mb-1">
                            <h3 class="team-name mt-3 mb-2">Johnson Smith</h3>
                            <h5 class="team-post mb-2">Android Developer</h5>
                            <p class="team-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, ex quibusdam aliquid dicta a explicabo.</p>
                            <div class="team-media mt-3">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ***** Team Area End ***** -->

    <!-- ***** Start Free Area Start ***** -->
    <section class="start-free-area">
        <div class="container">
            <div class="col-12">
                <!-- Start Free Content -->
                <div class="start-free-content d-flex flex-wrap align-items-center justify-content-center justify-content-lg-between shadow-lg" data-aos="fade-up">
                    <!-- Start Free Content -->
                    <div class="start-free-text">
                        <h2 class="mb-2">One-stop Merchant Payment solution</h2>
                        <span>Easy Payment System</span>
                    </div>
                    <!-- Start Free Button -->
                    <div class="start-free-btn mt-4 mt-lg-0">
                        <a href="#" data-toggle="modal" data-target="#modal-default" class="btn btn-bordered"><span>Try EPS Now</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Start Free Area End ***** -->

    <!-- ***** Download Area Start ***** -->
    <section class="section download-area ptb_100">
        <!-- Shapes Container -->
        <div class="shapes-container d-none d-sm-block">
            <div class="shape-2"></div>
            <div class="shape-3"></div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <!-- Download Text -->
                    <div class="download-text text-center">
                        <h2>Download EPS</h2>
                        <p class="my-3">Easy Payment System (EPS) is an innovative payment solution permitted by Bangladesh Bank as a Payment System Operator (PSO). EPS eases the transaction providing services including fund transfer, merchant payment, bill payment, balance enquiry, mobile top-up, etc.</p>
                        <p class="d-none d-sm-block my-3">EPS strives to make digital transaction effortless by enabling mass people with an easy and instant payment system.</p>
                        <!-- Store Buttons -->
                        <div class="button-group store-buttons">
                            <a href="#" data-toggle="modal" data-target="#modal-default"  class="btn btn-bordered">
                                <i class="icofont icofont-brand-android-robot dsp-tc"></i>
                                <p class="dsp-tc">GET IT ON
                                    <br> <span>Google Play</span></p>
                            </a>
                            <a href="#" data-toggle="modal" data-target="#modal-default"  class="btn btn-bordered">
                                <i class="icofont icofont-brand-apple dsp-tc"></i>
                                <p class="dsp-tc">AVAILABLE ON
                                    <br> <span>Apple Store</span></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Download Area End ***** -->
    <!--**Blog Part**-->

    <section id="blog" class="section blog-area ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Section Heading -->
                <div class="col-12 col-md-10 col-lg-6">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2 class="text-capitalize">Financial News</h2>
                        <p class="d-none d-sm-block mt-4">Online payment gateways cannot accept money directly from a bank account if it is not connected with debit-credit card/internet banking.</p>
                        <p class="d-block d-sm-none mt-4">Current online banking system is highly dependent on NPSB by Bangladesh Bank (Not all the banks are connected yet)</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Blog -->
                    <div class="single-blog wow fadeIn res-margin" data-wow-duration="2s">
                        <!-- Blog Thumb -->
                        <div class="blog-thumb">
                            <a href="#"><img src="assets/img/blog/blog-1.jpg" alt=""></a>
                        </div>
                        <!-- Blog Content -->
                        <div class="blog-content p-4">
                            <!-- Meta Info -->
                            <ul class="meta-info d-flex justify-content-between">
                                <li>By <a href="#">EPS</a></li>
                                <li><a href="#">Nov 05, 2021</a></li>
                            </ul>
                            <!-- Blog Title -->
                            <h3 class="blog-title my-3"><a href="#">Instant Fund transfer between bank to bank is Limited</a></h3>
                            <p>Under this service, an account holder in a bank/MFS/e-wallet can send money from his/her account to a receiver’s bank/MFS/e-wallet account using EPS.</p>
                            <a href="#" class="blog-btn mt-3">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Blog -->
                    <div class="single-blog wow fadeIn res-margin" data-wow-duration="2s" data-wow-delay="0.2s">
                        <!-- Blog Thumb -->
                        <div class="blog-thumb">
                            <a href="#"><img src="assets/img/blog/blog-2.jpg" alt=""></a>
                        </div>
                        <!-- Blog Content -->
                        <div class="blog-content p-4">
                            <!-- Meta Info -->
                            <ul class="meta-info d-flex justify-content-between">
                                <li>By <a href="#">EPS</a></li>
                                <li><a href="#">Nov 01, 2021</a></li>
                            </ul>
                            <!-- Blog Title -->
                            <h3 class="blog-title my-3"><a href="#">Balance transfer, bill payment, etc. could be more cost effective</a></h3>
                            <p>Bill and Fee Payment: Using EPS App, the registered user will be able to pay bills and fees.</p>
                            <a href="#" class="blog-btn mt-3">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Blog -->
                    <div class="single-blog wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                        <!-- Blog Thumb -->
                        <div class="blog-thumb">
                            <a href="#"><img src="assets/img/blog/blog-3.jpg" alt=""></a>
                        </div>
                        <!-- Blog Content -->
                        <div class="blog-content p-4">
                            <!-- Meta Info -->
                            <ul class="meta-info d-flex justify-content-between">
                                <li>By <a href="#">EPS</a></li>
                                <li><a href="#">Oct 25, 2021</a></li>
                            </ul>
                            <!-- Blog Title -->
                            <h3 class="blog-title my-3"><a href="#">Current online banking system is highly dependent on NPSB</a></h3>
                            <p>EPS will provide one-stop solution for the corporate clients dealing with large number of transactions. Easy Wage Disbursement is one of such services to be availed from EPS.</p>
                            <a href="#" class="blog-btn mt-3">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--**Blog End Part**-->

@endsection
