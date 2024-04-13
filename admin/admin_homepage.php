<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Homepage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
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
        nav {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }
        nav ul li {
            margin-right: 20px;
        }
        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }
        .welcome-message {
            text-align: center;
            margin-bottom: 30px;
        }
        .admin-actions {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .admin-action-card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            width: 300px;
            text-align: center;
        }
        .admin-action-card h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="../admin/manage_users_admin.php">Users</a></li>
            <li><a href="../admin/appointment_admin.php">Appointments</a></li>
            <li><a href="../admin/manage_employees_admin.php">Employees</a></li>
            <li><a href="../login/logout.php">Logout</a></li>
        </ul>
    </nav>
    <div class="container">
        <h1>Welcome, Admin!</h1>
        <p class="welcome-message">Manage your Spa efficiently with our admin tools.</p>
        <div class="admin-actions">
            <a href="../admin/manage_users_admin.php" class="admin-action-card">
                <h2>Manage Users</h2>
                <p>View and manage user accounts.</p>
            </a>
            <a href="../admin/appointment_admin.php" class="admin-action-card">
                <h2>View Appointments</h2>
                <p>Check and manage upcoming appointments.</p>
            </a>
            <a href="../admin/manage_employees_admin.php" class="admin-action-card">
                <h2>Manage Employees</h2>
                <p>Configure system settings and preferences.</p>
            </a>
        </div>
    </div>
</body>
</html>
