<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Terms and Rules</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        header {
            background-color: #0984e3;
            color: white;
            padding: 20px 0;
            text-align: center;
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

        /* Content Container */
        .container {
            max-width: 1100px;
            margin: 30px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            color: #444;
            margin-bottom: 15px;
        }

        p {
            margin-bottom: 15px;
        }

        /* Rules Section */
        .rules-section {
            margin-top: 30px;
        }

        .rules-section h3 {
            color: #0984e3;
            margin-bottom: 10px;
            text-decoration: underline;
        }

        ul.rules-list {
            list-style: none;
            padding: 0;
        }

        ul.rules-list li {
            margin: 10px 0;
            padding: 10px;
            background: #f1f8ff;
            border-left: 4px solid #0984e3;
            border-radius: 4px;
            font-size: 16px;
        }

        ul.rules-list li strong {
            color: #0984e3;
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

        /* Responsive Design */
        @media (max-width: 768px) {
            header h1 {
                font-size: 28px;
            }

            .container {
                padding: 15px;
            }

            ul.rules-list li {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

<header class="head">
    <img src="{{ url('logo/gctu.png')}}" alt="Logo">
    <h1>GCTU Hostel Terms and Conditions</h1>
    <p>Ensuring a Safe, Comfortable, and Respectful Environment for All Residents</p>
</header>

<div class="container">
    <h2>Terms and Conditions</h2>
    <p>By using our hostel services, you agree to the following terms and conditions:</p>
    <ul>
        <li>All residents must provide valid identification and complete the registration process before moving in.</li>
        <li>Rent and other fees must be paid in full before the due date each month to avoid penalties.</li>
        <li>The management reserves the right to inspect rooms for maintenance and compliance purposes, with prior notice.</li>
        <li>The hostel will not be held responsible for any loss of personal belongings. Residents are advised to secure their valuables.</li>
        <li>Violation of the hostel rules may result in fines, warnings, or eviction, depending on the severity of the breach.</li>
    </ul>

    <div class="rules-section">
        <h3>Hostel Rules and Regulations</h3>
        <ul class="rules-list">
            <li><strong>1. Timings:</strong> Hostel gates close at 10:00 PM. Late entries will require prior permission from the warden.</li>
            <li><strong>2. Cleanliness:</strong> Residents are responsible for keeping their rooms and common areas clean and tidy.</li>
            <li><strong>3. Noise Levels:</strong> Maintain low noise levels, especially during study hours (8:00 PM - 10:00 PM).</li>
            <li><strong>4. Visitors:</strong> Visitors are only allowed in designated areas and must leave by 8:00 PM. Overnight stays are strictly prohibited.</li>
            <li><strong>5. Prohibited Items:</strong> Alcohol, drugs, and any illegal substances are strictly forbidden on hostel premises.</li>
            <li><strong>6. Electrical Appliances:</strong> Use of high-power electrical appliances (e.g., heaters, irons) is not allowed without management approval.</li>
            <li><strong>7. Damage to Property:</strong> Any damage to hostel property must be reported immediately and may incur repair charges.</li>
            <li><strong>8. Safety:</strong> Fire exits and safety equipment must not be tampered with under any circumstances.</li>
            <li><strong>9. Complaints:</strong> Any issues or grievances should be reported to the hostel warden or management for resolution.</li>
            <li><strong>10. Respect:</strong> Treat fellow residents and staff with respect and maintain a harmonious atmosphere.</li>
        </ul>
    </div>
</div>

<footer>
    <p>&copy; GCTU Hostel Management System. Designed for a better living experience.  <a href="{{ url('/complain')}}">Contac Us</a></p>
</footer>

</body>
</html>
