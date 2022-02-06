<!doctype html>
<html class="no-js" lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  @include('frontend.layouts.link')
</head>

<body class="miami">

    <!--====== Scroll To Top Area Start ======-->
    <div id="scrollUp" title="Scroll To Top">
        <i class="icofont-bubble-up"></i>
    </div>
    <!--====== Scroll To Top Area End ======-->

    <div class="all-area">

        <!-- ***** Header Start ***** -->
        <div id="appo-header" class="main-header-area">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <!-- Logo -->
                    <a class="navbar-brand" href="index.html">
                        <img class="logo" src="{{asset('assets/img/logo/logo.png')}}" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#appo-menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Appo Menu -->
                    <div class="collapse navbar-collapse" id="appo-menu">
                        <!-- Header Items -->
                        <ul class="navbar-nav header-items ml-auto">
                          
                          <li class="nav-item">
                              <a class="nav-link scroll" href="#">Home</a>
                          </li>

                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-2" role="button" data-toggle="dropdown">
                                    Services
                                </a>
                                <div class="dropdown-menu mega-menu blog-menu px-3 py-md-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <ul class="single-menu">
                                                <li><a class="dropdown-item" href="balance-transfer.html">Balance Transfer</a></li>
                                                <li><a class="dropdown-item" href="bill-fee-payment.html">Bill and Fee Payment</a></li>
                                                <li><a class="dropdown-item" href="merchant-payment.html">Merchant Payment</a></li>
                                                <li><a class="dropdown-item" href="balance-enquiry.html">Balance Enquiry</a></li>
                                                <li><a class="dropdown-item" href="mobile-topup.html">Mobile Top-up</a></li>
                                                <li><a class="dropdown-item" href="corporate-services.html">Corporate Services</a></li>
                                                <li><a class="dropdown-item" href="enhancing-banking-services.html">Enhancing Banking Services</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li> -->

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-2" role="button" data-toggle="dropdown">
                                    Registration
                                </a>
                                <div class="dropdown-menu mega-menu blog-menu px-3 py-md-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <ul class="single-menu">
                                                <li><a class="dropdown-item" href="merchant-registration.html">Merchant Registration</a></li>
                                                <li><a class="dropdown-item" href="user-registration.html">User Registration</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-2" role="button" data-toggle="dropdown">
                                    Login
                                </a>
                                <div class="dropdown-menu mega-menu blog-menu px-3 py-md-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <ul class="single-menu">
                                                <li><a class="dropdown-item" href="merchant-registration.html">Merchant Login</a></li>
                                                <li><a class="dropdown-item" href="user-registration.html">User Login</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link scroll" href="index.html#features">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="balance-enquiry.html">App Support</a>
                            </li>


                                <!-- <div class="dropdown-menu mega-menu blog-menu px-3 py-md-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <ul class="single-menu">
                                                <li><a class="dropdown-item" href="ios-app-support.html">For iOS</a></li>
                                                <li><a class="dropdown-item" href="android-app-support.html">For Android</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> -->
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="contact-us.html">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
<!-- ***** Header End ***** -->

             <!-- ***** Welcome Area Start ***** -->
         @include('frontend.layouts.welcomearea')

    <!-- ***** Welcome Area End ***** -->
  @yield('content')
    <!-- ***** Blog Area Start ***** -->

    <!-- <blog-posts></blog-posts> -->

    <!-- ***** Blog Area End ***** -->

    <!--====== Contact Area Start ======-->
    <section id="contact" class="contact-area bg-gray ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-6">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2 class="text-capitalize">Google Map</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Contact Box -->
                    <div class="contact-box text-center">
                        <!-- Contact Form -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7296.864314685775!2d90.38540015334223!3d23.87428970530401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c511c384e35b%3A0xd35fc861ef0c04ba!2sEPS%20-%20Easy%20Payment%20System!5e0!3m2!1sen!2sbd!4v1642668716700!5m2!1sen!2sbd" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Contact Area End ======-->

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content" style="border-radius: 15px">
            <div class="modal-header" style="padding-bottom: 0px; padding-top: 5px;">
                <a class="navbar-brand" href="index.html">
                    <img class="logo" src="assets/img/logo/logo.png" style="max-height: 0px;" alt="">
                </a>
              <a type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-top: 25px;">
                <span aria-hidden="true">&times;</span>
              </a>
            </div>
            <div class="modal-body" style="padding-bottom: 20px">
                <div class="maintenance-area">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-12 col-md-6 order-2 order-md-1">
                                <!-- Maintenance Content -->
                                <div class="maintenance-content my-5 my-md-0">
                                    <p class="my-3">Easy Payment System (EPS) is an innovative payment solution permitted by Bangladesh Bank as a Payment System Operator (PSO). EPS eases the transaction providing services including fund transfer, merchant payment, bill payment, balance enquiry, mobile top-up, etc.</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-10 col-md-6 order-1 order-md-2 mx-auto pt-4 pt-md-0">
                                <img src="images/coming2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

        <!--====== Footer Area Start ======-->
@include('frontend.layouts.footer')
<!--====== Footer Area End ======-->
    </div>


    <!-- ***** All jQuery Plugins ***** -->
@include('frontend.layouts.script')
    </body>


<!-- Mirrored from eps.com.bd/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Jan 2022 03:55:04 GMT -->
</html>
