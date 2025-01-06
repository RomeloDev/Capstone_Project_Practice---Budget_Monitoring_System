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
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="Handler/login.handler.php" method="post">
            <label for="username">Username:</label><br>
            <input type="text" name="username" id="username" required><br>
            <label for="password">Password:</label><br>
            <input type="password" name="password" id="password"><br>
            <input type="submit" value="LOGIN" name="submit">
        </form>
        <div class="redirect">
            <p>Don't have an account? <a href="Register/signupForm.php">Register</a></p>
        </div>
    </div>
</body>
</html>