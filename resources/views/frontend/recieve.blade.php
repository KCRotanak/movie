@extends('layouts.app')
@section('content')
@forelse ($bookings as $booking)
<div class="container">
<div class="ticket">
	<div class="left">
		<div class="image">
		</div>
		<div class="ticket-info">
			<p class="date">
				<span>{{$booking->time->schedule->date}}</span>
				<span>{{$booking->time->schedule->theater->name}}</span>
			</p>
			<div class="show-name">
				<h1>{{$booking->time->schedule->product->name}}</h1>
			</div>
			<div class="time">
				<p>{{$booking->time->time}}</p>
			</div>
			<p class="theater"><span>PHOENIX CINEMA</span>
			</p>
		</div>
	</div>
	<div class="right">
		<div class="right-info-container">
			<div class="show-name">
				<h1>{{$booking->time->schedule->product->name}}</h1>
			</div>
			<div class="time">
        <p>{{$booking->time->schedule->date}}</p>
				<p>{{$booking->time->time}}</p>
				<p>{{$booking->time->schedule->theater->name}}</p>
			</div>
			<p class="ticket-number">
				{{$booking->id}}
			</p>
		</div>
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
