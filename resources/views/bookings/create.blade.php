@extends('layouts.dashboard.dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add Bookings</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('bookings.index') }}"> Back</a>
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

    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        <div class="row"  style="justify-content: center">
            <div class="col-xs-12 col-sm-12 col-md-7">
                <div class="form-group">
                    <strong>Time:</strong><br />
                    <select class="form-select form-select-lg mb-3" name="time_id" aria-label=".form-select-lg example">
                        <option selected>Choose Time</option>
                        @foreach ($times as $time)
                            <option value="{{ $time->id }}">{{ $time->time }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7">
                <div class="form-group">
                    <strong>User:</strong><br />
                    <select class="form-select form-select-lg mb-3" name="user_id" aria-label=".form-select-lg example">
                        <option selected>Choose User</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7">
                <div class="form-group">
                    <strong>Seat:</strong><br />
                    <input type="integer" name="seat" placeholder="seat">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
