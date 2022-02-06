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
                        <img src="{{asset('assets/images/Asset 3.png')}}" alt="">
                    </div>
                    <!-- Benifits Text -->
                    <div class="benifits-text">
                        <h3 class="mb-2">User Friendly</h3>
                        <p>User friendly interface will be ensuring an optimum interaction between users and services.</p>
                    </div>
                </div>
             </div>
             @endforeach

        </div>
    </div>
</section>
<!-- ***** Benifits Area End ***** -->
