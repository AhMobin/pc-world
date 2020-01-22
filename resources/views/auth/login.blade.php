<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>User's Login - PC World</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('public/frontend/images/favicon.ico')}}">

    <!-- App css -->
    <link href="{{asset('public/frontend/extra/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/frontend/extra/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/frontend/extra/css/metismenu.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/frontend/extra/css/style.css')}}" rel="stylesheet" type="text/css" />
    <!-- Toastr Css -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

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
                                <h4 class="text-uppercase font-bold m-b-5 m-t-50">{{ __('user login') }}</h4>
{{--                                <p class="m-b-0">Login</p>--}}
                            </div>
                            <div class="account-content">
                                <form class="form-horizontal" action="{{route('login')}}" method="post">
                                    @csrf
                                    <div class="form-group m-b-20 row">
                                        <div class="col-12">
                                            <label for="emailaddress">{{ __('Email address') }}</label>
                                            <input type="email" id="emailaddress"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="User Email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong style="color: red">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row m-b-20">
                                        <div class="col-12">
                                            <a href="{{ route('password.request') }}" class="text-muted pull-right"><small>{{ __('Forgot your password?') }}</small></a>
                                            <label for="password">{{ __('Password') }}</label>
                                            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="User Password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong style="color: red">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row m-b-20">
                                        <div class="col-12">

                                            <div class="checkbox checkbox-success">
                                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <span class="checkmark"></span>
                                                <label for="remember">
                                                    Remember me
                                                </label>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group row text-center m-t-10">
                                        <div class="col-12">
                                            <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Sign In</button>
                                        </div>
                                    </div>

                                </form>

                                <div class="row">
                                    <div class="col-sm-12">
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
                                    <div class="col-sm-12 text-center">
                                        <p class="text-muted">Don't have an account? <a href="{{route('register')}}" class="text-dark m-l-5"><b>Sign Up</b></a></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end card-box-->


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
<script src="{{asset('public/frontend/extra/js/jquery.min.js')}}"></script>
<script src="{{asset('public/frontend/extra/js/tether.min.js')}}"></script><!-- Tether for Bootstrap -->
<script src="{{asset('public/frontend/extra/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/frontend/extra/js/metisMenu.min.js')}}"></script>
<script src="{{asset('public/frontend/extra/js/waves.js')}}"></script>
<script src="{{asset('public/frontend/extra/js/jquery.slimscroll.js')}}"></script>

<!-- App js -->
<script src="{{asset('public/frontend/extra/js/jquery.core.js')}}"></script>
<script src="{{asset('public/frontend/extra/js/jquery.app.js')}}"></script>


<!-- For toastr sweet alert message -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>

<script>
        @if(Session::has('messege'))
    var type="{{Session::get('alert-type','info')}}"
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('messege') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('messege') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('messege') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('messege') }}");
            break;
    }
    @endif
</script>

<script>
    $(document).on("click", "#delete", function(e){
        e.preventDefault();
        var link = $(this).attr("href");
        swal({
            title: "Are you Want to delete?",
            text: "Once Delete, This will be Permanently Delete!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = link;
                } else {
                    swal("Safe Data!");
                }
            });
    });
</script>

</body>
</html>




{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--        <div class="wrapper without_header_sidebar">--}}
{{--            <!-- contnet wrapper -->--}}
{{--            <div class="content_wrapper">--}}
{{--                    <!-- page content -->--}}
{{--                    <div class="login_page center_container">--}}
{{--                        <div class="center_content">--}}
{{--                            <div class="logo">--}}
{{--                                <img src="{{asset('public/panel/assets/images/logo.png')}}" alt="" class="img-fluid">--}}
{{--                            </div>--}}
{{--                            <form action="{{route('login')}}" class="d-block" method="post">--}}
{{--                                @csrf--}}
{{--                                <div class="form-group icon_parent">--}}
{{--                                    <label for="email">E-mail</label>--}}
{{--                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">--}}
{{--                                    <span class="icon_soon_bottom_right"><i class="fas fa-envelope"></i></span>--}}
{{--                                 @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                 @enderror--}}
{{--                                </div>--}}
{{--                                <div class="form-group icon_parent">--}}
{{--                                    <label for="password">Password</label>--}}
{{--                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">--}}
{{--                                        @error('password')--}}
{{--                                            <span class="invalid-feedback" role="alert">--}}
{{--                                                <strong>{{ $message }}</strong>--}}
{{--                                            </span>--}}
{{--                                        @enderror--}}
{{--                                    <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label class="chech_container">Remember me--}}
{{--                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}
{{--                                        <span class="checkmark"></span>--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <a class="registration" href="{{route('register')}}">Create new account</a><br>--}}
{{--                                    <a href="{{ route('password.request') }}" class="text-white">I forgot my password</a>--}}
{{--                                    <button type="submit" class="btn btn-blue">Login</button>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                            <div class="footer">--}}
{{--                                <p>Copyright &copy; 2019 <a href="https://durbarit.com/">Durbar IT</a>. All rights reserved.</p>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--            </div><!--/ content wrapper -->--}}
{{--        </div><!--/ wrapper -->--}}
{{--@endsection--}}
