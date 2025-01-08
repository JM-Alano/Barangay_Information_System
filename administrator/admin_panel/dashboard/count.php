<?php


function population_total() {
   require("../../database/conn_db.php");
   $result = $conn->query("SELECT * FROM barangay_resident");
   $count = $result->num_rows;
   echo  $count;
 }

 function document_male_total(){
  require("../../database/conn_db.php");
  $result = $conn->query("SELECT * FROM barangay_request WHERE gender = 'male'");
  $count = $result->num_rows;
  echo  $count;
 }

 function document_female_total(){
  require("../../database/conn_db.php");
  $result = $conn->query("SELECT * FROM barangay_request WHERE gender = 'female'");
  $count = $result->num_rows;
  echo  $count;
 }


 function voter_list(){
  require("../../database/conn_db.php");
  $result = $conn->query("SELECT *  FROM barangay_resident WHERE voter_status = 'yes'");
  $count = $result->num_rows;
  echo  $count;
 }

 function non_voter_list(){
  require("../../database/conn_db.php");
  $result = $conn->query("SELECT *  FROM barangay_resident WHERE voter_status = 'no'");
  $count = $result->num_rows;
  echo  $count;
 }

 function official_list(){
  require("../../database/conn_db.php");
  $result = $conn->query("SELECT *  FROM barangay_official");
  $count = $result->num_rows;
  echo  $count;
 }

 function revenue_total() {
    require("../../database/conn_db.php");

    // Query to calculate the total sum of document_amount for distinct rows
    $result = $conn->query("SELECT SUM(DISTINCT document_amount) AS total FROM barangay_revenue");
    
    if ($result) {
        $row = $result->fetch_assoc();
        $total = $row['total'] ?? 0; // Default to 0 if NULL
        echo $total; // Display the total
    } else {
        echo "Error: " . $conn->error; // Display error if query fails
    }
    
}

function blotter_list(){
    require("../../database/conn_db.php");
    $result = $conn->query("SELECT *  FROM barangay_blotter WHERE status = 1 OR 3 ");
    $count = $result->num_rows;
    echo  $count;
   }

   function user_registered_list(){
    require("../../database/conn_db.php");
    $result = $conn->query("SELECT *  FROM user_account ");
    $count = $result->num_rows;
    echo  $count;
   }
?>