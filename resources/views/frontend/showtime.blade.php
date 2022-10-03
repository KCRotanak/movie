@extends('layouts.app')
@section('content')
@forelse ($schedules as $schedule)
    <div class="showtime-card">
       
        <div class="showtime-image">
            <h2><b>{{$schedule->product->name}}</b></h2>
            <img src="{{ asset('/image/' . $schedule->product->image) }}" alt="">
        </div>
        <div class="showtime-detail">
            <div class="showtime-info">
                <p>{{$schedule->theater->name}}</p>
                <i class="bx bxs-calendar"></i>
                <span>{{$schedule->product->date}}</span><br>
                <i class="bx bxs-time"></i>
                <span>{{$schedule->product->duration}}</span><br>
                <i class="bx bx-movie-play"></i>
                <span>{{$schedule->product->genre}}</span><br>
                <i class="bx bxs-megaphone"></i>
                <span>{{$schedule->product->lang}}</span><br>
  

            </div>
            <div class="showtime-clock">
                <ul>
                   <li>
                    @foreach ($schedule->time as $time)
                        <a
                            href="{{ route('seat-index', ['id' => $time->id])}}"><b>{{ Carbon\Carbon::parse($time->time)->format('h:m A') }}</b></a>
                    @endforeach
                </li>
                </ul>
            </div>
        </div>

    </div>   
    @empty
    <div class="container"style="color: white; overflow: hidden; padding: 150px;   display: flex;
    justify-content: center;
    align-items: center;">
        <img src="../img/noresult.png" alt="">
    @endforelse

@endsection
