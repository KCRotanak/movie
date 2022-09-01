@extends('layouts.app')
@section('content')
    <div class="showtime-card">
        <div class="showtime-image">
            <h2><b>Interstellar</b></h2>
            <img src="{{ asset('/img/interstellar.jpg') }}" alt="">
        </div>
        <div class="showtime-detail">
            <div class="showtime-info">
                <p>Theater 1</p>
                <i class="bx bxs-calendar"></i>
                <span>05-Aug-2022</span><br>
                <i class="bx bxs-time"></i>
                <span>120 minutes</span><br>
                <i class="bx bx-movie-play"></i>
                <span>Comedy</span><br>
                <i class="bx bxs-megaphone"></i>
                <span>EN/KH</span><br>


            </div>
            <div class="showtime-clock">
                <ul>
                    <a href="{{ asset('/seat') }}"><b>11:30</b></a>
                    <a href="{{ asset('/seat') }}"><b>14:00</b></a>
                    <a href="{{ asset('/seat') }}"><b>16:30</b></a>
                    <a href="{{ asset('/seat') }}"><b>19:30</b></a>
                </ul>
            </div>
        </div>

    </div>
    <div class="showtime-card">
        <div class="showtime-image">
            <h2><b>Interstellar</b></h2>
            <img src="{{ asset('/img/interstellar.jpg') }}" alt="">
        </div>
        <div class="showtime-detail">
            <div class="showtime-info">
                <p>Theater 2</p>
                <i class="bx bxs-calendar"></i>
                <span>05-Aug-2022</span><br>
                <i class="bx bxs-time"></i>
                <span>120 minutes</span><br>
                <i class="bx bx-movie-play"></i>
                <span>Comedy</span><br>
                <i class="bx bxs-megaphone"></i>
                <span>EN/KH</span><br>


            </div>
            <div class="showtime-clock">
                <ul>
                    <a href="{{ asset('/seat') }}"><b>11:30</b></a>
                    <a href="{{ asset('/seat') }}"><b>14:00</b></a>
                    <a href="{{ asset('/seat') }}"><b>16:30</b></a>
                    <a href="{{ asset('/seat') }}"><b>19:30</b></a>
                </ul>
            </div>
        </div>

    </div>
    <div class="showtime-card">
        <div class="showtime-image">
            <h2><b>Interstellar</b></h2>
            <img src="{{ asset('/img/interstellar.jpg') }}" alt="">
        </div>
        <div class="showtime-detail">
            <div class="showtime-info">
                <p>Theater 3</p>
                <i class="bx bxs-calendar"></i>
                <span>05-Aug-2022</span><br>
                <i class="bx bxs-time"></i>
                <span>120 minutes</span><br>
                <i class="bx bx-movie-play"></i>
                <span>Comedy</span><br>
                <i class="bx bxs-megaphone"></i>
                <span>EN/KH</span><br>


            </div>
            <div class="showtime-clock">
                <ul>
                    <a href="{{ asset('/seat') }}"><b>11:30</b></a>
                    <a href="{{ asset('/seat') }}"><b>14:00</b></a>
                    <a href="{{ asset('/seat') }}"><b>16:30</b></a>
                    <a href="{{ asset('/seat') }}"><b>19:30</b></a>
                </ul>
            </div>
        </div>

    </div>
@endsection
