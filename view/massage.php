<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Massage Services</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('../assets/images/cona.jpeg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        .container {
            font-style: italic;
            font-size: large;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .top-banner {
            background-color: #333;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
        }
        .nav-links {
            display: flex;
            gap: 20px;
        }
        .nav-item {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }
        .massage-service-card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .massage-service-card h2 {
            margin-top: 0;
        }
        .massage-service-card p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="top-banner">
        <div class="logo">Oasis</div>
        <div class="nav-links">
            <a href="../view/home.php">Home</a>
            <a href="#">Appointments</a>
            <a href="#">User</a>
            <a href="#">Contact us</a>
            <a href="#">Logout</a>
        </div>
    </div>
    <div class="container">
        <h1>Massage Services</h1>
        <div class="massage-service-card">
            <h2>Swedish Massage</h2>
            <p>A relaxing massage technique that uses long strokes and kneading to improve circulation and promote relaxation.</p>
            <p><strong>Duration:</strong> 60 minutes</p>
            <p><strong>Price:</strong> $80</p>
        </div>
        <div class="massage-service-card">
            <h2>Deep Tissue Massage</h2>
            <p>A therapeutic massage focusing on deeper layers of muscles to relieve chronic pain and tension.</p>
            <p><strong>Duration:</strong> 90 minutes</p>
            <p><strong>Price:</strong> $120</p>
        </div>
        <div class="massage-service-card">
            <h2>Hot Stone Massage</h2>
            <p>A soothing massage using heated stones to relax muscles and improve overall well-being.</p>
            <p><strong>Duration:</strong> 75 minutes</p>
            <p><strong>Price:</strong> $100</p>
        </div>
    </div>
    <a href="../view/appointment.php">Book your appointment now</a>
</body>
</html>
