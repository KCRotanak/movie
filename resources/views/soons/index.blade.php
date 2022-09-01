@extends('layouts.dashboard.dashboard')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <a class="btn btn-info" href="/admin/home">back</a>

            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('soons.create') }}"> Create movie</a>
            </div>
        </div>
    </div>
    
    
     
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>URL</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($soons as $soon)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/image/{{ $soon->image }}" width="100px"></td>
            <td>{{ $soon->name }}</td>
            <td>{{ $soon->URL }}</td>
            <td>
                <form action="{{ route('soons.destroy',$soon->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('soons.show',$soon->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('soons.edit',$soon->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    {!! $soons->links() !!}

@endsection