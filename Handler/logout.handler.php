<?php
    session_start();
    unset($_SESSION['username']);
    $_SESSION['status'] = 'invalid';
    header('Location: ../index.php');
?>