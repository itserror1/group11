<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Details</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        header {
            background-color: #0984e3;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        header h1 {
            margin: 0;
            font-size: 36px;
        }

        header p {
            margin: 5px 0;
            font-size: 16px;
        }

        /* Container */
        .container {
            max-width: 1000px;
            margin: 30px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        /* Room Image */
        .room-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 8px;
        }

        /* Room Details Section */
        .room-details {
            margin-top: 20px;
        }

        .room-details h2 {
            color: #0984e3;
            margin-bottom: 10px;
        }

        .room-details p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        /* Amenities Section */
        .amenities {
            margin-top: 20px;
        }

        .amenities h3 {
            color: #444;
            margin-bottom: 10px;
        }

        .amenities ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .amenities ul li {
            margin-bottom: 10px;
            padding: 10px;
            background: #f1f8ff;
            border-left: 4px solid #0984e3;
            border-radius: 4px;
            font-size: 16px;
        }

        /* Booking Section */
        .booking {
            margin-top: 30px;
            text-align: center;
        }

        .booking button {
            padding: 15px 30px;
            background: #0984e3;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .booking button:hover {
            background: #0859b8;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 15px;
            background: #f1f1f1;
            margin-top: 30px;
            font-size: 14px;
        }

        footer a {
            color: #0984e3;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<header>
    <h1>Room Details</h1>
    <p>Discover more about your selected room</p>
</header>

<div class="container">
    <!-- Room Image -->
    <img src="{{ url('images/h1.jpg')}}" alt="Hostel Image 1" class="room-image">

    <!-- Room Details Section -->
    <div class="room-details">
        <h2>Single Room</h2>
        <p>
            A cozy single room, perfect for individual students. This room is fully furnished with a comfortable bed, a study desk, and ample storage space for your belongings. Ideal for a quiet and focused study environment.
        </p>
    </div>

    <!-- Amenities Section -->
    <div class="amenities">
        <h3>Room Amenities</h3>
        <ul>
            <li>Single bed with mattress and bedding</li>
            <li>Study desk and chair</li>
            <li>Spacious wardrobe</li>
            <li>High-speed Wi-Fi</li>
            <li>Air conditioning</li>
            <li>Private bathroom</li>
        </ul>
    </div>

    <!-- Booking Section -->
    <div class="booking">
        <h3>Interested in this room?</h3>
        <a href="{{ url('/payment')}}"><button>Book Now</button></a>
    </div>
</div>

<footer>
    <p>&copy; GCTU Hostel Management System. Designed for your comfort.</p>
</footer>

</body>
</html>
