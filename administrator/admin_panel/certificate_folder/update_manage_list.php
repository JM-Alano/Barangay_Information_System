<?php

    require("../../../database/conn_db.php");

  if(isset($_POST['sub_upd'])){
        $id = trim($_POST["id_manage"]);
        $firstname = trim($_POST["firstname_upd"]);
        $middlename = trim($_POST["middlename_upd"]);
        $lastname = trim($_POST["lastname_upd"]);

        $age = trim($_POST["age_upd"]);
        $request_document = trim($_POST["request_document_upd"]);
        $house_no = trim($_POST["house_no_upd"]);

        $sitio_pook = $_POST["sitio_pook_upd"];

        $birthday = trim($_POST["birthday_upd"]);
        $place_of_birth = trim($_POST["place_of_birth_upd"]);
        $contact_no = trim($_POST["contact_no_upd"]);

        $contact_person = trim($_POST["contact_person_upd"]);
        $contact_no_contact_person = trim($_POST["contact_person_no_upd"]);
        $live_since_year  = trim($_POST["live_since_upd"]);

        $purpose  = trim($_POST["purpose_upd"]);
        $status  = trim($_POST["status_upd"]);
        $gender  = trim($_POST["gender_upd"]);
        $OR_no =  trim($_POST["or_no_upd"]);
       
        $date_issue  = trim($_POST["date_issue_upd"]);

        $exp_date_issue  = trim($_POST["date_expired_upd"]);

    
        $sql= " UPDATE barangay_manage
        LEFT JOIN barangay_request ON barangay_manage.id = barangay_request.id
        SET barangay_manage.status = '$status', barangay_request.status = '$status', barangay_manage.firstname = '$firstname', barangay_manage.middlename = '$middlename' , barangay_manage.lastname = '$lastname', barangay_manage.age = '$age', barangay_manage.request_document = '$request_document', barangay_manage.house_no = '$house_no', barangay_manage.sitio_pook = '$sitio_pook', barangay_manage.birthday = '$birthday' , barangay_manage.place_of_birth = '$place_of_birth', barangay_manage.contact_no = '$contact_no', barangay_manage.contact_person = '$contact_person', barangay_manage.contact_no_contact_person = '$contact_no_contact_person', barangay_manage.live_since_year = '$live_since_year', barangay_manage.purpose = '$purpose', barangay_manage.status = '$status', barangay_manage.gender = '$gender', barangay_manage.date_issue = '$date_issue', barangay_manage.expired_date = '$exp_date_issue'
        WHERE barangay_manage.OR_no = $OR_no ";
        
      
                
                if (mysqli_query($conn, $sql)) {

                    ?>
                    <script>
                        window.location.href = "/BIS/administrator/admin_panel/certificate_folder/loading_update.php";
                    </script>
                    
                    <?php
                   



                    
                  } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                  }
                  
                  mysqli_close($conn);
      
     }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   

    <form action="certificate_folder/update_manage_list.php" class = "form_manage" method = "POST">
    <h1>Edit Manage List</h1>

    <div class = "main_div_manage">
        <div>
            <label for="">Firstname</label><br>
            <input type="text" name = "firstname_upd" id = "firstname_upd"><br>

            <label for="">Middlename</label><br>
            <input type="text" name = "middlename_upd" id = "middlename_upd"><br>
            
            <label for="">Lastname</label><br>
            <input type="text" name = "lastname_upd" id = "lastname_upd"><br>

            <label for="">Age</label><br>
            <input type="number" name = "age_upd" id = "age_upd"><br>

            <label for="">Birthday</label><br>
            <input type="date" name = "birthday_upd" id = "birthday_upd"><br>

            <label for="">Place of Birth</label><br>
            <input type="text" name = "place_of_birth_upd" id = "place_of_birth_upd"><br>

            <label for="">Gender</label><br>
                <select id = "gender_upd" name = "gender_upd">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select><br>

            <label for="">House no.</label><br>
            <input type="text" id = "house_no_upd" name = "house_no_upd"><br>

            <label for="">Sitio/Pook</label><br>
            <select id = "sitio_pook_update" name = "sitio_pook_upd">
                <option value="Iyala">Iyala</option>
                <option value="Sitio Burol">Sitio Burol</option>
                <option value="Sitio Kubuhan & Rigde View">Sitio Kubuhan & Rigde View</option>
                <option value="Mabuhay Homes 2000">Mabuhay Homes 2000</option>
                <option value="Sitio Pook Boundary">Sitio Pook Boundary</option>
                <option value="Camella at the Island Park">Camella at the Island Park</option>
            </select><br>

                <!-- <input type="text" id = "sitio_pook_update" name = "sitio_pook_upd"> -->

            <label for="">Contact no.</label><br>
            <input type="tel" id = "contact_no_upd" name = "contact_no_upd" pattern="[0-9]{11}"> <br>


        </div>


         <div>
             <label for="">Contact Person</label><br>
            <input type="text" id = "contact_person_upd" name = "contact_person_upd" ><br>

            <label for="">Contact no.</label><br>
            <input type="tel" id = "contact_person_no_upd" name = "contact_person_no_upd" pattern="[0-9]{11}"><br>
            
            <label for="">Document Type</label><br>
                <select id="request_document_upd" name = "request_document_upd">
                    <option value="Barangay Certificate">Barangay Certificate</option>
                    <option value="Barangay Clearance">Barangay Clearance</option>
                    <option value="Barangay Indigency">Barangay Indigency</option>
                    <option value="Barangay ID">Barangay ID</option>

                </select><br>

            <label for="">Date issue</label><br>
            <input type="date" id = "date_issue_upd" name = "date_issue_upd"><br>

            <label for="">Date Expired</label><br>
            <input type="date" id = "date_expired_upd" name = "date_expired_upd"><br>

            <label for="">Live Since</label><br>
            <input type="month" id = "live_since_upd" name = "live_since_upd"><br>

            <label for="">Status</label><br>
            <select id="status_upd" name = "status_upd">
                <option value=0>Decline</option>
                <option value=1>Pending</option>
                <option value=2>Processing</option>
                <option value=3>Completed</option>
            </select><br>

            <label for="">OR. no</label><br>
            <input type="text" id = "or_no_upd" name = "or_no_upd" readonly><br>

            <label for="">Purpose</label><br>
            <input type="text" id = "purpose_upd" name = "purpose_upd"><br>


            <input type="hidden" name = "id_manage" id = "id_upd">
            

           
        </div>
    </div>
       

    <div class = "action_submit">
            <input type="submit" id = "submit" name = "sub_upd">
            <input type="reset" id = "cancel" name = "cancel_upd">
    </div>



    </form>
</body>
</html>