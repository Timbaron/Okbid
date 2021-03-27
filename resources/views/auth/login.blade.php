@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
 <!--============= Hero Section Starts Here =============-->
 <div class="hero-section">
    <div class="container">
        <ul class="breadcrumb">
            <li>
                <a href="index-2.html">Home</a>
            </li>
            <li>
                <span>Sign In</span>
            </li>
        </ul>
    </div>
    <div class="bg_img hero-bg bottom_center" data-background="{{asset('images/banner/hero-bg.png')}}"></div>
</div>
<!--============= Hero Section Ends Here =============-->


<!--============= Account Section Starts Here =============-->
<section class="account-section padding-bottom">
    <div class="container">
        <div class="account-wrapper mt--100 mt-lg--440">
            <div class="left-side">
                <div class="section-header">
                    <h2 class="title">HI, THERE</h2>
                    <p>You can log in to your OKBid account here.</p>
                </div>
                <ul class="login-with">
                    <li>
                        <a href="#0"><i class="fab fa-facebook"></i>Log in with Facebook</a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-google-plus"></i>Log in with Google</a>
                    </li>
                </ul>
                <div class="or">
                    <span>Or</span>
                </div>
                <form class="login-form" action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="form-group mb-30">
                        <label for="login-email"><i class="far fa-envelope"></i></label>
                        <input type="text" id="login-email" name="email" value="{{old('email')}}" placeholder="Email Address" class="@error('email') is-invalid @enderror" required>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="login-pass"><i class="fas fa-lock"></i></label>
                        <input type="password" name="password" id="login-pass" placeholder="Password" class="@error('password') is-invalid @enderror">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="pass-type"><i class="fas fa-eye"></i></span>
                    </div>
                    <div class="form-group">
                        <a href="#0">Forgot Password?</a>
                    </div>
                    <div class="form-group mb-0">
                        <button type="submit" class="custom-button">LOG IN</button>
                    </div>
                </form>
            </div>
            <div class="right-side cl-white">
                <div class="section-header mb-0">
                    <h3 class="title mt-0">NEW HERE?</h3>
                    <p>Sign up and create your Account</p>
                    <a href="{{route('register')}}" class="custom-button transparent">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= Account Section Ends Here =============-->
@endsection
