
@extends('layouts.dashboard.dashboard')
@section('content')
<div class="row">
    <div class="col-lg-5 margin-tb" style="max-width: 38.5%;">
        
        <div class="float-start">
            <h2> Show Movie</h2>    
        </div>
        <div class="float-end">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>


<div class="card " style="width: 30rem; border-radius: 30px">
    <img class="card-img-top" src="/image/{{ $product->image }}" alt="Card image cap" style="border-radius: 30px 30px 0px 0px">
    <div class="card-body">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $product->name }}
        </div>
        <div class="form-group">
            <strong>Language:</strong>
            {{ $product->lang }}
        </div>
        <div class="form-group">
            <strong>Duration:</strong>
            {{ $product->duration }}
        </div>
        <div class="form-group">
            <strong>Genre:</strong>
            {{ $product->genre }}
        </div>
        <div class="form-group">
            <strong>URL:</strong>
            {{ $product->URL }}
        </div>
    </div>
  </div>
@endsection