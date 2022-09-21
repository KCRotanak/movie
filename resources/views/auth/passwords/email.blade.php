@extends('layouts.dash')

@section('content')



<div class="container-fluid">
    <div class="row main-content bg-success text-center">
        <div class="col-md-4 text-center company__info">
            <span class="company__logo">
                <h2><span class="fa fa-android"></span></h2>
            </span>
            <img src="{{ asset('img/logo.png') }}" alt="">
        </div>
        <div class="col-md-8 col-xs-12 col-sm-12 login_form">
            <div class="container-fluid">
                <div class="row">
                    <h2>Reset Password</h2>
                </div>
                <div class="row">
                    <p>Please enter your email address below and we will send you information to change your password.</p>
                    <label class="label-default" for="un">Email Address</label>
                    <form control="" class="form-group" method="POST"  action="{{ route('password.email') }}">
                        @csrf
                        <div class="row">
                            <input id="email" type="email"
                                class="form__input @error('email') is-invalid @enderror" name="email"
                                value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row">
                          
                            <button type="submit" class="btn btn-primary">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="cardreset">
    <div class="card-body ">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="row">
                <div class="col-md-5 forgot-form">
                    <p>Please enter your email address below and we will send you information to change your password.</p>
                    <label class="label-default" for="un">Email Address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <br><br>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <button type="submit" class="btn btn-primary">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>
                <div class="col-md-5 forgot-return" style="display:none;">
                    <h2>Reset Password Sent</h2>
                    <p>An email has been sent to your address with a reset password you can use to access your account.</p>
                </div>
            </div>


        </form>
    </div>
</div> --}}
@endsection
