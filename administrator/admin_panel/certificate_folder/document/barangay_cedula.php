<?php
    require('../../../database/conn_db.php');


    $sql = "SELECT * FROM  barangay_revenue as r LEFT JOIN barangay_request as req ON r.user_id = req.id  WHERE req.id = $id";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
       $row = mysqli_fetch_assoc($result);

       $id = $row['id'];
       $firstname = strtoupper($row["firstname"]);
       $lastname = strtoupper($row["lastname"]);
       $middlename = strtoupper(substr($row["middlename"], 0, 1));


       $age = $row["age"];
       $request_document = $row["request_document"];
       $house_no = strtoupper($row["house_number"]);

       $birthday = $row["birthday"];strtoupper($row["birthday"]);
       $place_of_birth = strtoupper($row["place_of_birth"]);
       $contact_no = $row["contact_no"];

       $contact_person = $row["contact_person"];
       $contact_no_contact_person = $row["contact_no_contact_person"];
       $live_since_year = $row["live_since_year"];

       $purpose = strtoupper($row["purpose"]);
       $status = $row["status"];
       
       $gender = $row["gender"];   
       $sitio_pook = strtoupper($row["sitio_pook"]);
       $date_issue = strtoupper($row["date_issue"]);

       $expired_date = strtoupper($row["expired_date"]);

       $OR_no = $row["OR_no"];


   
       ?>
            
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Barangay Cedula</title>
            <link rel = "stylesheet" href = "/BIS/administrator/admin_panel/certificate_folder/document/clearance.css"/>
        </head>
        <body>
            <h1>
                barangay_cedula
            </h1>
      
                    <script>
        // Retrieve PHP values dynamically and assign them to JavaScript variables
        let doc_name = "<?php echo addslashes($lastname); ?>";
        let doc_type = "<?php echo addslashes($request_document); ?>";

        // Combine the document type and name to set the title
        document.title = doc_type + " - " + doc_name;

        // Trigger the print dialog
        window.print();
        </script>
            
        
             
        </body>
        </html>
       <?php

        
      } else {
        echo "0 results";
      }
      mysqli_close($conn);
?>

