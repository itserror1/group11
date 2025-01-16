<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Rooms</title>
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

        .head img {
            width: 100px; /* Logo size */
            height: auto;
            margin-right: 10px;
        }

        header h1 {
            margin: 0;
            font-size: 36px;
        }

        header p {
            margin: 5px 0;
            font-size: 16px;
        }

        /* Room Container */
        .container {
            max-width: 1100px;
            margin: 30px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .room-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .room-card {
            background: #f1f1f1;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .room-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
        }

        .room-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .room-card h3 {
            margin: 15px;
            font-size: 20px;
            color: #0984e3;
        }

        .room-card p {
            margin: 0 15px 15px;
            font-size: 14px;
            color: #666;
        }

        .room-card button {
            display: block;
            width: calc(100% - 30px);
            margin: 0 auto 15px;
            padding: 10px;
            background: #0984e3;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .room-card button:hover {
            background: #0859b8;
        }

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

<header class="head">
    <img src="{{ url('logo/gctu.png')}}" alt="Logo">
    <h1>Explore Our Rooms</h1>
    <p>Find the perfect accommodation for your needs</p>
</header>

<div class="container">
    <div class="room-grid">
        <!-- Room 1 -->
        <div class="room-card">
            <img src="{{ url('images/h1.jpg')}}" alt="Hostel Image 1">
            <h3>Single Room</h3>
            <p>A cozy single room perfect for individual students. Includes a bed, desk, and storage space.</p>
            <a href="{{ url('/roomview')}}"><button>View Details</button></a>
        </div>
        <!-- Room 2 -->
        <div class="room-card">
            <img src="{{ url('images/h2.jpg')}}" alt="Hostel Image 1">
            <h3>Double Room</h3>
            <p>Comfortable room for two, featuring two beds, desks, and ample storage.</p>
            <a href="{{ url('/roomview')}}"><button>View Details</button></a>
        </div>
        <!-- Room 3 -->
        <div class="room-card">
            <img src="{{ url('images/h3.jpg')}}" alt="Hostel Image 1">
            <h3>Deluxe Room</h3>
            <p>Spacious room with modern amenities, perfect for those seeking additional comfort.</p>
            <a href="{{ url('/roomview')}}"><button>View Details</button></a>
        </div>
        <!-- Room 4 -->
        <div class="room-card">
            <img src="{{ url('images/h4.jpg')}}" alt="Hostel Image 1">
            <h3>Shared Dormitory</h3>
            <p>Budget-friendly dormitories for group accommodations with communal facilities.</p>
            <a href="{{ url('/roomview')}}"><button>View Details</button></a>
        </div>
        <!-- Room 5 -->
        <div class="room-card">
            <img src="{{ url('images/h5.jpg')}}" alt="Hostel Image 1">
            <h3>Deluxe Room</h3>
            <p>Spacious room with modern amenities, perfect for those seeking additional comfort.</p>
            <a href="{{ url('/roomview')}}"><button>View Details</button></a>
        </div>
        <!-- Room 6 -->
        <div class="room-card">
            <img src="{{ url('images/h6.jpeg')}}" alt="Hostel Image 1">
            <h3>Shared Dormitory</h3>
            <p>Budget-friendly dormitories for group accommodations with communal facilities.</p>
            <a href="{{ url('/roomview')}}"><button>View Details</button></a>
        </div>
    </div>
</div>

<footer>
    <p>&copy; GCTU Hostel Management System. Designed for a better living experience. <a href="/contact">Contact Us</a></p>
</footer>

</body>
</html>
