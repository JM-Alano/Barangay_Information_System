
<?php
       
       require('../../../database/conn_db.php');

       if(isset($_POST["submit_resident"])){
      

        $id_type = trim($_POST["id_type"]);
        $id_number = trim($_POST["id_number"]);

         $firstname = trim($_POST["firstname"]);
         $middlename = trim($_POST["middlename"]);
         $lastname = trim($_POST["lastname"]);

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
         $citizenship = trim($_POST["citezenship"]);
         $address = trim($_POST["address"]);
        
    

        if($_FILES["image"]["error"] == 4){
          echo "<script>alert('Image Does Not Exist')</script>";
         echo " <script>window.location.href = '/BIS/administrator/admin_panel/brgy_resident_folder/add_resident.php'</script>";
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
            echo " <script>window.location.href = '/BIS/administrator/admin_panel/brgy_resident_folder/add_resident.php'</script>";
            
          }else if($fileSize > 1000000){
            echo "<script>alert('Image Size Is too Large')</script>";
            echo " <script>window.location.href = '/BIS/administrator/admin_panel/brgy_resident_folder/add_resident.php'</script>";
          }else{
            $newImageName = uniqid();
            $newImageName .= '.' . $imageExtension;

            move_uploaded_file($tmpName, '../../../asset/image/resident_profile/'. $newImageName );

            $sql = "INSERT INTO barangay_resident (id_type, id_type_no, firstname, middlename, lastname, alias, place_of_birth, birthday, age, civil_status, gender, email, contact_no, occupation, voter_status, citizenship, address,image)
            VALUES ( '$id_type', '$id_number','$firstname','$middlename','$lastname' 
            ,'$alias','$place_of_birth','$birthday','$age','$civil_status','$gender','$email','$contact_no'
            ,'$occupation','$voter_status','$citizenship','$address','$newImageName')";

            $result = mysqli_query($conn, $sql);


            
           if ($result === TRUE) {

            echo"
                 <script> 
        
                     alert('New record created successfully');
                     window.location.href ='/BIS/administrator/admin_panel/resident.php';
                  </script> ";
                 
            
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }

          }
        }






          

         }

       
       
       
       ?>