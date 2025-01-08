<?php

    session_start();

    $_SESSION['status_input'] = 'invalid_input';

    
    
    echo "<script>
        window.location.href = '/BIS/user_login/user_login_page.php'
    </script>";
?>