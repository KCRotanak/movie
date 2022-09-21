<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <title>Phoenix Home</title>
    <link rel="icon" href="{{ asset('img/onlylogo.png') }}" type="image/png" />
    <meta name="description" content="">
    <meta name="viewport" content="width-device-width,initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href=" {{ asset('/css/frontcss/layout-homepage.css') }} ">
    <link rel="stylesheet" href=" {{ asset('/css/frontcss/comingsoon.css') }} ">
    <link rel="stylesheet" href=" {{ asset('/css/frontcss/moviedetail.css') }} ">
    <link rel="stylesheet" href=" {{ asset('/css/frontcss/showtime.css') }} ">
    <link rel="stylesheet" href=" {{ asset('/css/frontcss/seat.css') }} ">
    <link rel="stylesheet" href=" {{ asset('/css/frontcss/contact.css') }} ">
    <link rel="stylesheet" href=" {{ asset('/css/frontcss/loading.css') }} ">
    <link rel="stylesheet" href=" {{ asset('/css/frontcss/booking.css') }} ">
    {{-- <link rel="stylesheet" href=" {{ asset('/css/frontcss/style.css') }} "> --}}
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="/lib/lity/lity.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    {{-- swiper css --}}
    <link rel="stylesheet" href="{{ asset('/css/frontcss/swiper-bundle.min.css') }} ">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js""></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js"></script>
    <!-- CSS bootstrap 5.2 only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
        {{-- link icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script> --}}
    <script scr=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script scr=" https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"></script>
    <script scr=" https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    

    <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css");
    </style>
</head>

<body>
  
    {{-- --------------- --}}
    <header>
          {{-- loading --}}
    <div class="loader">
        <div class="blank"></div>
        <div class="loader-content">
            <img src="https://i.pinimg.com/originals/3d/6a/a9/3d6aa9082f3c9e285df9970dc7b762ac.gif" alt="Loader"
                class="loader-loader" />
        </div>
    </div>
        <div class="header-top">
            <div class="bar-top-left">
                <img src="../img/logo.png"alt="logo" style="cursor: pointer" onclick="window.location.href='/'">
            </div>


            <div class="bar-top-right ">
                @guest
                    @if (Route::has('login'))
                        <a class="button-login" href="{{ route('login') }}">{{ 'Login' }}</a>
                    @endif
                    @if (Route::has('register'))
                        <a class="button-register" href="{{ route('register') }}">{{ 'Register' }}</a>
                    @endif
                @else
                    <div class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="/profile/avatar/{{ Auth::user()->avatar }}" alt="author-image"
                                class="img-xs rounded-circler" style="border-radius: 50%; width: 35px; height: 35px">&ensp;
                            <span class="mb-0 d-sm-block navbar-profile-name">{{ auth()->user()->name }}
                            </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="profileDropdown">

                            <li>
                                <a class="dropdown-item" href="/editprofile">
                                    {{ 'Edit account' }}
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/admin/home">
                                    {{ auth()->user()->name }}
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    {{ 'Logout' }}
                                </a>
                            </li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </div>

                @endguest
            </div>
        </div>
        <div class="header-bottom">

            @php
                $currentRouteName = request()->route()->getName();
            @endphp

            <a href="{{ asset('/') }}" class="{{$currentRouteName === 'home' ? 'active' : ''}} six">Home</a>
            <a href="{{ asset('/showtime') }}" class="{{$currentRouteName === 'showtime' ? 'active' : ''}} one">Showtime</a>
            <a href="{{ asset('/comingsoon') }}" class="{{$currentRouteName === 'comingsoon' ? 'active' : ''}} one">Coming Soon</a>
            <a href="{{ asset('/contact') }}" class="{{$currentRouteName === 'contact.create' ? 'active' : ''}} one">Contact Us</a>

        </div>

        {{-- bootstrap of logo --}}

    </header>

    <div class="wrapper-body">
        {{-- <main> --}}
        @yield('content')

        {{-- </main> --}}

    </div>


    <footer>
        <div class="top-footer">

            <div class="top-left-footer">
                <h3>Menu Link</h3>

                <a href="/">Home</a><br>
                <a href="/">Now Showing</a><br>
                <a href="/comingsoon">Coming Soon</a><br>
                <a href="/contact">Contact Us</a><br>
                <a href="/aboutus">About Us</a>
            </div>

            <div class="top-middle-footer">
                <h3>About Phoenix Cinema</h3>
                <p>We provide showtime of movies and you can book for the seat.</p>
            </div>
            <div class="top-right-footer">
                <h3>Connect with Us</h3>
                <h4>011-575-065</h4>
                <div class="icon-social">
                    <img src="../img/facebook_icon.png" style="cursor: pointer"
                        onclick="window.location.href='https://www.facebook.com/kong.rotanak.7/'">
                    <img src="../img/telegram_icon.png" style="cursor: pointer"
                        onclick="window.location.href='https://web.telegram.org/z/#467814096'">
                    <img src="../img/gmail_icon.png" style="cursor: pointer"
                        onclick="window.location.href='https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSMVlCTvxqTrbzWjQtKtvKwCZVHlfMBhgPbbSmcsXDhrgxZsVgsPpxmCfldhpRQQjQNkkJNz'">
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <p>Copyright &copy; 2022. Alright reserved.</p>
            <a href="/policy">Privacy Policy</a>
            <a href="/term">Terms of Conditions</a>
            <a href="/cookie">Cookie Preferences</a>
        </div>
    </footer>
    {{-- nav bar --}}
    <script>
    $(document).ready(function () {
  
        $(".one").click(function (){
          $(this).addClass("active").siblings().removeClass("active");
        });
      });
        </script>
    
    {{-- js popup video --}}
    <script>
        $(document).on("click", "#cust_btn", function() {

        function lightbox_open() {
            var lightBoxVideo = document.getElementById("VisaChipCardVideo");
            window.scrollTo(0, 0);
            document.getElementById('light').style.display = 'block';
            document.getElementById('fade').style.display = 'block';
            lightBoxVideo.play();
        }

        })
    </script>
    <script>
        window.document.onkeydown = function(e) {
            if (!e) {
                e = event;
            }
            if (e.keyCode == 27) {
                lightbox_close();
            }
        }

        function lightbox_open() {
            var lightBoxVideo = document.getElementById("VisaChipCardVideo");
            window.scrollTo(0, 0);
            document.getElementById('light').style.display = 'block';
            document.getElementById('fade').style.display = 'block';
            lightBoxVideo.play();
        }

        function lightbox_close() {
            var lightBoxVideo = document.getElementById("VisaChipCardVideo");
            document.getElementById('light').style.display = 'none';
            document.getElementById('fade').style.display = 'none';
            lightBoxVideo.pause();
        }
    </script>
    <script>
        window.onload = function() {
            setTimeout(function() {
                var loader = document.getElementsByClassName("loader")[0];
                loader.className = "loader fadeout";
                setTimeout(function() {
                    loader.style.display = "none"
                }, 500)
            }, 500)
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

</body>


</html>
