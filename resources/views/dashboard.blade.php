<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Management</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
        }

        .sidebar {
            width: 250px;
            background: #333;
            color: #fff;
            padding: 20px;
            transition: transform 0.3s ease;
            transform: translateX(-100%); /* Initially hidden */
            position: fixed; /* Fixed position */
            height: 100%; /* Full height */
            z-index: 1000; /* Ensure it is above other content */
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar a {
            display: block;
            background: #444;
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            margin: 10px 0;
            cursor: pointer;
            transition: background 0.3s;
            text-align: center;
            border-radius: 5px;
        }

        .sidebar a:hover {
            background: #ff6347;
        }

        .main-content {
            flex: 1;
            padding: 20px;
            background: #fff;
            animation: fadeIn 0.5s;
            margin-left: 0; /* Adjust margin for main content */
            transition: margin-left 0.3s ease; /* Smooth transition */
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: center; /* Center horizontally */
            margin-bottom: 20px;
        }

        .header img {
            width: 50px; /* Logo size */
            height: auto;
            margin-right: 10px;
        }

        .header h1 {
            font-size: 24px;
            color: #333;
            text-align: center; /* Center text */
        }

        .content-section {
            margin: 40px 0;
            padding: 40px 40px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background: #f9f9f9;
            transition: transform 0.3s;
        }

        .content-section:hover {
            transform: scale(1.02);
        }

        .image-gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 70px;
        }

        .image-gallery img {
            width: calc(25% - 10px); /* Reduced size */
            border-radius: 5px;
            transition: transform 0.3s;
        }

        .image-gallery img:hover {
            transform: scale(1.05);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .toggle-button {
            position: absolute;
            top: 20px;
            left: 20px;
            background: #ff6347;
            color: #fff;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            z-index: 1001; /* Ensure it is above the sidebar */
        }
    </style>
</head>
<body>
    <button class="toggle-button" onclick="toggleSidebar()">Menu</button>
    <div class="container">
        <div class="sidebar" id="sidebar">
            <h2>Dashboard</h2>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/contact')}}"> Book Room</a>
            <a href="{{ url('/complain')}}">File complain</a>
            <a href="{{ url('/payment')}}">Payments</a>


        </div>
        <div class="main-content" id="main-content">
            <div class="header">
                <img src="{{ url('logo/gctu.png')}}" alt="Logo">
                <h1>GCTU HOSTELS</h1>
            </div>
            <div id="dashboard" class="content-section">
                <h2>Welcome</h2>
                <p>This is your central hub for managing all aspects of hostel operations. From booking and room allocation to tracking resident profiles and maintenance schedules, everything you need is just a few clicks away.</p>
            </div>

            <div class="content-section">
                <h2>About Our Hostel</h2>
                <p>Here are some images of our hostel:</p>
                <div class="image-gallery">
                    <img src="{{ url('images/r2.jpg')}}" alt="Hostel Image 1">
                    <img src="{{ url('images/r1.jpg')}}" alt="Hostel Image 2">
                    <img src="{{ url('images/r3.jpeg')}}" alt="Hostel Image 3">
                    <img src="{{ url('images/c1.jpg')}}" alt="Hostel Image 4">
                    <img src="{{ url('images/d1.jpg')}}" alt="Hostel Image 5">
                    <img src="{{ url('images/d2.jpg')}}" alt="Hostel Image 6">


                </div>
            </div>
        </div>
    </div>
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('main-content');
            if (sidebar.style.transform === 'translateX(0%)') {
                sidebar.style.transform = 'translateX(-100%)'; // Hide sidebar
                mainContent.style.marginLeft = '0'; // Adjust main content
            } else {
                sidebar.style.transform = 'translateX(0%)'; // Show sidebar
                mainContent.style.marginLeft = '250px'; // Adjust main content
            }
        }

        function scrollToSection(sectionId) {
            const targetSection = document.getElementById(sectionId);
            targetSection.scrollIntoView({ behavior: 'smooth' });
        }
    </script>
</body>
</html>
