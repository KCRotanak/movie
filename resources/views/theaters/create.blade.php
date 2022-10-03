@extends('layouts.dashboard.dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add Theater</h2>
            </div>
            <div class="float-left">
                <a class="btn btn-primary" href="{{ route('theaters.index') }}"> Back</a>
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

    <form action="{{ route('theaters.store') }}" method="POST">
        @csrf
        <div class="row" style="justify-content: center">
            <div class="col-xs-12 col-sm-12 col-md-7">
                <div class="form-group">
                    <strong>name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Theater name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
