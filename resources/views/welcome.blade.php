@extends('layouts.app')
@section('content')
    <!--============= Banner Section Starts Here =============-->
    <section class="banner-section bg_img" data-background="{{asset('images/banner/banner-bg-1.png')}}">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner-content cl-white">
                        <h5 class="cate">Next Generation Auction</h5>
                        <h1 class="title"><span class="d-xl-block">Find Your</span> Next Deal!</h1>
                        <p>
                            Online Auction is where everyone goes to shop, sell,and give, while discovering variety and affordability.
                        </p>
                        <a href="#0" class="custom-button yellow btn-large">Get Started</a>
                    </div>
                </div>
                <div class="d-none d-lg-block col-lg-6">
                    <div class="banner-thumb-2">
                        <img src="{{asset('images/banner/banner-1.png')}}" alt="banner">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-shape d-none d-lg-block">
            <img src="{{asset('css/img/banner-shape.png')}}" alt="css">
        </div>
    </section>
    <!--============= Banner Section Ends Here =============-->
@endsection
