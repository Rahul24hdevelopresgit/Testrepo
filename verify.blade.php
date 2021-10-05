@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-7 banner-img" style="background-repeat: no-repeat;background-position: center;background-image: url({{url('public/images/login.jpg')}})">
                </div>
                <div class="col-md-5">                   
                    <form class="d-inline login100-form validate-form" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                         @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                        @endif

                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <span class="login-title p-b-43">{{ __('Verify Your Email Address') }}</span>
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
