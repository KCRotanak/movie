{{-- @extends('layouts.app')
@section('content') --}}

<div class="recieve">
    <div class="book bookleft">
        <h1>Startup <span>Cinema</span></h1>
        <div class="title">
            <h2>How I met your Mother</h2>
            <span>movie</span>
        </div>
        <div class="hall">
            <h2>theater</h2>
            <span>name</span>
        </div>
        <div class="seat">
            <h2>156</h2>
            <span>seat</span>
        </div>
        <div class="time">
            <h2>12:00</h2>
            <span>time</span>
        </div>

    </div>
    <div class="book bookright">
        <div class="eye"></div>
        <div class="number">
            <h3>156</h3>
            <span>seat</span>
        </div>
        <div class="barcode"></div>
    </div>

</div>
<style>
  .recieve {
    width: 27em;
    margin: 3em auto;
    font-family: sans-serif;
  }
  .book {
    background: linear-gradient(to bottom, #e84c3d 0%, #e84c3d 26%, #ecedef 26%, #ecedef 100%);
    height: 11em;
    float: left;
    position: relative;
    padding: 1em;
    margin-top: 100px;
  }
  .bookleft {
    border-top-left-radius: 8px;
    border-bottom-left-radius: 8px;
    width: 16em;
  }
  .bookright {
    width: 6.5em;
    border-left: 0.18em dashed #fff;
    border-top-right-radius: 8px;
    border-bottom-right-radius: 8px;
  }
  .bookright:before, .bookright:after {
    content: "";
    position: absolute;
    display: block;
    width: 0.9em;
    height: 0.9em;
    background: #fff;
    border-radius: 50%;
    left: -0.5em;
  }
  .bookright:before {
    top: -0.4em;
  }
  .bookright:after {
    bottom: -0.4em;
  }
  h1 {
    font-size: 1.1em;
    margin-top: 0;
  }
  h1 span {
    font-weight: normal;
  }
  .title, .hall, .seat, .time {
    text-transform: uppercase;
    font-weight: normal;
  }
  .title h2, .hall h2, .seat h2, .time h2 {
    font-size: 0.9em;
    color: #525252;
    margin: 0;
  }
  .title span, .hall span, .seat span, .time span {
    font-size: 0.7em;
    color: #a2aeae;
  }
  .title {
    margin: 2em 0 0 0;
  }
  .hall, .seat {
    margin: 0.7em 0 0 0;
  }
  .time {
    margin: 0.7em 0 0 1em;
  }
  .seat, .time {
    float: left;
  }
  .eye {
    position: relative;
    width: 2em;
    height: 1.5em;
    background: #fff;
    margin: 0 auto;
    border-radius: 1em/0.6em;
    z-index: 1;
  }
  .eye:before, .eye:after {
    content: "";
    display: block;
    position: absolute;
    border-radius: 50%;
  }
  .eye:before {
    width: 1em;
    height: 1em;
    background: #e84c3d;
    z-index: 2;
    left: 8px;
    top: 4px;
  }
  .eye:after {
    width: 0.5em;
    height: 0.5em;
    background: #fff;
    z-index: 3;
    left: 12px;
    top: 8px;
  }
  .number {
    text-align: center;
    text-transform: uppercase;
  }
  .number h3 {
    color: #e84c3d;
    margin: 0.9em 0 0 0;
    font-size: 2.5em;
  }
  .number span {
    display: block;
    color: #a2aeae;
  }
  .barcode {
    height: 2em;
    width: 0;
    margin: 1.2em 0 0 0.8em;
    box-shadow: 1px 0 0 1px #343434, 5px 0 0 1px #343434, 10px 0 0 1px #343434, 11px 0 0 1px #343434, 15px 0 0 1px #343434, 18px 0 0 1px #343434, 22px 0 0 1px #343434, 23px 0 0 1px #343434, 26px 0 0 1px #343434, 30px 0 0 1px #343434, 35px 0 0 1px #343434, 37px 0 0 1px #343434, 41px 0 0 1px #343434, 44px 0 0 1px #343434, 47px 0 0 1px #343434, 51px 0 0 1px #343434, 56px 0 0 1px #343434, 59px 0 0 1px #343434, 64px 0 0 1px #343434, 68px 0 0 1px #343434, 72px 0 0 1px #343434, 74px 0 0 1px #343434, 77px 0 0 1px #343434, 81px 0 0 1px #343434;
  }
  
</style>
{{-- @endsection --}}
