<?php
    require_once '../Sessions/authenticate.session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Yoo Welcome to this as if dashboard</h1>
    <br>
    <form action="../Handler/logout.handler.php" method="get">
        <button name="logout">LOGOUT</button>
    </form>
</body>
</html>