@extends('layouts.app')
@section('content')
<div class="hero-section style-2 pb-lg-400">
    <div class="container">
        <ul class="breadcrumb">
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <span>Dashboard</span>
            </li>
        </ul>
    </div>
    <div class="bg_img hero-bg bottom_center" data-background="{{asset('images/banner/hero-bg.png')}}"></div>
</div>

<!--============= Dashboard Section Starts Here =============-->
<section class="dashboard-section padding-bottom mt--240 mt-lg--325 pos-rel">
    <div class="container">
        <div class="row justify-content-center">
            @include('layouts.inc.profile-sidebar')
            <div class="col-lg-8">
                <div class="dashboard-widget mb-40">
                    <div class="dashboard-title mb-30">
                        <h5 class="title">My Activity</h5>
                    </div>
                    <div class="row justify-content-center mb-30-none">
                        <div class="col-md-4 col-sm-6">
                            <div class="dashboard-item">
                                <div class="thumb">
                                    <img src="{{asset('images/dashboard/01.png')}}" alt="dashboard">
                                </div>
                                <div class="content">
                                    <h2 class="title"><span class="counter">{{count($totalbids)}}</span></h2>
                                    <h6 class="info">Active Bids</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="dashboard-item">
                                <div class="thumb">
                                    <img src="{{asset('images/dashboard/02.png')}}" alt="dashboard">
                                </div>
                                <div class="content">
                                    <h2 class="title"><span class="counter">{{count($bidswon)}}</span></h2>
                                    <h6 class="info">Items Won</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="dashboard-item">
                                <div class="thumb">
                                    <img src="{{asset('images/dashboard/03.png')}}" alt="dashboard">
                                </div>
                                <div class="content">
                                    <h2 class="title"><span class="counter">20</span></h2>
                                    <h6 class="info">Favorites</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= Dashboard Section Ends Here =============-->
@endsection
