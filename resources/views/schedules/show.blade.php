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
     
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Movie_ID:</strong>
                {{ $schedule->movie_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Theater_ID:</strong>
                {{ $schedule->theater_id }}
            </div>
        </div>
    </div>
@endsection