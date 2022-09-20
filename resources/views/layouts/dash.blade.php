<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    {{-- <link href="{{ asset('/css/dashboard.css') }}"> --}}
    {{-- css --}}
    <link rel="stylesheet" href=" {{ asset('/css/frontcss/layout-homepage.css') }} ">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LOG IN/REGISTER</title>
    <link rel="icon" href="{{ asset('img/onlylogo.png') }}" type="image/png" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Coda&display=swap");

        * {
            font-family: "Coda", cursive;
        }

        header {
            width: 100%;
            height: 7vh !important;
            background-color: #393939;
            position: sticky;
            top: 0 !important;
            z-index: 0 !important;
            margin-top: 0px !important;
        }

        header .header-top {
            width: 100%;
            height: 100% !important;
            background-color: #302b2b;
            display: flex;
        }

        header .header-bottom {

            height: 0 !important;
        }

        body {
            marign: 0px;
            padding: 0px;
        }

        .container-fluid {
            margin: 4em auto;
        }

        .main-content {
            width: 50%;
            border-radius: 20px;
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.4);
            margin: 9em auto;
            display: flex;
        }

        .company__info {
            background-color: #6a6a6a;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: #fff;
        }

        .fa-android {
            font-size: 3em;
        }

        @media screen and (max-width: 640px) {
            .main-content {
                width: 90%;
            }

            .company__info {
                display: none;
            }

            .login_form {
                border-top-left-radius: 20px;
                border-bottom-left-radius: 20px;
            }
        }

        @media screen and (min-width: 642px) and (max-width: 800px) {
            .main-content {
                width: 70%;
            }
        }

        .row>h2 {
            color: #6a6a6a;
        }

        .login_form {
            background-color: #fff;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
            border-top: 1px solid #ccc;
            border-right: 1px solid #ccc;
        }

        form {
            padding: 0 2em;
        }

        .form__input {
            width: 100%;
            border: 0px solid transparent;
            border-radius: 0;
            border-bottom: 1px solid #aaa;
            padding: 1em 0.5em 0.5em;
            padding-left: 2em;
            outline: none;
            margin: 1.5em auto;
            transition: all 0.5s ease;
        }

        .form__input:focus {
            border-bottom-color: #6a6a6a;
            box-shadow: 0 0 5px rgba(0, 80, 80, 0.4);
            border-radius: 5px;
        }

        .btn {
            transition: all 0.5s ease;
            width: 40%;
            border-radius: 10px;
            color: #6a6a6a;
            font-weight: 600;
            background-color: #fff;
            border: 1px solid #6a6a6a;
            margin-top: 1.5em;
            margin-bottom: 1em;
            margin-left: 2em;
        }

        .btn:hover,
        .btn:focus {
            background-color: #6a6a6a;
            color: #fff;
        }

        .btn:active {
            background-color: #d3b74b;
            box-shadow: 0 3px #6a6a6a;
            transform: translateY(4px);
        }
    </style>
</head>

<body>
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

    <main class="py-4">
        @yield('content')
    </main>
</body>


{{-- <script>
    const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

    allSideMenu.forEach(item => {
        const li = item.parentElement;

        item.addEventListener('click', function() {
            allSideMenu.forEach(i => {
                i.parentElement.classList.remove('active');
            })
            li.classList.add('active');
        })
    });




    // TOGGLE SIDEBAR
    const menuBar = document.querySelector('#content nav .bx.bx-menu');
    const sidebar = document.getElementById('sidebar');

    menuBar.addEventListener('click', function() {
        sidebar.classList.toggle('hide');
    })







    const searchButton = document.querySelector('#content nav form .form-input button');
    const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
    const searchForm = document.querySelector('#content nav form');

    searchButton.addEventListener('click', function(e) {
        if (window.innerWidth < 576) {
            e.preventDefault();
            searchForm.classList.toggle('show');
            if (searchForm.classList.contains('show')) {
                searchButtonIcon.classList.replace('bx-search', 'bx-x');
            } else {
                searchButtonIcon.classList.replace('bx-x', 'bx-search');
            }
        }
    })





    if (window.innerWidth < 768) {
        sidebar.classList.add('hide');
    } else if (window.innerWidth > 576) {
        searchButtonIcon.classList.replace('bx-x', 'bx-search');
        searchForm.classList.remove('show');
    }


    window.addEventListener('resize', function() {
        if (this.innerWidth > 576) {
            searchButtonIcon.classList.replace('bx-x', 'bx-search');
            searchForm.classList.remove('show');
        }
    })



    const switchMode = document.getElementById('switch-mode');

    switchMode.addEventListener('change', function() {
        if (this.checked) {
            document.body.classList.add('dark');
        } else {
            document.body.classList.remove('dark');
        }
    })
</script> --}}

</html>
