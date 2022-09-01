@extends('layouts.app')
@section('content')
    <!-- START SECTION USER PROFILE -->
    <section class="user-page section-padding pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-12 col-xs-12 pl-0 pr-0 user-dash">
                </div>
                <div class="col-lg-4 col-md-6 col-xs-6 widget-boxed mt-33 mt-0 offset-lg-2 offset-md-3">
                    <div class="sidebar-widget author-widget2">
                        <div class="agent-contact-form-sidebar">
                            <a href="{{ asset('/editprofile') }}"> edit profile </a>
                            {{-- <form  method="post" action="functions.php"> --}}
                            <form name="contact_form" action="{{ route('update-password') }}" id="change_password_form"
                                method="post">
                                @csrf
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @elseif (session('error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="password" name="old_password" id="old_password" class="form-control @error('old_password') is-invalid @enderror" placeholder="Old Password" autocomplete="off"/>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="bi bi-eye-slash" id="togglePw_current" onclick="showPassword('old_password')"></i></span>
                                            @error('old_password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group" id="show_hide_password">
                                        <input type="password"  name="new_password" id="new_password" class="form-control @error('new_password') is-invalid @enderror" placeholder="New Password" autocomplete="off"/>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="bi bi-eye-slash" id="togglePw_1" onclick="showPassword('new_password')"></i></span>
                                                @error('old_password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group" id="show_hide_password">
                                        <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control @error('new_password') is-invalid @enderror" placeholder="Confirm Password" autocomplete="off" />
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="bi bi-eye-slash" id="togglePw_2" onclick="showPassword('new_password_confirmation')" ></i></span>
                                                @error('confirm_password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" name="sendmessage" class="multiple-send-message" value="Submit" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <script>
        function showPassword() {
            var x = document.getElementById("old_password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
              
            }

            var y = document.getElementById("new_password");
            if (y.type === "password") {
                y.type = "text";
            } else {
                y.type = "password";
          
            }

            var z = document.getElementById("new_password_confirmation");
            if (z.type === "password") {
                z.type = "text";
            } else {
                z.type = "password";
            }

        }
        function showPassword(targetID) {
            var x = document.getElementById(targetID);

            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
        
            }
        }   
    </script>
    <!-- END SECTION USER PROFILE -->
@endsection