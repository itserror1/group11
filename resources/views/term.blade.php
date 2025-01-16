<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - GCTU Hostel Management System</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        /* Navigation Bar */
        .navbar {
            background-color: #343a40;
            padding: 15px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .navbar .logo {
            display: flex;
            align-items: center;
        }

        .navbar .logo img {
            width: 80px;
            height: 50px;
            margin-right: 10px;
        }

        .navbar .nav-links {
            display: flex;
            gap: 20px;
        }

        .navbar .nav-links a {
            color: #ffffff;
            text-decoration: none;
            font-size: 16px;
            padding: 8px 12px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .navbar .nav-links a:hover {
            background-color: #495057;
        }

        /* Hero Section */
        .hero {
            background-image: url('https://source.unsplash.com/1600x900/?hostel');
            background-size: cover;
            background-position: center;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .hero h1 {
            font-size: 3rem;
        }

        /* Main Content */
        .container {
            margin: 30px auto;
            max-width: 1200px;
            padding: 20px;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .section-title {
            font-size: 2rem;
            margin-bottom: 15px;
            color: #343a40;
        }

        .card {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .card h5 {
            margin-bottom: 10px;
            font-size: 1.25rem;
            color: #0984e3;
        }

        .card p {
            margin: 0;
            font-size: 1rem;
            color: #555;
        }

        /* Footer */
        footer {
            background-color: #343a40;
            color: white;
            padding: 20px;
            text-align: center;
        }

        footer a {
            color: #ffffff;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .navbar .nav-links {
                flex-direction: column;
                gap: 10px;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .card {
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="logo">
            <img src="{{url('logo/gctu.png')}}" alt="Hostel Logo">

            <h3 style="color: white; margin: 0;">GCTU Hostel Management</h3>
        </div>
        <div class="nav-links">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/term') }}">About</a>
            <a href="{{ url('/explore') }}">Rooms</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <h1>About Us</h1>
    </div>

    <!-- Main Content -->
    <div class="container">
        <h2 class="section-title">Welcome to GCTU Hostel</h2>
        <p>
            At GCTU Hostel, we provide a safe, comfortable, and conducive environment for students to live and study.
            Our hostel is designed with modern amenities to ensure that students have everything they need for a successful academic journey.
        </p>

        <h2 class="section-title">Our Mission</h2>
        <p>
            Our mission is to create a supportive community that fosters academic excellence and personal growth.
            We aim to provide a home away from home for our students, where they can thrive both academically and socially.
        </p>

        <h2 class="section-title">Facilities</h2>
        <div class="row" style="display: flex; gap: 20px; flex-wrap: wrap;">
            <div class="col-md-4 card">
                <h5>Comfortable Rooms</h5>
                <p>Our rooms are well-furnished and designed for comfort, ensuring a restful environment for studying and relaxation.</p>
            </div>
            <div class="col-md-4 card">
                <h5>Study Areas</h5>
                <p>We provide dedicated study areas equipped with Wi-Fi and resources to help students focus on their studies.</p>
            </div>
            <div class="col-md-4 card">
                <h5>Recreational Facilities</h5>
                <p>Our hostel includes recreational facilities such as a gym, lounge, and outdoor spaces for relaxation and socializing.</p>
            </div>
        </div>

        <h2 class="section-title">Contact Us</h2>
        <p>If you have any questions or would like to know more about our hostel, feel free to <a href="#">contact us</a>.</p>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2023 GCTU Hostel Management System. All rights reserved.</p>
        <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
    </footer>

</body>
</html>
