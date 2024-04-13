<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body{
            background-image: url('../assets/images/cono.jpeg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        .top-banner {
            background-color: teal;
            color: white;
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
            color: white;
            display: flex;
            gap: 20px;
        }
        .nav-item {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }
        .main-content {
            font-size: larger;
            font-style: italic;
            padding: 20px;
            text-align: center;
        }
        .spa-services {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .spa-service-card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            background-color: burlywood;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="top-banner">
        <div class="logo">Oasis Logo</div>
        <div class="nav-links">
            <a href="../view/appointment.php">Appointments</a>
            <a href="#">User</a>
            <a href="#">Contact us</a>
            <a href="#">History</a>
            <a href="../login/logout.php">Logout</a>
        </div>
    </div>
    <div class="main-content">
        <h1>Welcome to Oasis Spa</h1>
        <br>
        <p>Indulge in a world of relaxation and rejuvenation at our luxurious spa.</p>
        <br>
        <p>Please be sure to book your appointment at least 2 days before your appointment date.</p>
        <p>Also be sure to arrive at least 15 minutes before your appointment time to get settled in before we begin and enjoy a free eucalyptis bath or cucumder water</p>
        <br>
        <div class="spa-services">
            <a href="../view/massage.php" class="spa-service-card">
                <h2>Massage Therapy</h2>
                <p>Relieve stress and tension with our expert massage therapists.</p>
            </a>
            <a href="../view/face_n_body.php" class="spa-service-card">
                <h2>Face & Body Treatments</h2>
                <p>Restore your skin's natural glow with our personalized facial treatments.</p>
            </a>
            <a href="../view/salon.php"class="spa-service-card">
                <h2>Hair Treatments</h2>
                <p>Pamper yourself with our luxurious body treatments and wraps.</p>
            </a>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 OASIS. All rights reserved.</p>
    </footer>

</body>
</html>
