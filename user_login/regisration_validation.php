<?php
    require('../database/conn_db.php');


    if (isset($_POST['registraion'])) {
        $firstname = ucfirst(strtolower(trim($_POST['fname'])));
        $middlename = ucfirst(trim($_POST['mname']));
        $lastname = ucfirst(trim($_POST['lname']));

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
                       window.location.href = '/BIS/user_login/user_login_page.php';
                    </script> ";

                    
                   
         }else {

                    
            // Check if the date_registered already exists
            $checkQuery = "SELECT COUNT(*) AS count FROM user_account WHERE username = '$username'  || password = '$password' ";
            $result = mysqli_query($conn, $checkQuery);
            $row = mysqli_fetch_assoc($result);

            if ($row['count'] == 0) {
                // Insert new record if date is unique
                $query = "INSERT INTO user_account (firstname, middlename, lastname, username, password, gender, age, date_registered, profile)
                        VALUES ('$firstname', '$middlename', '$lastname', '$username', '$password', '$gender', '$age', '$date_issue', '$profile_default')";
                
                if (mysqli_query($conn, $query)) {
                    echo "New record created successfully!";
                } else {
                    echo "Error: " . mysqli_error($conn);
                }
            }else{
                echo "<script>alert('Username or Password is already exists!');
                window.location.href = '/BIS/user_login/user_login_page.php';
                 </script>";
            }

            // Close connection
            mysqli_close($conn);
        
         }
        }

?>