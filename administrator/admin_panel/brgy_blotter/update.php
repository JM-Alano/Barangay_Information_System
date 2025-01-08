<?php

    require("../../../database/conn_db.php");

  if(isset($_POST['edit_blotter'])){
        
        $id_blotter = trim($_POST["id_blotter"]);
        
        $complainant = trim($_POST["complainant"]);
        $victims = trim($_POST["victims"]);
        $location = trim($_POST["location"]);

        $time = trim($_POST["time"]);
        $respondent = trim($_POST["respondent"]);
        $incident_type = trim($_POST["incident_type"]);
        $date_blotter = trim($_POST["date_blotter"]);

        $status_blotter = trim($_POST["status_blotter"]);
        $details = trim($_POST["details"]);
        
        
    
        $sql= "UPDATE barangay_blotter SET complainant='$complainant' , victim='$victims', location='$location' , time='$time' , respondent='$respondent', incident_type='$incident_type', date='$date_blotter', status='$status_blotter', details='$details' WHERE id=$id_blotter";
        
      
                
                if (mysqli_query($conn, $sql)) {

                    ?>
                    <script>
                        window.location.href = "/BIS/administrator/admin_panel/brgy_blotter/loading_update.php";
                    </script>
                    
                    <?php
                   



                    
                  } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                  }
                  
                  mysqli_close($conn);
      
     }
?>