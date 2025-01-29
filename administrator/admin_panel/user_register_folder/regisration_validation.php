<?php
    require('../../../database/conn_db.php');


    if (isset($_POST['registraion_user'])) {
        $firstname = trim($_POST['fname']);
        $middlename = trim($_POST['mname']);
        $lastname = trim($_POST['lname']);

        $house_no = trim($_POST['house_no']);
        $Sitio_Pook = trim($_POST['Sitio_Pook']);

        $username = trim($_POST['uname']);
        $password = trim($_POST['pword']);
        $confirm_pword = trim($_POST['confirm_pword']);

        date_default_timezone_set("Asia/Manila");
        $date_issue = date("Y-m-d");
        

            if($password != $confirm_pword){
          
            
                echo"
                   <script> 
                       window.location.href = 'BIS/user_login/user_login_page.php';
                    </script> ";
                   
         }else {

            $query = "INSERT INTO user_account (firstname, middlename, lastname, username, password, house_no, sitio_pook, date_registered)
                        VALUES ('$firstname', '$middlename', '$lastname', '$username' ,'$password', '$house_no', '$Sitio_Pook', '$date_issue')";

            $result = mysqli_query($conn, $query);


            if($result){
            header('location: loading_registration.php');
               
            }else {

              

                echo "Invalid Input.";
               
            }
         }
        }

?>