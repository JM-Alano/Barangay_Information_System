<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

   <style>
        h2{
            color:#005720;
            margin-top:0px;
            font-family:"sub_text";
            text-align:center;
            
        }
   </style>
<body>
    <?php

    require("../../database/conn_db.php");


    $sql = "SELECT barangay_name, municipality, address, phone_no, email FROM barangay_information";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0){
        
        $row = mysqli_fetch_assoc($result);

        echo  '<h2>' . "Barangay  : " .  $row['barangay_name'] . '</h2>';
        echo '<h2>' . "Municipality : " .  $row['municipality'] . '</h2>';
        echo '<h2>' . "Address : " .  $row['address'] . '</h2>';
        echo '<h2>'  . "Contact no. : ".  $row['phone_no'] . '</h2>';
        echo '<h2>'  . "Email : ".  $row['email'] . '</h2>';

    }
    ?>
</body>
</html>

