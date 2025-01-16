<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Booking</title>
    <style>
        /* CSS Styles */

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Ensure the body takes at least the full height of the viewport */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            animation: fadeIn 1s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        header {
            background: #35424a;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
            animation: slideDown 0.5s ease-in-out;
        }

        .head img {
            width: 100px; /* Logo size */
            height: auto;
            margin-right: 10px;
        }
        @keyframes slideDown {
            from { transform: translateY(-100%); }
            to { transform: translateY(0); }
        }

        h1 {
            margin: 0;
        }

        main {
            flex: 1; /* Allow main to grow and fill the available space */
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .room-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            animation: fadeIn 1s ease-in;
        }

        .room {
            background: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 15px;
            width: 300px;
            text-align: center;
            transition: transform 0.3s;
        }

        .room:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .room img {
            max-width: 100%;
            border-radius: 5px;
        }

        button {
            background: #35424a;
            color: #ffffff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background: #45a049;
        }

        footer {
            text-align: center;
            padding: 20px 0;
            background: #35424a;
            color: #ffffff;
            position: relative;
            bottom: 0;
            width: 100%;
            animation: slideUp 0.5s ease-in-out;
        }

        @keyframes slideUp {
            from { transform: translateY(100%); }
            to { transform: translateY(0); }
        }
    </style>
</head>
<body>
    <header class="head">
        <img src="{{ url('logo/gctu.png')}}" alt="Logo">
        <h1>BOOK ROOM NOW!!</h1>
    </header>

    <main>
        <h2>Available Rooms</h2>
        <div class="room-container">
            <div class="room">
                <img src="{{ url('images/h5.jpg')}}" alt="Hostel Image 1">
                <h3>Room 101</h3>
                <p>Cozy room with a single bed, desk, and wardrobe.</p>
                <a href="{{ url('/payment')}}"> <button onclick="bookRoom('Room 101')">Book Now</button></a>
            </div>
            <div class="room">
                <img src="{{ url('images/h4.jpg')}}" alt="Hostel Image 1">
                <h3>Room 102</h3>
                <p>Spacious room with two beds and a shared bathroom.</p>
                <a href="{{ url('/payment')}}"> <button onclick="bookRoom('Room 102')">Book Now</button></a>
            </div>
            <div class="room">
                <img src="{{ url('images/r3.jpeg')}}" alt="Hostel Image 1">
                <h3>Room 103</h3>
                <p>Deluxe room with a private bathroom and balcony.</p>
                <a href="{{ url('/payment')}}"> <button onclick="bookRoom('Room 103')">Book Now</button></a>
            </div>
        </div>
        <div class="room-container">
            <div class="room">
                <img src="{{ url('images/h1.jpg')}}" alt="Hostel Image 1">
                <h3>Room 101</h3>
                <p>Cozy room with a single bed, desk, and wardrobe.</p>
                <a href="{{ url('/payment')}}"> <button onclick="bookRoom('Room 101')">Book Now</button></a>
            </div>
            <div class="room">
                <img src="{{ url('images/h2.jpg')}}" alt="Hostel Image 1">
                <h3>Room 102</h3>
                <p>Spacious room with two beds and a shared bathroom.</p>
                <a href="{{ url('/payment')}}"> <button onclick="bookRoom('Room 101')">Book Now</button></a>
            </div>
            <div class="room">
                <img src="{{ url('images/h3.jpg')}}" alt="Hostel Image 1">
                <h3>Room 103</h3>
                <p>Deluxe room with a private bathroom and balcony.</p>
                <a href="{{ url('/payment')}}"> <button onclick="bookRoom('Room 101')">Book Now</button></a>
            </div>
        </div>
    </main>

    <
