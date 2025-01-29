<?php

    require('../../database/conn_db.php');
    
     if (isset($_POST['submit_request'])) {
        $user_id = trim($_POST['user_id']);
        $id = trim($_POST['id']);

        $firstname = trim($_POST['firstname']);
        $middlename = trim($_POST['middlename']);
        $lastname = trim($_POST['lastname']);

        $age = trim($_POST['age']);
        $house_no = trim($_POST['house_no']);
        $request_document = trim($_POST['request_document']);

        $birthday = trim($_POST['date_birthday']);
        $place_of_birth = trim($_POST['place_of_birth']);
        $contact_no = trim($_POST['contact_no']);

        $contact_person = trim($_POST['contact_person']);
        $contact_person_no = trim($_POST['contact_person_no']);
        $live_since_year = trim($_POST['live_since_year']);

        $purpose = trim($_POST['purpose']);
        $status = trim($_POST['status']);
        $gender = trim($_POST['gender']);

        $sitio_pook = trim($_POST['Sitio_Pook']);

        $profile = trim($_POST['profile_user']);

        date_default_timezone_set("Asia/Manila");
        $date_request = date("Y-m-d");

        if(empty($id)){
                    $query = "INSERT INTO barangay_request (firstname, middlename, lastname, age, request_document, house_number, birthday, place_of_birth, contact_no, contact_person, contact_no_contact_person, live_since_year, purpose, status, gender, date_request, sitio_pook, user_id )
                    VALUES ('$firstname', '$middlename', '$lastname' , '$age', '$request_document', '$house_no', '$birthday', '$place_of_birth', '$contact_no' , '$contact_person', '$contact_person_no' , '$live_since_year' , '$purpose' , ' $status', '$gender', '$date_request', '$sitio_pook' , '$user_id' )";


            $results = mysqli_query($conn, $query);
        
            
        
            if($results == true){
                

                $sqls = "UPDATE user_account as u JOIN barangay_request as r ON u.user_id = r.user_id
                SET u.birthday = '$birthday', u.contact_no = '$contact_no' , u.house_no = '$house_no' , u.sitio_pook = '$sitio_pook' ,  r.sitio_pook = '$sitio_pook' , r.place_of_birth = '$place_of_birth' , r.contact_person = '$contact_person' , r.contact_no_contact_person = '$contact_person_no' , r.live_since_year = '$live_since_year' , r.purpose = '$purpose' , r.request_document = '$request_document' , r.profile = '$profile' WHERE r.user_id = u.user_id";

                if(mysqli_query($conn, $sqls)){
                    echo "<script>window.location.href = 'successful.php'</script>";
                }
                
                    
            }else {

            
                echo "invalid ";
                
                }


        }else if ($id == $id){

            $sqls = "UPDATE user_account as u JOIN barangay_request as r ON u.user_id = r.user_id
            SET u.birthday = '$birthday' , r.birthday = '$birthday', u.contact_no = '$contact_no' , r.contact_no = '$contact_no' , u.house_no = '$house_no' , r.house_number = '$house_no' , u.sitio_pook = '$sitio_pook' , r.sitio_pook = '$sitio_pook' , r.place_of_birth = '$place_of_birth' , r.contact_person = '$contact_person' , r.contact_no_contact_person = '$contact_person_no' , r.live_since_year = '$live_since_year' , r.purpose = '$purpose' , r.request_document = '$request_document' , r.profile = '$profile' , r.firstname = '$firstname' , r.middlename = '$middlename' , r.lastname = '$lastname' WHERE r.id = $id";

            if(mysqli_query($conn, $sqls)){
                echo "<script>window.location.href = 'successful.php'</script>";
            }
            
        }
        
         }
        


?>