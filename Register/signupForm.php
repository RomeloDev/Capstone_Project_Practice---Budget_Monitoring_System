<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
        <h1>Sign Up</h1>
        <form action="../Handler/register.handler.php" method="post">
            <label for="username">Username:</label><br>
            <input type="text" name="username" id="username" required><br>
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" required><br>
            <label for="department">Department:</label><br>
            <input type="radio" name="department" value="instruction" required>Instruction<br>
            <input type="radio" name="department" value="sport" required>Sport<br>
            <input type="radio" name="department" value="research" required>Research<br>
            <label for="password">Password:</label><br>
            <input type="password" name="password" id="password" required><br>
            <input type="submit" value="SIGN UP" name="submit">
        </form>
        <div class="redirect">
            <p>Already have an account? <a href="../index.php">Login</a></p>
        </div>
    </div>
</body>
</html>