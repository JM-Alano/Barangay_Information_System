<?php
// Headers for download
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; Filename = Barangay-Blotter-list.xls");

require 'table_export.php';
?>
