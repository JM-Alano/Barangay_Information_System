<?php

    session_start();

    $_SESSION['status'] = 'invalid';

    unset($_SESSION['username']);
    
    header('location:  login.php ');
?>