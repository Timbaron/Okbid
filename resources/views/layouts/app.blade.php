<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <title>OkBid</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    @notifyCss
</head>
<body>
    <x:notify-messages />
    <!--============= ScrollToTop Section Starts Here =============-->
    <div class="overlayer" id="overlayer">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>

    <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <div class="overlay"></div>
     <!--============= Header Section Starts Here =============-->
     <header>
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrapper">
                    <ul class="customer-support">
                        <li>
                            <a href="tel:08149792957" class="mr-3"><i class="fas fa-phone-alt"></i><span class="ml-2 d-none d-sm-inline-block">Customer Support</span></a>
                        </li>
                    </ul>
                    <ul class="cart-button-area">
                        <li>
                            @auth

                            <a href="#0" class="cart-button"><i class="flaticon-shopping-basket"></i><span class="amount">08</span></a>
                            @endauth
                        </li>
                        <li>
                            @auth
                                <a href="{{route('login')}}" class="user-button"><i class="flaticon-user"></i></a>
                            @endauth
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="/">
                            <img src="{{asset('images/logo/logo.png')}}" alt="logo">
                        </a>
                    </div>
                    <ul class="menu ml-auto">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="{{route('products')}}">Products</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                        <li>
                            <a href="">My Account</a>
                            <ul class="submenu">
                                @auth
                                    <li>
                                        <a href="{{route('dashboard.index')}}">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="{{route('profile')}}">Personal Profile</a>
                                    </li>
                                    <li>
                                        <a href="{{route('sell')}}">Sell Product</a>
                                    </li>
                                    <li>
                                        <a href="#">My Bids</a>
                                    </li>
                                    <li>
                                        <a href="#">Winning Bids</a>
                                    </li>
                                    <li>
                                        <a href="#">My Alert</a>
                                    </li>
                                    <li>
                                        <a href="#">My Favorites</a>
                                    </li>
                                    <li>
                                        <a href="#">Referrals</a>
                                    </li>
                                    <li>
                                        <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                @else
                                <li>
                                    <a href="{{route('login')}}">Login</a>
                                </li>
                                <li>
                                    <a href="{{route('register')}}">Register</a>
                                </li>
                                @endauth
                            </ul>
                        </li>
                        @auth
                            <li>
                                <a href="/sell">Sell Product</a>
                            </li>
                        @else
                            <li>
                                <a href="{{route('login')}}">Login</a>
                            </li>
                        @endauth
                    </ul>
                    <form class="search-form">
                        <input type="text" placeholder="Search for brand, model....">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                    <div class="search-bar d-md-none">
                        <a href="#0"><i class="fas fa-search"></i></a>
                    </div>
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--============= Header Section Ends Here =============-->

     <!--============= Cart Section Starts Here =============-->
     @auth
     <div class="cart-sidebar-area">
        <div class="top-content">
            <a href="/" class="logo">
                <img src="{{asset('images/logo/logo2.png')}}" alt="logo">
            </a>
            <span class="side-sidebar-close-btn"><i class="fas fa-times"></i></span>
        </div>
        <div class="bottom-content">
            <div class="cart-products">
                <h4 class="title">Shopping cart</h4>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="assets/images/shop/shop01.jpg" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Color Pencil</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="assets/images/shop/shop02.jpg" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Water Pot</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="assets/images/shop/shop03.jpg" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Art Paper</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="assets/images/shop/shop04.jpg" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Stop Watch</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="assets/images/shop/shop05.jpg" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Comics Book</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="btn-wrapper text-center">
                    <a href="#0" class="custom-button"><span>Checkout</span></a>
                </div>
            </div>
        </div>
    </div>
     @endauth
    <!--============= Cart Section Ends Here =============-->
    <!-- Bid Modal -->

    <div id="MakeBid" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
              <h6 class="modal-title">Submit Your Bid</h6>
            </div>
            <div class="modal-body">
              <form action="/PlaceBid" id="makeBidForm" method="POST">
                @csrf
                    <input type="number" placeholder="Place your bid in USD" name="bid_amount" required>
                    <input type="text" id="pro_id" name="product_id" hidden>
                    <div class="modal-footer">
                      <button type="submit">Bid Now</button>
                      {{-- <a href="#" type="button" id="pro_id" class="btn btn-default">Place Bid</a> --}}
                    </div>
              </form>
            </div>
          </div>

        </div>
    </div>

    {{-- Edit User detail --}}
    <div id="user" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
              <h6 class="modal-title">Submit Your Bid</h6>
            </div>
            <div class="modal-body">
              <form action="/edit" id="makeBidForm" method="POST">
                @csrf
                    <input type="text" placeholder="Enter your Full name" name="name" required>
                    <input type="date" placeholder="Date of birth" name="date_of_birth" required>
                    <input type="text" placeholder="Enter your Full name" name="name" required>
                    <input type="text" placeholder="Enter your Full name" name="name" required>
                    {{-- <input type="text" id="pro_id" name="product_id" hidden> --}}
                    <div class="modal-footer">
                      <button type="submit">Bid Now</button>
                      {{-- <a href="#" type="button" id="pro_id" class="btn btn-default">Place Bid</a> --}}
                    </div>
              </form>
            </div>
          </div>

        </div>
    </div>

  </div>
    <!--============= ScrollToTop Section Ends Here =============-->
    <x:notify-messages />

    @yield('content')

    <script src="{{asset('js/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/waypoints.js')}}"></script>
    <script src="{{asset('js/nice-select.js')}}"></script>
    <script src="{{asset('js/counterup.min.js')}}"></script>
    <script src="{{asset('js/owl.min.js')}}"></script>
    <script src="{{asset('js/magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/yscountdown.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    @notifyJs
    <script>
       CKEDITOR.replace('description');
    </script>
</body>
</html>
