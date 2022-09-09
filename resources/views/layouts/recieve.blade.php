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
    <link rel="stylesheet" href=" {{ asset('/css/frontcss/booking.css') }} ">
    <link rel="stylesheet" href=" {{ asset('/css/frontcss/loading.css') }} ">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css");
    </style>
</head>

<body style="background-color: #393939">
    {{-- loading --}}
    <div class="loader">
        <div class="blank"></div>
        <div class="loader-content">
            <img src="https://raw.githubusercontent.com/Codelessly/FlutterLoadingGIFs/master/packages/cupertino_activity_indicator_square_medium.gif"
                alt="Loader" class="loader-loader" />
        </div>
    </div>
    {{-- --------------- --}}
    <header>
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

    </header>
    <div class="wrapper-body">
        {{-- <main> --}}     
              

        @yield('content')

        {{-- </main> --}}

    </div>
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
</body>

</html>
