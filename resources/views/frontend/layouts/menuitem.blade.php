@include('frontend.layouts.master')
@section('content')

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
                      @foreach ($menuItems as $item)
                      @if (count($item->submenus)>0 )
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-2" role="button" data-toggle="dropdown">
                              {{$item->name}}
                          </a>
                          <div class="dropdown-menu mega-menu blog-menu px-3 py-md-3">
                              <div class="row">
                                  <div class="col-12">
                                      <ul class="single-menu">
                                        @foreach($item->submenus as $submenu )
                                          <li><a class="dropdown-item" href="{{$submenu->link}}">{{$submenu->name}}</a></li>
                                          @endforeach
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </li>
                    @else
                      <li class="nav-item">
                          <a class="nav-link scroll" href="{{$item->link}}">{{ $item->name }}</a>
                      </li>
                        @endif
                      @endforeach
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
    @endsection
