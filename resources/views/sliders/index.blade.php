@extends('layouts.dashboard.dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('sliders.create') }}">add slide</a>
            </div>
        </div>


        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif


        <table class="table table-bordered mt-2">
            <tr>
                <th>No</th>
                <th>Image</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($sliders as $slide)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td><img src="/slideimage/{{ $slide->image }}" width="100px"></td>
                    <td>
                        <form action="{{ route('sliders.destroy', $slide->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <div style="position: fixed; bottom: 50;">
        {!! $sliders->links() !!}
        </div>
    </div>
@endsection
