@extends('layouts.dash')

    @section('content')
    <section class="contact-page-section">
        <div class="container">
            <div class="inner-container"style="border-radius:20px;">
                <div class="row clearfix p-3 mb-2 bg-warning">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>Edit Password</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-info" href="{{ asset('/editprofile') }}"> Edit Profile</a>
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

                    <form action="{{ route('update-password') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Password:</strong>
                                    <input type="password" name="old_password"
                                     class="form-control"
                                    placeholder="old_password">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>New Password:</strong>
                                    <input type="password" name="new_password"
                                        class="form-control"
                                        placeholder="new_password">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>New Password Confirmation:</strong>
                                    <input type="password" name="new_password_confirmation"
                                        class="form-control"
                                        placeholder="new_password_confirmation">
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


