<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Movie Seat Booking</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../css/style.css">
    {{-- //<script src="script.js" defer></script> --}}
    <!-- Styles -->
    <style>

    </style>
    <ul>
        <li><a class="active" href="{{ url('/home') }}">Home</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#about">About</a></li>
    </ul>
</head>

<body class="antialiased">

    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/welcome') }}" class=" underline">Home</a>
            @else
                <a href="{{ route('login') }}" class=" underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="underline">Register</a>
                @endif
            @endauth
        </div>
    @endif
    </div>
    {{-- -----------------------Slide-------------------------------------------- --}}
    <form>
        <div class="w3-content w3-section" style="max-width:100%">
            <img class="mySlides" src="../img/johnwick4.png" style="width:50%; height:60%">
            <img class="mySlides" src="../img/batman1.jpg" style="width:50%; height:60%">
            <img class="mySlides" src="../img/conjuring2a.jpg" style="width:50%; height:60%">
        </div>
        <script>
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {
                    myIndex = 1
                }
                x[myIndex - 1].style.display = "block";
                setTimeout(carousel, 1000); // Change image every 2 seconds
            }
        </script>
    </form>
    {{-- ------------------------------------------------------------------- --}}
    {{-- <img src="../img/avengersendgame.jpg" alt="Trulli" width="500" height="333"> --}}
    {{-- ---------------------Videos---------------------------------------------- --}}
    {{-- <div class="container"> 
        <iframe class="responsive-iframe"
        src="https://www.youtube.com/embed/TcMBFSGVi1c" >
        </iframe></div> --}}
    {{-- ------------------------------------------------------------------- --}}
    {{-- <header>
            <form id="form">
                <input
                    type="text"
                    id="search"
                    placeholder="Search"
                    class="search"
                />
            </form>
        </header>
        <main id="main"></main>
        <div class="movie-container">
            <label>Pick a movie:</label>
            <select id="movie">
              <option value="10">Avengers: Endgame ($10)</option>
              <option value="12">Joker ($12)</option>
              <option value="8">Toy Story 4 ($8)</option>
              <option value="9">The Lion King ($9)</option>
            </select>
          </div>
      
          <ul class="showcase">
            <li>
              <div class="seat"></div>
              <small>N/A</small>
            </li>
            <li>
              <div class="seat selected"></div>
              <small>Selected</small>
            </li>
            <li>
              <div class="seat occupied"></div>
              <small>Occupied</small>
            </li>
          </ul>
      
          <div class="container">
            <div class="screen"></div>
      
            <div class="row">
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
            </div>
            <div class="row">
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat occupied"></div>
              <div class="seat occupied"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
            </div>
            <div class="row">
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat occupied"></div>
              <div class="seat occupied"></div>
            </div>
            <div class="row">
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
            </div>
            <div class="row">
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat occupied"></div>
              <div class="seat occupied"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
            </div>
            <div class="row">
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat occupied"></div>
              <div class="seat occupied"></div>
              <div class="seat occupied"></div>
              <div class="seat"></div>
            </div>
          </div>
      
          <p class="text">
            You have selected <span id="count">0</span> seats for a price of $<span
              id="total"
              >0</span
            >
          </p>
      
          <script src="../script.js"></script> --}}
</body>

</html>
