@extends('layouts.dashboard.dashboard')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('bookings.create') }}"> Create booking</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>User</th>
            <th>Time</th>
            <th>Seat</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($bookings as $booking)
        <tr>
            <td>{{ $booking->id }}</td>
            <td>{{ $booking->user->name }}</td>
            <td>{{ $booking->time->time }}</td>
            <td>{{ $booking->seat }}</td>
            <td>
                <form action="{{ route('bookings.destroy',$booking->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('bookings.show',$booking->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('bookings.edit',$booking->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div style="position: fixed; bottom: 50;">
        {!! $bookings->links() !!}
        </div>
@endsection