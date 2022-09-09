@extends('layouts.dashboard.dashboard')
@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-lg-7 margin-tb">
        <div class="float-left">
            <h2>Add New Users</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
        </div>
    </div>
</div>
    <div class="card card-primary" style="margin: 100px 400px; display: fixed">
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
        <!-- form start -->
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row" style="justify-content: center">
                    <div class="col-xs-12 col-sm-12 col-md-7">
                        <div class="form-group">
                            <strong>UserName:</strong>
                            <input type="text" name="name" class="form-control bg-grey text-light" placeholder="Enter UserName">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7">
                        <div class="form-group">
                            <strong>Email:</strong>
                            <input type="email" name="email" class="form-control bg-grey text-light" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7">
                        <div class="form-group">
                            <strong>PhoneNumber:</strong>
                            <input type="text" name="phone" class="form-control bg-grey text-light"
                                placeholder="Enter phonenumber">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7">
                        <div class="form-group">
                            <strong>Password:</strong>
                            <input type="password" name="password" class="form-control bg-grey text-light"
                                placeholder="Password">
                        </div>
                    </div>
                <div class="row">
                    {{-- <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <label>Check Status</label>
                            <select class="custom-select">
                                <option>Approved</option>
                                <option>Not Approved</option>
                            </select>
                        </div>
                    </div> --}}
             
                        <div class="col-sm-6">
                            <!-- select -->
                            <div class="form-group">
                                <label for="type">Type User</label>
                                <select class="custom-select" name="type" > 
                                    <option value="1">Admin</option>
                                    <option value="0">User</option>
                                </select>
                            </div>
                        </div>
                
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create User</button>
            </div>
        </form>
    </div>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
