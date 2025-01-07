<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../Styles/style.usersignup.css">
</head>
<body>
    <div class="container">
        <div class="signup-form">
        <h2>Sign Up</h2>
        <form action="../Handler/register.handler.php" method="post">
            <input type="text" name="username" id="username" placeholder="Username:" required><br>
            <input type="email" name="email" id="email" placeholder="Email:" required><br>
            <label for="department">Department:</label><br>
            <input type="radio" name="department" value="instruction" required>Instruction<br>
            <input type="radio" name="department" value="sport" required>Sport<br>
            <input type="radio" name="department" value="research" required>Research<br>
            <input type="password" name="password" id="password" placeholder="Password:" required><br>
            <button type="submit" name="submit">Sign Up</button>
        </form>
        <p>Already have an account? <a href="../index.php">Login</a></p>
        </div>
    </div>
</body>
</html>