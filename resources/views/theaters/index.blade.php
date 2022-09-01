@extends('layouts.dashboard.dashboard')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <a class="btn btn-info" href="/admin/home">back</a>

            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('theaters.create') }}"> Create movie</a>
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
            <th>Time</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($theaters as $theater)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $theater->time }}</td>
            <td>
                <form action="{{ route('theaters.destroy',$theater->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('theaters.show',$theater->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('theaters.edit',$theater->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $theaters->links() !!}

@endsection