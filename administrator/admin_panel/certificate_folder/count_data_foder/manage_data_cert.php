<?php

   require("../../database/conn_db.php");
   $result = $conn->query("SELECT * FROM barangay_manage");
   $count = $result->num_rows;
   echo  $count;
?>