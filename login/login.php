<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../css/oasis.css'>
    <title>Oasis</title>

</head>
<body>
<div class="top-banner">
        <p>Oasis</p>
    </div>
    <div class="login-container">
        <h2>Login</h2>
        <hr>
        <form id="loginForm" onsubmit="validateForm(); return false;" action="../action/login_user.php" method="POST">
            <label for="Username">Username:</label>
            <input type="text" id="Username" name="Username" required>

            <label for="Passwords">Password:</label>
            <input type="Password" id="PasswordS" name="Passwords" required>

            <label for="remember">Remember Password:</label>
            <input type="checkbox" id="remember" name="remember">

            <button type="submit" name="submit" id="button">Login</button>
        </form>
        <p id="error-message"></p>
        <p class="forgot-password"><a href="#" onclick="forgotPassword()">Forgot Password?</a></p>
        <p class="sign-up">Don't have an account? <a href="../login/register.php">Sign up</a></p>
    </div>

    <script src="../js/script.js"></script>
</body>
</html>
