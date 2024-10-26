<?php
// Connect to database
    require("../../../database/conn_db.php");

    if(isset($_POST['update_official_list'])){
        $id = trim($_POST["id"]);
        $fullnames = trim($_POST["fullname"]);
        $chairmans = trim($_POST["chairman"]);
        $positions = trim($_POST["position"]);
        $date_starts = trim($_POST["date_start"]);
        $date_ends = trim($_POST["date_end"]);
        $actives = trim($_POST["active"]);
        

        
        $sql = "UPDATE barangay_official SET fullname='$fullnames' , chairmanship='$chairmans', position='$positions' , term_start='$date_starts' , term_end='$date_ends' , status='$actives' WHERE id=$id";

                
        if (mysqli_query($conn, $sql)) {
            
            echo "<script>alert('Record updated successfully');</script>";
            echo "<script>window.location.href = '/BIS/administrator/admin_panel/brgy_official.php';</script>";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
        
        mysqli_close($conn);
        }
  ?>

    