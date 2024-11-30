<?php

    require("../../../database/conn_db.php");

  if(isset($_POST['sub_print'])){
        $id = trim($_POST["id_print"]);
        $firstname = trim($_POST["firstname_print"]);
        $middlename = trim($_POST["middlename_print"]);
        $lastname = trim($_POST["lastname_print"]);

        $document = trim($_POST["document_print"]);
        $OR_no = trim($_POST["OR_no_print"]);
        $status = trim($_POST["status_print"]);

        $amount = trim($_POST["amount"]);
        $current_date = trim($_POST["current_date"]);


       
      
            
        $sql = "INSERT INTO barangay_revenue (id, firstname, middlename, lastname, document_amount, date_issue, document_type, OR_no, status)
        VALUES ('$id', '$firstname', '$middlename', '$lastname', '$amount', '$current_date', '$document', '$OR_no', '$status')";
                
                if (mysqli_query($conn, $sql)) {

                  
                  require('print_fucntion.php');



                    
                  } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                  }
                  
                  mysqli_close($conn);
      
     }
?>