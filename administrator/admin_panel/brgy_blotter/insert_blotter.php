<?php
       
    require('../../../database/conn_db.php');
        if(isset($_POST["save_blotter"])){
        
        $complainant = trim($_POST["complainant"]);
        $details = trim($_POST["details"]);
        $respondent = trim($_POST["respondent"]);
        $date = trim($_POST["date"]);
        $status = trim($_POST["status"]);
        $incident_type = trim($_POST["incident_type"]);
        $victim = trim($_POST["victims"]);
        $time = trim($_POST["time"]);
        $location = trim($_POST["location"]);

    
        $sql = "INSERT INTO barangay_blotter (status, incident_type, victim, location, time, respondent, date, details, complainant)
        VALUES ('$status', '$incident_type', '$victim','$location','$time','$respondent','$date','$details','$complainant')";

        
        $result = $conn->multi_query($sql);

        
         if ($result === TRUE) {

        echo"
            <script>window.location.href = '/BIS/administrator/admin_panel/blotter.php'</script>
        ";
            
        
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }


}



?>
