<?php

    switch ($document) {
        case "Barangay Clearance":
          echo "Barangay Clearance to ";
          break;
        case "Barangay Certificate":
            include('document/barangay_certificate.php');
          break;
        case "Barangay Indigency":
            echo "Barangay Indigency to";
          break;
        case "Barangay ID":
            echo "Barangay ID to";
          break;
        
          default:
          echo "nice";
      }

?>