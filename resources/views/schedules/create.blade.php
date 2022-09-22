@extends('layouts.dashboard.dashboard')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add Schedule</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('schedules.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <br><br>
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
    <div class="container">
        <div class="card mt-3">
            
        </div>
    </div>
    


    <div class="card" style="width: 40rem;height:">


        <div class="row">

            <form action="{{ route('schedules.store') }}" method="POST">
                @csrf
                <br>
                <select name="theaterID">
                    <option selected value="Theater">theater</option>
                    @foreach ($theaters as $theater)
                        <option value="{{ $theater->id }}">{{ $theater->name }}</option>
                    @endforeach
                </select>

                <select name="productID">
                    <option selected value="Movie">movie</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
                <div class="form-group">
                    <strong>Price:</strong>
                    <input type="text" name="price" class="form-control bg-grey text-light" placeholder="Enter Price">
                </div>
                <div class="form-group">
                    <strong>Date:</strong>
                    <input type="date" name="date" class="form-control bg-grey text-light" placeholder="Enter Price">
                </div>
                <div class="form-group">
                    <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (Session::has('success'))
                                <div class="alert alert-success text-center">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    <p>{{ Session::get('success') }}</p>
                                </div>
                            @endif
                            <table class="table table-bordered" id="dynamicAddRemove">
                                <tr>
                                    <th>Times</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td><input type="time" name="moreFields[]" 
                                            class="form-control" /></td>
                                    <td><button type="button" name="add" id="add-btn" class="btn btn-success">Add
                                            More</button></td>
                                </tr>
                            </table>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>





    <script type="text/javascript">
        var i = 0;
        $("#add-btn").click(function() {
            ++i;
            $("#dynamicAddRemove").append('<tr><td><input type="time" name="moreFields[]" placeholder="Enter time" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>'
                );
        });
        $(document).on('click', '.remove-tr', function() {
            $(this).parents('tr').remove();
        });
    </script>
@endsection
