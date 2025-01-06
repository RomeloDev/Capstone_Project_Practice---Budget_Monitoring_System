<?php
    session_start();
    $_SESSION['status'] = 'invalid';
    header('Location: ../index.php');
?>