<?php
    session_start();

    if($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])){
        $_SESSION['status'] = 'invalid';
    }

    if($_SESSION['status'] == 'valid'){
        header('Location: EndUser/Dashboard.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Styles/style.userlogin.css">
</head>
<body>
    <div class="container">
        <div class="login-form">
        <h2>Login</h2>
        <form action="Handler/login.handler.php" method="post">
            <input type="text" name="username" id="username" placeholder="Username:" required><br>
            <input type="password" name="password" id="password" placeholder="Password:" required><br>
            <button type="submit" name="submit">LOGIN</button>
            <p>Don't have an account? <a href="Register/signupForm.php">Register</a></p>
        </form>
        </div>
    </div>
</body>
</html>