<?php
// Connect to database
    require("../../../database/conn_db.php");

    if(isset($_POST['submit_resident_list'])){
        $id = trim($_POST["id"]);
        
        $firstname = trim($_POST["firstname"]);
        $middlename = trim($_POST["middlename"]);
        $lastname = trim($_POST["lastname"]);

        $id_type = trim($_POST["id_type"]);
        $id_number = trim($_POST["id_number"]);

        $alias = trim($_POST["alias"]);
        $place_of_birth = trim($_POST["place_of_birth"]);
        $birthday = trim($_POST["date"]);
        
        $age = trim($_POST["age"]);
        $civil_status = trim($_POST["civil-status"]);
        $gender = trim($_POST["gender"]);

        $email = trim($_POST["email"]);
        $contact_no = trim($_POST["contact_no"]);
        $occupation = trim($_POST["occupation"]);

        $voter_status = trim($_POST["voter-status"]);
        $citizenship = trim($_POST["citizenship"]);
        $house_no = trim($_POST["house_no"]);

        $sitio_pook = trim($_POST["sitio_pook_add"]);
        

        $fileName = $_FILES["image"]["name"];
        $fileSize =$_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];

        $validImageExtension =  ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));



        if($_FILES["image"]["error"] == 4){
            
            $sql = "UPDATE barangay_resident SET firstname='$firstname' , middlename='$middlename', lastname='$lastname' , id_type='$id_type' , id_type_no='$id_number' , alias='$alias' , place_of_birth='$place_of_birth' , birthday='$birthday ' , age='$age' , civil_status='$civil_status' , gender='$gender' , email='$email' , contact_no='$contact_no' ,  occupation='$occupation' , voter_status='$voter_status' , citizenship='$citizenship' , house_no='$house_no' , sitio_pook='$sitio_pook' WHERE id=$id";

            if (mysqli_query($conn, $sql)) {
                echo "<script>window.location.href = 'loading_update.php';</script>";
               
            }
          }else{
            $fileName = $_FILES["image"]["name"];
            $fileSize =$_FILES["image"]["size"];
            $tmpName = $_FILES["image"]["tmp_name"];
  
            $validImageExtension =  ['jpg', 'jpeg', 'png'];
            $imageExtension = explode('.', $fileName);
            $imageExtension = strtolower(end($imageExtension));
  
            if(!in_array($imageExtension, $validImageExtension)){
              echo "
                <script>alert('Invalid Image Extension ')</script>
               
              ";
              echo "<script>window.location.href = '/BIS/administrator/admin_panel/resident.php';</script>";
            }else if($fileSize > 1000000){
              echo "<script>alert('Image Size Is too Large')</script>";
              echo "<script>window.location.href = '/BIS/administrator/admin_panel/resident.php';</script>";
            }else{
              $newImageName = uniqid();
              $newImageName .= '.' . $imageExtension;
  
              move_uploaded_file($tmpName, '../../../asset/image/resident_profile/'. $newImageName );

              $sql = "UPDATE barangay_resident SET firstname='$firstname' , middlename='$middlename', lastname='$lastname' , id_type='$id_type' , id_type_no='$id_number' , alias='$alias' , place_of_birth='$place_of_birth' , birthday='$birthday ' , age='$age' , civil_status='$civil_status' , gender='$gender' , email='$email' , contact_no='$contact_no' ,  occupation='$occupation' , voter_status='$voter_status' , citizenship='$citizenship' , house_no='$house_no' , sitio_pook='$sitio_pook' , image='$newImageName' WHERE id=$id";


              if (mysqli_query($conn, $sql)) {
            
                echo "<script>window.location.href = 'loading_update.php';</script>";
               
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
            
            mysqli_close($conn);
            }

            }

        }
        

  ?>

    