<?php
       
    require('../../../database/conn_db.php');
        if(isset($_POST["save_incident"])){

        $cause_incident = trim($_POST["cause_incident"]);
        $time = trim($_POST["time"]);
        $date = trim($_POST["date"]);
        $status = trim($_POST["status"]);

        $person1 = trim($_POST["person1"]);
        $address1 = trim($_POST["address1"]);
        $vehicle1 = trim($_POST["vehicle1"]);
        $license1 = trim($_POST["license1"]);
        $plate1 = trim($_POST["plate1"]);

        $person2 = trim($_POST["person2"]);
        $address2 = trim($_POST["address2"]);
        $vehicle2 = trim($_POST["vehicle2"]);
        $license2 = trim($_POST["license2"]);
        $plate2 = trim($_POST["plate2"]);

        $person3 = trim($_POST["person3"]);
        $address3 = trim($_POST["address3"]);
        $vehicle3 = trim($_POST["vehicle3"]);
        $license3 = trim($_POST["license3"]);
        $plate3 = trim($_POST["plate3"]);

        $person4 = trim($_POST["person4"]);
        $address4 = trim($_POST["address4"]);
        $vehicle4 = trim($_POST["vehicle4"]);
        $license4 = trim($_POST["license4"]);
        $plate4 = trim($_POST["plate4"]);


        $sql = "INSERT INTO barangay_incident (cause_incident,date,time,name_involve,address,vehicle,license,plate_no, status)
        VALUES ('$cause_incident', '$date', '$time','$person1 $person2 $person3 $person4','$address1 $address2 $person3 $person4','$vehicle1 $vehicle2 $vehicle3 $vehicle4','$license1 $license2 $license3 $license4','$plate1 $plate2 $plate3 $plate4', '$status')";

        
        $result = $conn->multi_query($sql);

        
         if ($result === TRUE) {

        echo"
            <script>window.location.href = '/BIS/administrator/admin_panel/incident.php'</script>
        ";
            
        
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }


}



?>
