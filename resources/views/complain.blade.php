<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complain Page - Hostel Management System</title>
    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            width: 90%;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .container img {
            width: 100px; /* Logo size */
            height: auto;
            margin-right: 10px;
        }

        h1 {
            text-align: center;
            color: #444;
        }

        form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-group textarea {
            resize: vertical;
            height: 120px;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-group button:hover {
            background-color: #0056b3;
        }

        .message {
            text-align: center;
            font-size: 18px;
            color: green;
        }

        .error {
            text-align: center;
            font-size: 18px;
            color: red;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
    </style>
    <script>
        function handleSubmit(event) {
            event.preventDefault(); // Prevent form from submitting

            const name = document.getElementById('name').value.trim();
            const roomNumber = document.getElementById('roomNumber').value.trim();
            const complaint = document.getElementById('complaint').value.trim();

            if (name === '' || roomNumber === '' || complaint === '') {
                document.getElementById('feedback').textContent = 'All fields are required!';
                document.getElementById('feedback').className = 'error';
                return;
            }

            // Simulate successful submission
            document.getElementById('feedback').textContent = 'Complaint submitted successfully!';
            document.getElementById('feedback').className = 'message';

            // Clear form fields
            document.getElementById('complainForm').reset();
        }
    </script>
</head>
<body>
    <div class="container">
        <img src="{{ url('logo/gctu.png')}}" alt="Logo">
        <h1>Submit Your Complaint</h1>
        <div id="feedback"></div>
        <form id="complainForm" onsubmit="handleSubmit(event)">
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name">
            </div>

            <div class="form-group">
                <label for="roomNumber">Room Number</label>
                <input type="text" id="roomNumber" name="roomNumber" placeholder="Enter your room number">
            </div>

            <div class="form-group">
                <label for="complaint">Complaint</label>
                <textarea id="complaint" name="complaint" placeholder="Write your complaint here..."></textarea>
            </div>

            <div class="form-group">
                <button type="submit">Submit Complaint</button>
            </div>
        </form>
        <footer>
            &copy; GCTU Hostel Management System. All rights reserved.
        </footer>
    </div>
</body>
</html>
