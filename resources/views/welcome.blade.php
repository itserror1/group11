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
            overflow: hidden;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 25px;
            top: 18px;
        }

        .logo {
            position: absolute;
            top: 20px; /* Adjust as needed */
            left: 20px; /* Adjust as needed */
            width: 100px; /* Adjust the size as needed */
            height: auto; /* Maintain aspect ratio */
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .landing-wrapper {
            padding-top: 50px;
            width: 80%;
            height: 90vh;
            position: relative; /* Ensure relative positioning for child elements */
        }

        .landing-part-1 {
            width: 50%;
            padding: 5%;
        }

        .landing-part-1 h1 {
            color: #0984e3;
            font-size: 50px;
            font-weight: bold;
        }

        .landing-btn-1, .landing-btn-2 {
            text-transform: uppercase;
            margin: 20px;
            padding: 20px;
            background: none;
            border: none;
            font-size: 20px;
            border-radius: 20px;
            color: white;
            transition: all 0.3s ease-in-out;
            cursor: pointer;
        }

        .landing-btn-1 {
            background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
        }

        .landing-btn-2 {
            background-image: linear-gradient(120deg, #f093fb 0%, #f5576c 100%);
        }

        .landing-btn-1:hover, .landing-btn-2:hover {
            transform: translateY(-10px);
            box-shadow: 0 1px 20px 3px grey;
        }

        .carousel-container {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 130%; /* Adjust as needed */
            height: 60%;
            padding: -10px; /* Optional: Add some padding */
        }

        .landing-img {
            height: 300px; /* Adjust height as needed */
            width: 100%; /* Make it responsive */
        }

        @media(max-width: 900px) {
            .landing-wrapper .row {
                display: block;
            }
            .landing-part-1 {
                width: 100%;
            }
            .landing-part-1 h1 {
                font-size: 35px;
            }
            .landing-btn-1, .landing-btn-2 {
                padding: 15px;
                margin: 10px;
                font-size: 15px;
            }
            .landing-img {
                height: 200px; /* Adjust height for smaller screens */
            }
        }
    </style>
</head>
<body>
    <div class="flex-center position-ref">

        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a href="{{ url('/') }}">.</a>

                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/explore') }}">Rooms</a>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
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
                <div class="col-6 landing-part-1">
                    <h1>Your Study</h1>
                    <h1>Haven Awaits!</h1>
                    <p>"Our hostel is designed with students in mind, providing a safe and welcoming atmosphere. Enjoy modern amenities, communal study areas, and recreational facilities that promote both learning and relaxation. Your academic journey is our priority!"<br></br></p>
                    <a href="{{ url('/explore') }}"><button class="landing-btn-1">Explore Rooms</button></a>
                    <a href="{{ url('/terms')}}"><button class="landing-btn-2">Check terms</button></a>
                </div>
                <div class="col-6 landing-part-2">
                    <div class="carousel-container">
                        <div id="carouselExample" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block landing-img" src="{{url('images/gatehouse.jpg')}}" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block landing-img" src="{{url('images/r1.jpg')}}" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block landing-img" src="{{url('images/d2.jpg')}}" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
