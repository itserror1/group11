<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page - Hostel Management System</title>
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

        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
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
        function handlePayment(event) {
            event.preventDefault(); // Prevent form from submitting

            const name = document.getElementById('name').value.trim();
            const roomNumber = document.getElementById('roomNumber').value.trim();
            const amount = document.getElementById('amount').value.trim();
            const method = document.getElementById('method').value;

            if (name === '' || roomNumber === '' || amount === '' || method === '') {
                document.getElementById('feedback').textContent = 'All fields are required!';
                document.getElementById('feedback').className = 'error';
                return;
            }

            // Simulate successful payment submission
            document.getElementById('feedback').textContent = 'Payment submitted successfully!';
            document.getElementById('feedback').className = 'message';

            // Clear form fields
            document.getElementById('paymentForm').reset();
        }
    </script>
</head>
<body>
    <div class="container">
        <img src="{{ url('logo/gctu.png')}}" alt="Logo">
        <h1>Make a Payment</h1>
        <div id="feedback"></div>
        <form id="paymentForm" onsubmit="handlePayment(event)">
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name">
            </div>

            <div class="form-group">
                <label for="roomNumber">Index Number</label>
                <input type="text" id="indexNumber" name="indexNumber" placeholder="Enter your index number">
            </div>


            <div class="form-group">
                <label for="roomNumber">Room Number</label>
                <input type="text" id="roomNumber" name="roomNumber" placeholder="Enter your room number">
            </div>

            <div class="form-group">
                <label for="amount">Amount (GHS)</label>
                <input type="number" id="amount" name="amount" placeholder="Enter amount to pay">
            </div>

            <div class="form-group">
                <label for="method">Payment Method</label>
                <select id="method" name="method">
                    <option value="">Select a payment method</option>
                    <option value="bank_transfer">Bank Transfer</option>
                    <option value="credit_card">Mobile Money</option>
                    <option value="debit_card">Debit Card</option>

                </select>
            </div>

            <div class="form-group">
                <button type="submit">Submit Payment</button>
            </div>
        </form>
        <footer>
            &copy; GCTU  Hostel Management System. All rights reserved.
        </footer>
    </div>
</body>
</html>
