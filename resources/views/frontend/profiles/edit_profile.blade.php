@extends('layouts.dash')
@section('content')
<div class="container-fluid">
    <div class="row main-content bg-success text-start">
        <div class="col-md-4 text-center company__info">
            <span class="company__logo">
                <h2><span class="fa fa-android"></span></h2>
            </span>
            <form action="{{ route('update_profile') }}" method="POST" enctype="multipart/form-data" style="padding: 0 5px !important">
                @csrf
                @method('PUT')

                <div class="row text-start">
                    <div class="profile-image-edit">
                        <div class="form-group">
                            <h5>Profile Image</h5>

                            <img src="/profile/avatar/{{ Auth::user()->avatar }}"
                                alt="avatar"width="280px"style="border-radius:10px; margin-top: 5px">
                            <input type="file" name="avatar" class="form-control" placeholder="image" style="margin-top: 15px; font-size: 14px; max-width: 215px">

                        </div>
                    </div>
                </div>
            {{-- </form> --}}
        </div>
        <div class="col-md-8 col-xs-12 col-sm-12 login_form">
            <div class="container-fluid">
                
                <div class="row text-center">
                    <h2>Edit Profile</h2>
                </div>
                <div class="row">
                    {{-- <form action="{{ route('update_profile') }}" method="POST" enctype="multipart/form-data">
                        @csrf --}}
                        @method('PUT')
                        <div class="row">
                            <strong>Name:</strong>
                            <input type="text" name="name"
                            value="{{ old('name') ? old('name') : Auth::user()->name }}" class="form__input"
                            required autocomplete="name" autofocus placeholder="Name">

                        </div>
                        <div class="row">
                            <strong>Email:</strong>
                            <input type="email" name="email"
                            value="{{ old('email') ? old('email') : Auth::user()->email }}" class="form__input"
                            required autocomplete="email" autofocus placeholder="Email">

                        </div>
                        <div class="row">
                            <strong>Phone:</strong>
                            <input type="text" name="phone"
                            value="{{ old('phone') ? old('phone') : Auth::user()->phone }}" class="form__input"
                            required autocomplete="phone" autofocus placeholder="Phone Number">
                            <!-- <span class="fa fa-lock"></span> -->
                            {{-- <input id="password" type="password"
                                class="form__input @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password" placeholder="password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>

                        <div class="row justify-content-center">
                          
                            <button type="submit" name="sendmessage" class="btn">Save</button>
                                {{-- {{ __('Login') }}
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif --}}
                        </div>
                    </form>
                </div>
                <div class="row text-center">
                    {{-- <a class="btn_edit" href="{{ asset('/editpassword') }}"> Edit Password</a> --}}
                    <p>Do you want to change password? <a href="{{ asset('/editpassword') }}">Change Password Here</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

    {{-- <section class="contact-page-section">
        <div class="container">
            <div class="inner-container">
                <div class="row clearfix p-3 mb-2">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="float-start">
                                <h2>Edit Profile</h2>
                            </div>
                            <div class="float-end">
                                <a class="btn_edit" href="{{ asset('/editpassword') }}"> Edit Password</a>
                            </div>
                        </div>
                    </div>


                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('update_profile') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="hi" style="max-width: 200px">
                                <div class="form-group">
                                    <strong>Profile Image:</strong>

                                    <img src="/profile/avatar/{{ Auth::user()->avatar }}"
                                        alt="avatar"width="50px"style="border-radius:50px;">
                                    <input type="file" name="avatar" class="form-control" placeholder="image" style="max-width: 200px; font-size: 10px">

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>User Name:</strong>
                                    <input type="text" name="name"
                                        value="{{ old('name') ? old('name') : Auth::user()->name }}" class="form-control"
                                        placeholder="Name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>email:</strong>
                                    <input type="email" name="email"
                                        value="{{ old('email') ? old('email') : Auth::user()->email }}"
                                        class="form-control" placeholder="Mail">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Phone number:</strong>
                                    <input type="text" name="phone"
                                        value="{{ old('phone') ? old('phone') : Auth::user()->phone }}"
                                        class="form-control" placeholder="url">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" name="sendmessage"class="btn btn-primary">Save</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
