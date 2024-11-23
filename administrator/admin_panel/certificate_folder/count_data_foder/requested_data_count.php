<?php

   require("../../database/conn_db.php");
   $result = $conn->query("SELECT * FROM barangay_request");
   $count = $result->num_rows;
   echo  $count;
?>