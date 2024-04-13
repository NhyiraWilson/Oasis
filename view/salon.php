<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Services</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('../assets/images/coni.jpeg');
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
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        .service-card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .service-card h2 {
            margin-top: 0;
        }
        .service-card p {
            margin-bottom: 10px;
        }
        @media (min-width: 768px) {
            .service-card {
                display: flex;
            }
            .service-card img {
                max-width: 150px;
                margin-right: 20px;
            }
            .service-card-content {
                flex-grow: 1;
            }
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
            <a href="#">Logout</a>
        </div>
    </div>
    <div class="container">
        <h1>Our Salon Services</h1>
        <div class="service-card">
            <img src="haircut.jpg" alt="Haircut">
            <div class="service-card-content">
                <h2>Natural Hair Treatment</h2>
                <p>Transform your look with our professional haircut and styling services. Our experienced stylists will create a personalized style that suits you.</p>
                <p><strong>Price:</strong> $50</p>
            </div>
        </div>
        <div class="service-card">
            <img src="manicure.jpg" alt="Manicure">
            <div class="service-card-content">
                <h2>Manicure & Pedicure</h2>
                <p>Pamper your hands and feet with our relaxing manicure and pedicure treatments. Choose from a variety of nail colors and designs.</p>
                <p><strong>Price:</strong> $40</p>
            </div>
        </div>
        <div class="service-card">
            <img src="facial.jpg" alt="Facial">
            <div class="service-card-content">
                <h2>Braiding</h2>
                <p>Revitalize your skin with our rejuvenating facial treatments. Our skincare experts use premium products to achieve radiant and healthy skin.</p>
                <p><strong>Price:</strong> $80 for short, $100 for long</p>
            </div>
        </div>
        <div class="service-card">
            <img src="facial.jpg" alt="Facial">
            <div class="service-card-content">
                <h2>Installations</h2>
                <p>Sew-ins, Wigs and Ponytails</p>
                <p><strong>Price:</strong> $60</p>
            </div>
        </div>
    </div>
    <a href="../view/appointment.php">Book your appointment now</a>
</body>
</html>
