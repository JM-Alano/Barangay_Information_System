<?php

    require("../../../database/conn_db.php");

  if(isset($_POST['sub_print'])){
        $id = trim($_POST["id_print"]);
       $purpose =trim($_POST["purpose_print"]);

        $document = trim($_POST["document_print"]);
        $OR_no = trim($_POST["OR_no_print"]);
        $status = trim($_POST["status_print"]);

        $amount = trim($_POST["amount"]);
        $current_date = trim($_POST["current_date"]);

                  switch ($document) {
                    case "Barangay Clearance":

                        
                      include('document/barangay_clearance.php');
                      break;
                    case "Barangay Certificate":
                        include('document/barangay_certificate.php');
                      break;
                    case "Barangay Indigency":
                      include('document/baranagy_indigency.php');
                      break;
                    case "Barangay ID":
                      include('document/barangay_ID.php');
                      break;
                    
                      default:
                      echo "rerr";
                  }
      
     }
?>