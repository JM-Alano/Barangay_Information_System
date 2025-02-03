<?php


 function brgy_cert_list(){
  require("../../database/conn_db.php");
  $result = $conn->query("SELECT request_document FROM barangay_request WHERE status=4
   AND request_document= 'Barangay Certificate'");
  $count = $result->num_rows;
  echo  $count;
 }

 function brgy_clear_list(){
  require("../../database/conn_db.php");
  $result = $conn->query("SELECT request_document  FROM barangay_request WHERE status=4 AND request_document= 'Barangay Clearance'");
  $count = $result->num_rows;
  echo  $count;
 }

 function brgy_indigen_list(){
  require("../../database/conn_db.php");
  $result = $conn->query("SELECT request_document  FROM barangay_request WHERE status=4 AND request_document= 'Barangay Indigency'");
  $count = $result->num_rows;
  echo  $count;
 }

 function brgy_id_list(){
  require("../../database/conn_db.php");
  $result = $conn->query("SELECT request_document  FROM barangay_request WHERE status=4 AND request_document= 'Barangay ID'");
  $count = $result->num_rows;
  echo  $count;
 }


  
?>