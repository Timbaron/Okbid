@extends('layouts.app')

@section('content')
 <!--============= Hero Section Starts Here =============-->
 <div class="hero-section style-2">
    <div class="container">
        <ul class="breadcrumb">
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="/dashboard">Dashboard</a>
            </li>
            <li>
                <span>Personal profile</span>
            </li>
        </ul>
    </div>
    <div class="bg_img hero-bg bottom_center" data-background="{{asset('images/banner/hero-bg.png')}}"></div>
</div>
<!--============= Hero Section Ends Here =============-->

<section class="dashboard-section padding-bottom mt--240 mt-lg--440 pos-rel">
    <div class="container">
        <div class="row justify-content-center">
            @include('layouts.inc.profile-sidebar')
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <div class="dash-pro-item mb-30 dashboard-widget">
                            <div class="header">
                                <h4 class="title">Personal Details</h4>
                                <span class="edit"><i class="flaticon-edit"></i> Edit</span>
                            </div>
                            <ul class="dash-pro-body">
                                <li>
                                    <div class="info-name">Name</div>
                                    <div class="info-value">{{$user->name}}</div>
                                </li>
                                <li>
                                    <div class="info-name">Date of Birth</div>
                                    <div class="info-value">{{$user->date_of_birth ?? 'Null'}}</div>
                                </li>
                                <li>
                                    <div class="info-name">Address</div>
                                    <div class="info-value">{{$user->address ?? 'Null'}}</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="dash-pro-item mb-30 dashboard-widget">
                            <div class="header">
                                <h4 class="title">Account Settings</h4>
                                <span class="edit"><i class="flaticon-edit"></i> Edit</span>
                            </div>
                            <ul class="dash-pro-body">
                                <li>
                                    <div class="info-name">Language</div>
                                    <div class="info-value">{{$user->language ?? 'Null'}}</div>
                                </li>
                                <li>
                                    <div class="info-name">Time Zone</div>
                                    <div class="info-value">{{$user->time_zone ?? 'Null'}}</div>
                                </li>
                                <li>
                                    <div class="info-name">Status</div>
                                    <div class="info-value"><i class="flaticon-check text-success"></i> {{$user->status}}</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="dash-pro-item mb-30 dashboard-widget">
                            <div class="header">
                                <h4 class="title">Email Address</h4>
                                <span class="edit"><i class="flaticon-edit"></i> Edit</span>
                            </div>
                            <ul class="dash-pro-body">
                                <li>
                                    <div class="info-name">Email</div>
                                    <div class="info-value">{{$user->email}}</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="dash-pro-item mb-30 dashboard-widget">
                            <div class="header">
                                <h4 class="title">Phone</h4>
                                <span class="edit"><i class="flaticon-edit"></i> Edit</span>
                            </div>
                            <ul class="dash-pro-body">
                                <li>
                                    <div class="info-name">Mobile</div>
                                    <div class="info-value">{{$user->phone  ?? 'Null'}}</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="dash-pro-item dashboard-widget">
                            <div class="header">
                                <h4 class="title">Security</h4>
                                <span class="edit"><i class="flaticon-edit"></i> Edit</span>
                            </div>
                            <ul class="dash-pro-body">
                                <li>
                                    <div class="info-name">Password</div>
                                    <div class="info-value">xxxxxxxxxxxxxxxx</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
