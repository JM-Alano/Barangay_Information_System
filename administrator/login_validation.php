<?php
    require("../database/conn_db.php");

   

    if ($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])){
        // set default session invalid
        $_SESSION['status'] = 'invalid';
    }
    if ($_SESSION['status'] == 'valid'){
        header('location: admin_panel/dashboard.php');
    }

    if (isset($_POST['login'])) {
        $username = trim($_POST['uname']);
        $password = trim($_POST['pname']);
      
            if(empty($username) || empty($password)){
          
                echo "Please Fill up this form ";
                echo"
                   <script> 
                        document.getElementById('validation').style.display = 'block';
                      document.getElementById('pwd').style.outline = '1px rgb(253, 42, 42) solid';
                    
                    </script> ";
                    
         }else {

            $query = "SELECT * FROM Admin_account WHERE password =  '$password' AND username = '$username'";

            $result = mysqli_query($conn, $query);

           $rowValidate = mysqli_fetch_array($result);

            if(mysqli_num_rows($result) > 0 ){

                $_SESSION['status'] = 'valid';
                
                $_SESSION['username'] = $rowValidate['username'];     
                 
                header('location: admin_panel/dashboard.php');
               
            }else {

                
                $_SESSION['status'] = 'invalid';

                echo "Invalid Credential do not match our records. ";
                echo "<script>document.getElementById('validation').style.display = 'block'</script>";
            }
         }
        }
?>