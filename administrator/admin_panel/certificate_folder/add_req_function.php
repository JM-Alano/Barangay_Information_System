<?php

    require("../../../database/conn_db.php");

  if(isset($_POST['sub_add_manage'])){
        $id = trim($_POST["id_manage_add"]);
        $firstname = trim($_POST["firstname_add"]);
        $middlename = trim($_POST["middlename_add"]);
        $lastname = trim($_POST["lastname_add"]);

        $age = trim($_POST["age_add"]);
        $request_document = trim($_POST["request_document_add"]);
        $house_no = trim($_POST["house_no_add"]);

        $sitio_pook = $_POST["sitio_pook_add"];

        $birthday = trim($_POST["birthday_add"]);
        $place_of_birth = trim($_POST["place_of_birth_add"]);
        $contact_no = trim($_POST["contact_no_add"]);

        $contact_person = trim($_POST["contact_person_add"]);
        $contact_no_contact_person = trim($_POST["contact_person_no_add"]);
        $live_since_year  = trim($_POST["live_since_add"]);

        $purpose  = trim($_POST["purpose_add"]);
        $status  = trim($_POST["status_add"]);
        $gender  = trim($_POST["gender_add"]);
        $OR_no =  trim($_POST["or_no_add"]);
       
        $date_issue  = trim($_POST["date_issue_add"]);

        $exp_date_issue  = trim($_POST["date_expired_add"]);

    
       
        $sql = "INSERT INTO barangay_manage (firstname, middlename, lastname, age, 	request_document, house_no, birthday, place_of_birth, contact_no, contact_person, contact_no_contact_person, live_since_year, 	purpose, 	status, gender, OR_no, date_issue,expired_date,sitio_pook)
        VALUES ( '$firstname', '$middlename','$lastname','$age','$request_document' 
        ,'$house_no','$birthday','$place_of_birth','$contact_no','$contact_person','$contact_no_contact_person','$live_since_year','$purpose'
        ,'$status','$gender','$OR_no','$date_issue','$exp_date_issue','$sitio_pook')";

        $result = mysqli_query($conn, $sql);
        
      
                
                if ($result == true) {

                    ?>
                    <!-- <script>
                        window.location.href = "/BIS/administrator/admin_panel/certificate_folder/loading_add.php";
                    </script> -->
                    
                    <?php
                   



                    
                  } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                  }
                  
                  mysqli_close($conn);
      
     }
?>