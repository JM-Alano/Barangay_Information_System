<?php
    require("../database/conn_db.php");
    
   

   if ($_SESSION['status_input'] == 'invalid_input' || empty($_SESSION['status_input'])){
    // set default session invalid
    $_SESSION['status_input'] = 'invalid_input';
    
          
    }
    if ($_SESSION['status_input'] == 'valid_input'){
         header('location: loading.php');
    }


    if (isset($_POST['user_login'])) {
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

            $query = "SELECT * FROM user_account WHERE password =  '$password' AND username = '$username'";

            $result = mysqli_query($conn, $query);

           $rowValidate = mysqli_fetch_array($result);

            if(mysqli_num_rows($result) > 0 ){

           
                $_SESSION['status_input'] = 'valid_input';
                
                $_SESSION['user_id'] = $rowValidate['user_id']; 
              
                header('location: loading.php');
               
            }else {

                $_SESSION['status_input'] = 'invalid_input';
                echo "Invalid Credential do not match our records. ";
                echo "<script>document.getElementById('validation').style.display = 'block'</script>";
            }
         }
        }
?>