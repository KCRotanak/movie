@extends('users.userlayout')
@section('content')
    <div class="card card-primary" style="margin: 100px 400px; display: fixed">
        <div class="card-header">
            <h3 class="card-title">Create Account User</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/admin/users" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" class="form-control" name="name" id="exampleInputName1" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="phone">PhoneNumber</label>
                    <input type="text" class="form-control" name="phone" id="exampleInputName1" placeholder="Enter phonenumber">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>
                {{-- <div class="form-group">
                    <label for="exampleInputPassword2">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder=" Confirm Password">
                </div> --}}
                {{-- <div class="form-group">
                    <label for="exampleInputFile">Choose profile</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                    </div>
                </div> --}}
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
