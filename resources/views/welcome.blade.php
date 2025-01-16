<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .top-right {
            position: absolute;
            right: 20px;
            top: 10px;
        }

        .logo {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 80px;
            height: auto;
        }

        .landing-wrapper {
            padding-top: 60px;
            width: 90%;
            margin: auto;
        }

        .landing-part-1 h1 {
            color: #0984e3;
            font-size: 2.5rem;
            font-weight: bold;
        }

        .landing-btn-1, .landing-btn-2 {
            margin: 10px 0;
            padding: 12px 20px;
            border: none;
            font-size: 1rem;
            border-radius: 10px;
            width: 100%;
            color: white;
        }

        .landing-btn-1 {
            background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
        }

        .landing-btn-2 {
            background-image: linear-gradient(120deg, #f093fb 0%, #f5576c 100%);
        }

        .landing-btn-1:hover, .landing-btn-2:hover {
            transform: translateY(-5px);
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.2);
        }

        .landing-img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 10px;
        }

        @media (max-width: 768px) {
            .landing-part-1 h1 {
                font-size: 1.8rem;
            }
            .logo {
                width: 60px;
            }
        }
    </style>
</head>
<body>
    <div class="flex-center position-ref">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/') }}">Home</a>
                    <a href="{{ url('/explore') }}">Rooms</a>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <a href="/showRooms">View Rooms</a>
                    <a href="{{ route('login') }}">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <img src="{{url('logo/gctu.png')}}" alt="Hostel Logo" class="logo">

        <div class="container landing-wrapper">
            <div class="row">
                <div class="col-md-6 col-sm-12 landing-part-1">
                    <h1>Your Study</h1>
                    <h1>Haven Awaits!</h1>
                    <p>"Our hostel is designed for students, providing a safe and welcoming atmosphere with modern amenities, communal study areas, and recreational facilities."
                    </p>
                    <a href="{{ url('/explore') }}"><button class="landing-btn-1">Explore Rooms</button></a>
                    <a href="{{ url('/terms')}}"><button class="landing-btn-2">Check Terms</button></a>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div id="carouselExample" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="landing-img" src="{{url('images/gatehouse.jpg')}}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="landing-img" src="{{url('images/r1.jpg')}}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="landing-img" src="{{url('images/d2.jpg')}}" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
