@extends('layouts.app')

@section('content')
<style>
    .cardreset{
        display: flex;
        justify-content: center;
        align-items: center;

    }
    .card-body{
        
        padding: 30px 25px 25px 550px;
 
        background-color:#fff; 
    }
</style>
<div class="cardreset">
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
</div>
@endsection
