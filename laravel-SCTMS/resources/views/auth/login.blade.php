@extends('layouts.landingPage.master')

@section('content')

<section class="section">
    <div class="container mt-2">
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                <div class="login-brand">
                    <a href="/">
                        <img alt="logo" width="300" src="images/demo/logo.jpg">
                    </a>
                </div>


                <div class="card card-primary">
                    <div class="card-header"><h4>Login</h4></div>

                    <div class="card-body">
                        <div id="login-info-box">

                            
                        </div>


                        <div class="row">
                            <div class="col-md-6 mb-5">




                                <form method="POST" action="{{ route('login') }}" class="needs-validation">
                                    @csrf

                                    <div class="form-group">
                                            <label for="email">Email</label>
                                             <input id="email" type="email" class="form-control login-email @error('email') is-invalid @enderror " name="email" tabindex="1" value="{{ old('email') }}" required="" autofocus="" autocomplete="email">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror


                                            <div class="form-group">
                                                <div class="d-block">
                                                  <label for="password" class="control-label">Password</label>

                                                </div>
                                                <input id="password" type="password" class="form-control login-password @error('password') is-invalid @enderror " name="password" tabindex="2" required="" autocomplete="current-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>

                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember" {{ old('remember') ? 'checked' : '' }} >
                                                <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                                {{ __('Login') }}
                                            </button>

                                            

                                        </div>
                                       </div>
                                </form>

                                    </div>
                            <div class="col-md-6 text-center pt-3 pr-5 pl-5">
                                <h4>New user?</h4>
                                <br>
                                <h1><i class="fa fa-user"></i></h1>
                                <br>
                                <a href="/register" class="btn btn-primary btn-block btn-lg">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
