@extends('layouts.auth')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class ="col-md-12">
            <div class="row">
                <div class="col-md-7 banner-img" style="background-repeat: no-repeat;background-position: center;background-image: url({{url('public/images/login.jpg')}})">
                </div>
                <div class="col-md-5">
                    <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                            @csrf
                        <span class="login-title p-b-43">{{ __('Login') }}</span>
                         @if (session('success'))
                            <div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('success') }}
                            </div>
                        @endif
                        <div class="form-group row"> 
                            <div class="col-md-12 input-div validate-input">
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 input-div validate-input">
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->
                        <div class="form-group row mb-0">
                            <div class="col-md-12 ">
                                <button type="submit" class="width-100 btn btn-primary">
                                    Sign in
                                </button>                                  
                            </div>
                        </div>
                         <div class="form-group row mb-0 p-t-20">
                            <div class="col-md-12 ">
                                <a href="login/spotify" class="width-100 btn btn-success">
                                     <i class="fa fa-spotify"></i> Sign in with spotify
                                </a>                                     
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-12 p-t-20"> 
                                 <a href="register" class="width-100 btn btn-primary">
                                  Register
                                </a> 
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
</div>
@endsection
