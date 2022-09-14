@extends('layouts.app')
@section('content')
    <div class="moviedetail">
     
            <div class="movie-info">
                <div class="info-image">
                    <img src="{{ asset('/image/' .$soon->image) }}" alt="">
                </div>
                <div class="info-descript">
                    <h2><b>{{$soon->name}}</b></h2>
                </div>
            </div>   
            <div class="trailer">
                <h2>Movie Detail</h2>
                <iframe src="{{ $soon->URL }}" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>

            </div>

      
    </div>
@endsection
