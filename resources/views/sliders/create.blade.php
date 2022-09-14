@extends('layouts.dashboard.dashboard')

@section('content')
    
    <div class="row d-flex justify-content-center">
        <div class="col-lg-7 margin-tb">
            <div class="float-left">
                <h2>Add Slide</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('sliders.index') }}"> Back</a>
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

    <form action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row" style="justify-content: center">
            <div class="col-md-7">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control bg-grey" style="color: rgb(181, 181, 181)"
                        placeholder="Image">
                </div>
            </div>
            <div class="col-md-7 text-center">
                <button type="submit" class="btn btn-primary btn-10 col-2">Confirm</button>
            </div>
        </div>

    </form>
@endsection
