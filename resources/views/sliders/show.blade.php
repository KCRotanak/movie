
@extends('layouts.dashboard.dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Image</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('sliders.index') }}"> Back</a>
            </div>
        </div>
    </div>
     
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <img src="'/slideimage/'.{{ $slide->image }}" width="100px">

            </div>
        </div>
    </div>
@endsection