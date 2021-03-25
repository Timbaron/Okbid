@extends('layouts.app')

@section('content')
     <!--============= Hero Section Starts Here =============-->
     <div class="hero-section style-2">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="index-2.html">Home</a>
                </li>
                <li>
                    <span>Products</span>
                </li>
            </ul>
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="{{asset('images/banner/hero-bg.png')}}"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->


    <!--============= Featured Auction Section Starts Here =============-->
    <section class="featured-auction-section padding-bottom mt--240 mt-lg--440 pos-rel">
        <div class="container">
            <div class="section-header cl-white mw-100 left-style">
                <h3 class="title">Bid on These Featured Products!</h3>
            </div>
            <div class="product-auction padding-bottom">
                <div class="container">
                    <div class="row justify-content-center mb-30-none">

                        @foreach ($products as $product)
                        <?php
                            $i = 0;
                            $date1 = new DateTime("now");
                            $endingDate = explode(' ', $product->ending_date);
                            $date2 = new DateTime($endingDate[0]);
                            $interval = $date1->diff($date2);
                            ?>
                        <div class="col-sm-10 col-md-6 col-lg-4">
                            <div class="auction-item-2">
                                <div class="auction-thumb">
                                    @if ($product->image)
                                        <a href="#"><img src="assets/images/auction/car/auction-1.jpg" alt="car"></a>
                                    @endif
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="#0">{{$product->name}}</a>
                                    </h6>
                                    <div class="bid-area">
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-auction"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Starting Price</div>
                                                <div class="amount">${{$product->Starting_price}}.00</div>
                                            </div>
                                        </div>
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-money"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Highest Bid</div>
                                                <div class="amount">${{$product->Starting_price + 100}}.00</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div>
                                                @if ($interval->days <= 1)
                                                    {{$interval->h}} Hour(s) Left
                                                @else
                                                    {{$interval->days}} day(s) Left
                                                @endif
                                            </div>
                                        </div>
                                        <span class="total-bids">{{$product->bid_count}} Bid(s)</span>
                                    </div>
                                    <div class="text-center">
                                        <input type="text" id="product_id" value="{{$product->id}}" hidden>
                                        <button class="custom-button" id="makebid{{$product->id}}"> Submit A Bid</button>
                                        {{-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> --}}
                                    </div>
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                            $(document).on('click', '#makebid{{$product->id}}', function(){
                                                var product_id  = {{$product->id}};
                                                $('#MakeBid').modal('show');
                                                $('#pro_id').val(product_id);
                                                $('#makeBidForm').action = "/home";
                                            })
                                        })
                                    </script>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <ul class="pagination">
                        <li>
                            <a href="#0"><i class="flaticon-left-arrow"></i></a>
                        </li>
                        <li>
                            <a href="#0">1</a>
                        </li>
                        <li>
                            <a href="#0" class="active">2</a>
                        </li>
                        <li>
                            <a href="#0">3</a>
                        </li>
                        <li>
                            <a href="#0"><i class="flaticon-right-arrow"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--============= Featured Auction Section Ends Here =============-->


    <!--============= Product Auction Section Starts Here =============-->

    <!--============= Product Auction Section Ends Here =============-->
@endsection
