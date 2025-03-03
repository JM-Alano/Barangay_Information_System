<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Table</title>
   
</head>
<body>
      
        <?php   $user_id =  $_SESSION['user_id']; ?>

        
<?php 
require("../../database/conn_db.php");


// Fetch records for the current page
$sql = "SELECT * FROM barangay_request WHERE user_id = $user_id ORDER BY id DESC  LIMIT 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>
   
<table>
    <caption>Request Information</caption>
    <tr>
         
        <th>Fullname</th>
        <th>Document Type</th>
        <th>Purpose</th>
        <th>Date <br> Requested</th>
        <th>Control No.</th>
        <th>Status</th>
      
    </tr>
    <?php
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];

        $firstname = $row["firstname"];
        $middlename = $row["middlename"];
        $lastname = $row["lastname"];

        $document_type = $row["request_document"];
        $purpose = $row["purpose"];
        $date_requested = $row["date_request"];
     
        $status = $row["status"];
    
        ?>
        
        <tr class="table_hover">
           
            <td><?php echo  $firstname ." ". $middlename ." ". $lastname; ?></td>
            <td><?php echo  $document_type; ?></td>
            <td><?php echo $purpose; ?></td>
            <td><?php echo $date_requested; ?></td>
            <td><?php echo $id; ?></td>
            <td>
                <?php
                        $satus_document =  $row['status'] ;

                        if ($satus_document == 0){
                            echo "<h4 style = 'color:#00572060;'>No data</h4>";
                        }
                        else if ($satus_document == 1){
                            echo "<h4 style = 'color:red;'>Pending</h4>";
                        }
                        else if ($satus_document == 2){
                            echo "<h4 style = 'color:orange;'>Processing</h4>";
                        }
                        else if ($satus_document == 3){
                            echo "<h4 style = 'color:blue;'>Ready to Pick-up</h4>";
                        }
                        else if ($satus_document == 4){
                            echo "<h4 style = 'color:#00cc0e;'>Released</h4>";
                        }
                        else if ($satus_document == 5){
                            echo "<p style = 'color:red;'>Invalid Purpose</p>";
                        }
                
                ?>
            </td>
          
        </tr>
        <?php
    }
    ?>
</table>



<?php 
} else { ?>
        <style>
        .Data-not-found h1{
            color:rgba(255, 0, 0, 0.37);
            position:absolute;
            top:300px;
            left:25%;
            font-size:3.5rem;
        }
    </style>
    <div class = "Data-not-found">
    <h1>DATA NOT FOUND</h1>
    </div>
    <?php
}

// Close the connection
mysqli_close($conn);
?>

            
          
           
</body>
</html>