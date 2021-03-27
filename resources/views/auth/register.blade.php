@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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
                <span>Sign Up</span>
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
                    <h2 class="title">SIGN UP</h2>
                    <p>We're happy you're here!</p>
                </div>
                <ul class="login-with">
                    <li>
                        <a href="#0"><i class="fab fa-facebook"></i>Log in with Facebook</a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-google"></i>Log in with Google</a>
                    </li>
                </ul>
                <div class="or">
                    <span>Or</span>
                </div>
                <form class="login-form" accept="{{route('register')}}" method="POST">
                    @csrf
                    <div class="form-group mb-30">
                        <label for="login-email"><i class="far fa-envelope"></i></label>
                        <input type="text" id="login-email" placeholder="Full Name" name="name" value="{{old('name')}}" class="@error('name') is-invalid @enderror" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-30">
                        <label for="login-email"><i class="far fa-envelope"></i></label>
                        <input type="email" id="login-email" placeholder="Email Address" value="{{old('email')}}" class="@error('email') is-invalid @enderror" name="email" required>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="form-group mb-30 col-6">
                            <label for="login-pass"><i class="fas fa-lock"></i></label>
                            <input type="password" id="login-pass" class="@error('password') is-invalid @enderror" placeholder="Password" value="{{old('password')}}" name="password" required>
                            <span class="pass-type"><i class="fas fa-eye"></i></span>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-30 col-6">
                            <label for="login-pass"><i class="fas fa-lock"></i></label>
                            <input type="password" id="login-pass" placeholder="Confirm Password" name="password_confirmation" required>
                            <span class="pass-type"><i class="fas fa-eye"></i></span>
                        </div>
                    </div>
                    <div class="form-group checkgroup mb-30">
                        <input type="checkbox"  id="check" required><label for="check">The OKBid Terms of Use apply</label>
                    </div>
                    <div class="form-group mb-0">
                        <button type="submit" class="custom-button">REGISTER</button>
                    </div>
                </form>
            </div>
            <div class="right-side cl-white">
                <div class="section-header mb-0">
                    <h3 class="title mt-0">ALREADY HAVE AN ACCOUNT?</h3>
                    <p>Log in and go to your Dashboard.</p>
                    <a href="{{route('login')}}" class="custom-button transparent">Login</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= Account Section Ends Here =============-->
@endsection
