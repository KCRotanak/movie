@extends('layouts.dash')

@section('content')


    <!-- Main Content -->

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
                        <h2>Log in Form</h2>
                    </div>
                    <div class="row">
                        <form control="" class="form-group" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <i class='bx bx-envelope'></i>
                                <input id="email" type="email"
                                    class="form__input @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row">
                                {{-- <span class="fa fa-lock"></span> --}}
                                <i class='bx bx-key' ></i>
                                <input id="password" type="password"
                                    class="form__input @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password" placeholder="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row">
                              
                                <button type="submit" class="btn">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <p>Don't have an account? <a href="{{ route('register') }}">Register Here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@endsection
