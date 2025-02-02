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
   
     
             
        $sql = "UPDATE  barangay_request as req JOIN barangay_revenue as rev ON rev.user_id = req.id
          SET req.firstname= '$firstname' , req.middlename= '$middlename' , req.lastname= '$lastname' , req.age= '$age', req.request_document= '$request_document', req.house_number= '$house_no' , req.sitio_pook='$sitio_pook' , req.birthday='$birthday', req.place_of_birth='$place_of_birth' , req.contact_no='$contact_no', req.contact_person='$contact_person', req.contact_no_contact_person='$contact_no_contact_person' , req.contact_no_contact_person='$contact_no_contact_person', req.live_since_year='$live_since_year' , req.purpose='$purpose', req.status='$status', req.gender='$gender' , rev.status='$status'  WHERE req.id = $id";
        
                
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
   

    <form action="certificate_folder/update_req_list.php" class = "form_manage" method = "POST" enctype = "multipart/form-data" >
    <h1>Edit Manage List</h1>

    <div class = "main_div_manage">
        <div>
            <input type="file"  name = "image" accept = ".jpg, .jpeg, .png" id = "images"><br>
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
            <input id = "sitio_pook_update" name = "sitio_pook_upd" />
            

         


        </div>


         <div>
            
         <label for="">Purpose</label><br>
        <input type="text" id = "purpose_upd" name = "purpose_upd"><br>

         <label for="">Contact no.</label><br>
         <input type="tel" id = "contact_no_upd" name = "contact_no_upd" pattern="[0-9]{11}"> <br>

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

          

            <label for="">Live Since (Month/Year)</label><br>
            <input type="month" id = "live_since_upd" name = "live_since_upd"><br>

            
            <label for="">Status</label><br>
            <select id="status_upd" name = "status_upd">
                <option value=0>No data</option>
                <option value=1>Pending</option>
                <option value=2>Processing</option>
                <option value=3>Ready to Pick-up</option>
                <option value=4>Released</option>
                <option value=5>Invalid Purpose</option>
            </select><br>

           



            <input type="hidden" name = "id_manage" id = "id_upd">
            

           
        </div>
    </div>
       

    <div class = "action_submit">
            
            <input type="reset" id = "cancel" name = "cancel_upd">
            <input type="submit" id = "submit" name = "sub_upd">
    </div>



    </form>
</body>
</html>