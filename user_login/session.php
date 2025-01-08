<?php
          session_start();
          if ($_SESSION['status_input'] == 'invalid_input' || empty($_SESSION['status_input'])){
              // set default session invalid
              $_SESSION['status'] = 'invalid_input';
      
              echo "<script>
                window.location.href = '/BIS/user_login/user_login_page.php'
            </script>";
          }
          
?>