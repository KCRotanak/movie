@extends('layouts.dashboard.dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <a class="btn btn-info" href="/admin/home">back</a>

            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create movie</a>
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
                <th>Name</th>
                <th>Language</th>
                <th>Duration</th>
                <th>Genre</th>
                <th>Date</th>
                <th>URL</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td><img src="/image/{{ $product->image }}" width="100px"></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->lang }}</td>
                    <td>{{ $product->duration }}</td>
                    <td>{{ $product->genre }}</td>
                    <td>{{ $product->date }}</td>
                    <td>{{ $product->URL }}</td>
                    <td>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('products.show', $product->id) }}">Show</a>

                            <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <div style="position: fixed; bottom: 50;">
        {!! $products->links() !!}
        </div>
    </div>
@endsection
