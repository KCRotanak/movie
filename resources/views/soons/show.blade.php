@extends('layouts.dashboard.dashboard')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show movie</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('soons.index') }}"> Back</a>
            </div>
        </div>
    </div>
     
    <div class="card " style="width: 25rem; ">
        <img class="card-img-top" src="/image/{{ $soon->image }}" alt="Card image cap">
        <div class="card-body">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $soon->name }}
            </div>
            <div class="form-group">
                <strong>URL:</strong>
                {{ $soon->URL }}
            </div>
        </div>
      </div>
@endsection