<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Face and Body Services</title>
    <style>
        body{
            background-image: url('../assets/images/cono.jpeg');
            background-repeat: no-repeat;
            background-size: cover;
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
        .main-content {
            font-style: italic;
            font-size: larger;
            padding: 20px;
        }
        .service-card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .service-image {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="top-banner">
        <div class="logo">Oasis</div>
        <div class="nav-links">
            <a href="../view/home.php">Home</a>
            <a href="../view/appointment.php">Appointments</a>
            <a href="#">User</a>
            <a href="#">Contact us</a>
            <a href="../login/logout.php">Logout</a>
        </div>
    </div>
    <div class="main-content">
        <h1>Face and Body Services</h1>
        <p>*Please note that all face and body services do not exceed 60 minutes.*</p>
        <div class="service-card">
            <img src="facial.jpg" alt="Facial Treatment" class="service-image">
            <h2>Facial Treatment</h2>
            <p>Our facial treatments are designed to rejuvenate your skin, leaving it glowing and refreshed.</p>
            <p>(Clay masks, blackhead extraction, Vitamin C & E serums)</p>
            <p>Price: $80</p>
        </div>
        
        <div class="service-card">
            <img src="massage.jpg" alt="Massage Therapy" class="service-image">
            <h2>Waxing</h2>
            <p>Our sugar waxes leave your body smooth and relaxed.</p>
            <p>Price: $80</p>
        </div>

        <div class="service-card">
            <img src="body-wrap.jpg" alt="Body Wraps" class="service-image">
            <h2>Body Wraps</h2>
            <p>Indulge in our luxurious body wraps that detoxify, exfoliate and hydrate your skin.</p>
            <p>Price: $100</p>
        </div>
        <a href="../view/appointment.php">Book your appointment now</a>
    </div>
</body>
</html>
