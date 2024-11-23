<?php

    require('../database/conn_db.php');

     if (isset($_POST['submit_request'])) {
        $firstname = trim($_POST['firstname']);
        $middlename = trim($_POST['middlename']);
        $lastname = trim($_POST['lastname']);

        $age = trim($_POST['age']);
        $address = trim($_POST['address']);
        $request_document = trim($_POST['request_document']);

        $birthday = trim($_POST['date']);
        $place_of_birth = trim($_POST['place_of_birth']);
        $control_no = trim($_POST['control_no']);

        $contact_person = trim($_POST['contact_person']);
        $contact_person_no = trim($_POST['contact_person_no']);
        $live_since_year = trim($_POST['live_since_year']);

        $purpose = trim($_POST['purpose']);
        $status = trim($_POST['status']);
        $gender = trim($_POST['gender']);


        $query = "INSERT INTO barangay_request (firstname, middlename, lastname, age, request_document, address, birthday, place_of_birth, contact_no, contact_person, contact_no_contact_person, live_since_year, purpose, status, gender)
                VALUES ('$firstname', '$middlename', '$lastname' , '$age', '$request_document', '$address', '$birthday', '$place_of_birth', '$control_no' , '$contact_person', '$contact_person_no' , '$live_since_year' , '$purpose' , ' $status', '$gender')";


        $results = mysqli_query($conn, $query);

        
      
        if($results == true){
          
                echo "Success ";
              
                    
         }else {

           
            echo "invalid ";
               
            }
         }
        


?>