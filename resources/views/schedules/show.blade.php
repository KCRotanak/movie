@extends('layouts.dashboard.dashboard')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show movie</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('schedules.index') }}"> Back</a>
            </div>
        </div>
    </div>
    

    <div class="card " style="width: 30rem; border-radius: 30px">
        <strong>Movie_ID:</strong>
        <img class="card-img-top" src="/image/{{$schedule->product->image}}" alt="" style="border-radius: 30px 30px 0px 0px">
        <div class="card-body">
            <div class="form-group">
                Movie name:
                <strong> {{ $schedule->product->name }}</strong>
            </div>
            <div class="form-group">
               Theater name:
                <strong> {{ $schedule->theater->name }}</strong>
            </div>
        </div>
      </div>
@endsection