<?php

    session_start();

    $_SESSION['status'] = 'invalid';

    unset($_SESSION['username']);
    unset($_SESSION['profile']);
    
    header('location:  login.php ');
?>