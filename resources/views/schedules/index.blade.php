@extends('layouts.dashboard.dashboard')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('schedules.create') }}"> Create movie</a>
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
            <th>Theater_ID</th>
            <th>Movie_ID</th>

            <th width="280px">Action</th>
        </tr>

        @foreach ($schedules as $schedule)         
        <tr>
          <td>{{ ++$i }}</td>
            <td>{{ $schedule->theater->theater}}</td>
            <td>{{ $schedule->product->name}}</td>
            <td>
            <form action="{{ route('schedules.destroy',$schedule->id) }}" method="POST">
 
                <a class="btn btn-info" href="{{ route('schedules.show',$schedule->id) }}">Show</a>
  
                <a class="btn btn-primary" href="{{ route('schedules.edit',$schedule->id) }}">Edit</a>
 
                @csrf
                @method('DELETE')
    
                <button type="submit" class="btn btn-danger">Delete</button>
            </td> 
        </tr>
        @endforeach

    </table>
    

@endsection