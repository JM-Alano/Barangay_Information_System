<?php

require("../../database/conn_db.php");


$sql = "SELECT * FROM barangay_information";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
    
   $row = mysqli_fetch_array($result);
  
    ?>
     <p hidden  id = "logo_get">../../asset/image/logo/<?php echo  $row['logo'] ?></p>
     
       
    <?php

}

?>


