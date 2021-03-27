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
            <div class="col-sm-10 col-md-7 col-lg-4">
                <div class="dashboard-widget mb-30 mb-lg-0">
                    <div class="user">
                        @if ($user->image)

                        <div class="thumb-area">
                            <div class="thumb">
                                <img src="assets/images/dashboard/user.png" alt="user">
                            </div>
                            <label for="profile-pic" class="profile-pic-edit"><i class="flaticon-pencil"></i></label>
                            <input type="file" id="profile-pic" class="d-none">
                        </div>
                        @endif
                        <div class="content">
                            <h5 class="title"><a href="#0">{{$user->name}}</a></h5>
                            <span class="username">{{$user->email}}</span>
                        </div>
                    </div>
                    <ul class="dashboard-menu">
                        <li>
                            <a href="{{route('dashboard.index')}}" class="active"><i class="flaticon-dashboard"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="profile.html"><i class="flaticon-settings"></i>Personal Profile </a>
                        </li>
                        <li>
                            <a href="my-bid.html"><i class="flaticon-auction"></i>My Bids</a>
                        </li>
                        <li>
                            <a href="winning-bids.html"><i class="flaticon-best-seller"></i>Winning Bids</a>
                        </li>
                        <li>
                            <a href="notifications.html"><i class="flaticon-alarm"></i>My Alerts</a>
                        </li>
                        <li>
                            <a href="my-favorites.html"><i class="flaticon-star"></i>My Favorites</a>
                        </li>
                        <li>
                            <a href="referral.html"><i class="flaticon-shake-hand"></i>Referrals</a>
                        </li>
                    </ul>
                </div>
            </div>
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
                                    <h2 class="title"><span class="counter">115</span></h2>
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
