@extends('layouts.dash')
@section('content')


    <section class="contact-page-section">
        <div class="container">
            <div class="inner-container"style="border-radius:20px;">
                <div class="row clearfix p-3 mb-2 bg-warning">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>Edit Profile</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-info" href="{{ asset('/editpassword') }}"> editpassword</a>
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
                                    <strong>Profile Image:</strong>

                                    <img src="/profile/avatar/{{ Auth::user()->avatar }}"
                                        alt="avatar"width="50px"style="border-radius:50px;">
                                    <input type="file" name="avatar" class="form-control" placeholder="image">

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
    </section>
@endsection
