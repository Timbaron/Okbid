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
</div><!--============= Dashboard Section Starts Here =============-->
<section class="dashboard-section padding-bottom mt--240 mt-lg--440 pos-rel">
    <div class="container">
        <div class="row justify-content-center">
            @include('layouts.inc.profile-sidebar')
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <div class="dash-pro-item mb-30 dashboard-widget">
                            <div class="header">
                                <h4 class="title">Sell your Product</h4>
                            </div>
                            <form action="{{route('sell')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <ul class="dash-pro-body">
                                    <li>
                                        <div class="info-name">Product Name</div>
                                        <div class="info-value">
                                            <input type="text" name="name" placeholder="E.g Toyota Camry" autofocus required>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info-name">Product Display Image</div>
                                        <div class="info-value">
                                            <input type="file" name="display_image"  required>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info-name">Other Images</div>
                                        <div class="info-value">
                                            <input type="file" name="other_images"  multiple required>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info-name">Condition</div>
                                        <div class="info-value">
                                            <select name="condition" required>
                                                <option value="" active>Select Condition</option>
                                                <option value="New" active>Brand New</option>
                                                <option value="Used" active>Fairly Used</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info-name">Ending Date</div>
                                        <div class="info-value">
                                            <input type="date" name="ending_date"  required>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info-name">Starting Price<br>(Naira)</div>
                                        <div class="info-value">
                                            <input type="number" name="starting_price" placeholder="E.g 2000" required>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info-name">Product Description</div>
                                        <div class="info-value">
                                            <textarea name="description" id="description" cols="30" rows="10"></textarea>
                                        </div>
                                    </li>
                                </ul>
                                <button type="submit">Upload</button>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!--============= Dashboard Section Ends Here =============-->
@endsection
