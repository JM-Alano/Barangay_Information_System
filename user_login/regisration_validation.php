<?php
    require('../database/conn_db.php');


    if (isset($_POST['registraion'])) {
        $firstname = trim($_POST['fname']);
        $middlename = trim($_POST['mname']);
        $lastname = trim($_POST['lname']);

        $gender = trim($_POST['gender']);
        $age = trim($_POST['age']);

        $username = trim($_POST['uname']);
        $password = trim($_POST['pword']);
        $confirm_pword = trim($_POST['confirm_pword']);

        $profile_default = trim($_POST['profile_default']);

        date_default_timezone_set("Asia/Manila");
        $date_issue = date("Y-m-d");
        

            if($password != $confirm_pword){
          
            
                echo"
                   <script> 
                       window.location.href = 'BIS/user_login/user_login_page.php';
                    </script> ";

                    
                   
         }else {

            $query = "INSERT INTO user_account (firstname, middlename, lastname, username, password, gender, age, date_registered , profile)
                        VALUES ('$firstname', '$middlename', '$lastname', '$username' , '$password' , '$gender', '$age', '$date_issue' , '$profile_default')";

            $result = mysqli_query($conn, $query);


            if($result){
            header('location: loading_registration.php');
               
            }else {

              

                echo "Invalid Input.";
               
            }
         }
        }

?>