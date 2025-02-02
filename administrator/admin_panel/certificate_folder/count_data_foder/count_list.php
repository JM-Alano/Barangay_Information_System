<?php


 function brgy_cert_list(){
  require("../../database/conn_db.php");
  $result = $conn->query("SELECT document_type FROM barangay_revenue WHERE status=4
   AND document_type= 'Barangay Certificate'");
  $count = $result->num_rows;
  echo  $count;
 }

 function brgy_clear_list(){
  require("../../database/conn_db.php");
  $result = $conn->query("SELECT document_type  FROM barangay_revenue WHERE status=4 AND document_type= 'Barangay Clearance'");
  $count = $result->num_rows;
  echo  $count;
 }

 function brgy_indigen_list(){
  require("../../database/conn_db.php");
  $result = $conn->query("SELECT document_type  FROM barangay_revenue WHERE status=4 AND document_type= 'Barangay Indigency'");
  $count = $result->num_rows;
  echo  $count;
 }

 function brgy_id_list(){
  require("../../database/conn_db.php");
  $result = $conn->query("SELECT document_type  FROM barangay_revenue WHERE status=4 AND document_type= 'Barangay ID'");
  $count = $result->num_rows;
  echo  $count;
 }


  
?>