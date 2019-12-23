@extends('admin.admin_layouts')

@section('admin_content')

<div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">PC <span class="tx-info tx-normal">WORLD</span></div>
        <div class="tx-center mg-b-60">Administrative Panel Login</div>

        <form action="{{ route('admin.login') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="adminEmail">E-mail</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">
                @error('password')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div><!-- form-group -->

            <div class="form-group">
                <label for="adminPassword">Password</label>
                <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

{{--            <div class="form-group">--}}
{{--                <label class="chech_container">Remember me--}}
{{--                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}
{{--                    <span class="checkmark"></span>--}}
{{--                </label>--}}
{{--            </div>--}}

            <div class="form-group">
                <a href="{{ route('admin.password.request') }}" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
            </div>
    <!-- form-group -->

            <button type="submit" class="btn btn-info btn-block">Sign In</button>
        </form>

    </div><!-- login-wrapper -->
</div><!-- d-flex -->
@endsection
