@extends('layouts.app')
@section('content')
    <div class="edit-profile-container">
        <div class="container rounded bg-white mt-5">
            <div class="row covered">
                <div class="col-md-4 border-right">
                    <form action="{{ route('update_profile') }}"
                        class="d-flex flex-column align-items-center text-center p-3 py-5" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <h3 class="text-black-50">Edit Profile</h3>
                        <input type="file" name="image" onchange="loadFile(event)"
                            style="position: absolute; opacity: 0; cursor: pointer; width: 20%; margin-top:51px; height: 20%; border: 1px solid; z-index: 10">
                        <img class="image rounded-circle" id="output"
                        src="/profile/avatar/{{ Auth::user()->avatar }}" alt="profile_image"
                            style="width: 100px; height: 100px; padding: 2px; margin: 0px; border: 3px solid rgb(227, 221, 221);">
    
                        <span class="font-weight-bold">
                            {{ Auth::user() ? Auth::user()->name : '' }}</span>
                        <span class="text-black-50"> {{ Auth::user() ? Auth::user()->email : '' }}</span>
    
                        <button class="btn btn-success profile-button" type="submit">Save Profile</button>
                    </form>
                </div>
    
    
                <form action="{{ route('update_profile', Auth::user()->id) }}" class="col-md-8" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="_method" value="put">
                    <div>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                    </div>
    
                    <div class="p-3 py-5">
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label for="Username" class="form-label">Username</label>
                                <input type="text" id="Username" class="form-control" placeholder="first name"
                                    name="name" value="{{ Auth::user() ? Auth::user()->name : '' }}">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" class="form-control" name="email"
                                    value=" {{ Auth::user() ? Auth::user()->email : '' }}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control"
                                    value="{{ Auth::user() ? Auth::user()->phone : '' }}">
                            </div>
                            <div class="col-md-6">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" name="address" id="address" class="form-control"
                                    value="{{ Auth::user() ? Auth::user()->address : '' }} ">
                            </div>
                        </div>
                        <div class="mt-5 text-right"><button class="btn btn-success profile-button" type="submit">Save Changes</button>
                        </div>
                    </div>
                </form>
    
            </div>
        </div>
    </div>
        <script>
            var loadFile = function(event) {
                var output = document.getElementById('output');
                output.src = URL.createObjectURL(event.target.files[0]);
                output.onload = function() {
                    URL.revokeObjectURL(output.src) // free memory
                }
            };
        </script>
        {{-- <div class="container">
            <div class="inner-container">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Edit Profile</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ asset('/editpassword') }}"> Edit Password</a>
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
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Profile Image:</strong><br>
                                <img src="/profile/avatar/{{ Auth::user()->avatar }}" width="300px">
                                <input type="file" name="avatar" class="form-control" placeholder="image">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>UserName:</strong>
                                <input type="text" name="name"
                                    value="{{ old('name') ? old('name') : Auth::user()->name }}" class="form-control"
                                    placeholder="Name">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>PhoneNumber:</strong>
                                <input type="text" name="phone"
                                    value="{{ old('phone') ? old('phone') : Auth::user()->phone }}" class="form-control"
                                    placeholder="genre">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Email:</strong>
                                <input type="email" name="email"
                                    value="{{ old('email') ? old('email') : Auth::user()->email }}" class="form-control"
                                    placeholder="url">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" name="sendmessage" value="Submit"class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div> --}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection
