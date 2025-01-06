<?php
    require_once '../Classes/Database.php';
    require_once '../Classes/Login.php';

    if(isset($_POST['submit'])){
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        $login = new Login($username, $password);
        $login->authenticate();
        header('Location: ../EndUser/Dashboard.php');
    }
?>