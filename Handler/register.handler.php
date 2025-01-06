<?php
    require_once '../Classes/Database.php';
    require_once '../Classes/Register.php';

    if(isset($_POST['submit'])){
        $username = trim(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING));
        $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
        $department = trim(filter_input(INPUT_POST, 'department', FILTER_SANITIZE_STRING));
        $password = trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));

        $register = new Register($username, $email, $department, $password);
        $register->validate();
        header('Location: ../index.php');
    }
?>