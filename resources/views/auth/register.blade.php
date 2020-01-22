<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <title>User's Registration - PC World</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('public/frontend/images/favicon.ico')}}">

    <!-- App css -->
    <link href="{{asset('public/frontend/extra/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/frontend/extra/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/frontend/extra/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/frontend/extra/css/style.css')}}" rel="stylesheet" type="text/css">

    <script src="{{asset('public/frontend/extra/js/modernizr.min.js')}}"></script>

</head>


<body class="bg-accpunt-pages">

<!-- HOME -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="wrapper-page">

                    <div class="account-pages">
                        <div class="account-box">
                            <div class="account-logo-box">
                                <h2 class="text-uppercase text-center">
                                    @php
                                        $logo = DB::table('logos')->where('status',1)->first();
                                    @endphp
                                    <a href="{{ url('/') }}" class="text-success">
                                        <span><img src="{{url($logo->branding_logo)}}" alt="" height="60"></span>
                                    </a>
                                </h2>
                                <h4 class="text-uppercase font-bold m-b-5 m-t-50">{{ __('user registration') }}</h4>
{{--                                <p class="m-b-0"></p>--}}
                            </div>
                            <div class="account-content">
                                <form class="form-horizontal" action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <div class="form-group row m-b-20">
                                        <div class="col-12">
                                            <label for="fullName">{{ __('Full Name') }}</label>
                                            <input type="text" id="username" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Your Full Name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row m-b-20">
                                        <div class="col-12">
                                            <label for="phone">{{ __('Phone Number') }}</label>
                                            <input type="number" id="phone" class="form-control @error('phone') is-valid @enderror" name="phone" value="{{ old('phone') }}" required placeholder="Your Valid Phone Number" autocomplete="phone" autofocus>
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row m-b-20">
                                        <div class="col-12">
                                            <label for="emailaddress">{{ __('Email Address') }}</label>
                                            <input type="email" id="emailaddress" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Your Valid Email Address" autocomplete="email">
                                        </div>
                                    </div>

                                    <div class="form-group row m-b-20">
                                        <div class="col-12">
                                            <label for="password">{{ __('Password') }}</label>
                                            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Enter your password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row m-b-20">
                                        <div class="col-12">
                                            <label for="confirmPassword">{{ __('Confirm Password') }}</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Rewrite Your Password">
                                        </div>
                                    </div>

                                    <div class="form-group row m-b-20">
                                        <div class="col-12">

{{--                                            <div class="checkbox checkbox-success">--}}
{{--                                                <input id="remember" type="checkbox" checked="">--}}
{{--                                                <label for="remember">--}}
{{--                                                    I accept <a href="#">Terms and Conditions</a>--}}
{{--                                                </label>--}}
{{--                                            </div>--}}

                                        </div>
                                    </div>

                                    <div class="form-group row text-center m-t-10">
                                        <div class="col-12">
                                            <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Sign Up</button>
                                        </div>
                                    </div>
                                </form>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="text-center">
                                            <button type="button" class="btn m-r-5 btn-facebook waves-effect waves-light">
                                                <i class="fa fa-facebook"></i>
                                            </button>
                                            <button type="button" class="btn m-r-5 btn-googleplus waves-effect waves-light">
                                                <i class="fa fa-google"></i>
                                            </button>
                                            <button type="button" class="btn m-r-5 btn-twitter waves-effect waves-light">
                                                <i class="fa fa-twitter"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="row m-t-50">
                                    <div class="col-12 text-center">
                                        <p class="text-muted">Already have an account?  <a href="{{route('login')}}" class="text-dark m-l-5"><b>Sign In</b></a></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end card-box-->
                    </div>


                </div>
                <!-- end wrapper -->

            </div>
        </div>
    </div>
</section>
<!-- END HOME -->



<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{ asset('public/frontend/extra/js/jquery.min.js')}}"></script>
<script src="{{ asset('public/frontend/extra/js/tether.min.js')}}"></script><!-- Tether for Bootstrap -->
<script src="{{ asset('public/frontend/extra/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('public/frontend/extra/js/metisMenu.min.js')}}"></script>
<script src="{{ asset('public/frontend/extra/js/waves.js')}}"></script>
<script src="{{ asset('public/frontend/extra/js/jquery.slimscroll.js')}}"></script>

<!-- App js -->
<script src="{{ asset('public/frontend/extra/js/jquery.core.js')}}"></script>
<script src="{{ asset('public/frontend/extra/js/jquery.app.js')}}"></script>

</body>
</html>




{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--@endsection--}}
