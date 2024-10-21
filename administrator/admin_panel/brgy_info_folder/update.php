<?php

    require("../../database/conn_db.php");
   
    if(isset($_POST['update'])){
        $brgy_name = $_POST['brgy'];
        $municipal = $_POST['municipal'];
        $address = $_POST['address'];
       
        $email = $_POST['email'];

        if(empty($brgy_name) || empty($municipal) || empty($address) || empty($email)){
            echo "Complete the form";
            echo "<script>document.getElementById('validation_update').style.display = 'block'</script>";
                    
        }else{
            $sql = "UPDATE barangay_information SET barangay_name= '$brgy_name', municipality = '$municipal' , address  = '$address' , email = '$email' WHERE id=1";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "Record updated successfully";

                echo "<script>window.location.href = 'http://localhost/BIS/administrator/admin_panel/brgy_info.php'</script>";
               
              } else {
                echo "Error updating record: " . mysqli_error($conn);
              }
        }


    }

?>