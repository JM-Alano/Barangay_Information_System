
<?php
	
	
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "barangay_information_system";
    $port = "3306";

    // Create connection
    $conn = mysqli_connect($servername,$username,$password,$dbname,$port);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    "Connected successfully";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<style>
		@font-face {
    font-family: "main_text";
   src: url(../../../asset/font/Syncopate/Syncopate-Regular.ttf);
   }
   @font-face {
       font-family: "sub_text";
       src: url(../../../asset/font/Afacad_Flux/AfacadFlux-VariableFont_slnt,wght.ttf);
   }
   *{
       margin: 0px;
       padding: 0px;
       box-sizing: content-box;
       list-style-type: none ;
   }
   :root{
       --bg-color: #FCFAEE;
       --2nd-bg-color:#4A9D4f;
       --sub-bg-color: #005720 ;
   
       --1st-text-color: #005720 ;
       --2nd-text-color: rgb(53, 53, 53);
       --3rd-text-color: #FCFAEE;
   
       --btn-color: #d4b62f;

       --other-color :rgb(0, 183, 255);
   }
   .h2{
    color: #4A9D4f;
    font-family: "sub_text";
   }
   .input{
    margin-top: 20px;
    border-radius: 4px;
    border: 2px solid #4A9D4f;
    padding: 10px;
    margin-left:10px;
   }
   .button{
    padding: 10px;
    margin-top: 20px;
    background-color: rgb(0, 183, 255);
    color: var(--bg-color);
    border-radius: 4px;
    width:100px;
    border: none;
    cursor: pointer;
    margin-left: 10px;
   }
   .button:hover{
    background-color: rgb(70, 198, 248);
   }
	</style>
</head>
<body>
    <h2 class = "h2">Import Data</h2>
	<form class = "form" action="brgy_blotter/import_temp.php" method="post" enctype="multipart/form-data">
    <input class = "input" type="file" name="excel" accept=".xls,.xlsx" required> <span style = "color:#4A9D4f;">.xls .xlsx</span> <br>
    <button class = "button" type="submit" name="import">Import</button>
</form>



    <?php
		if(isset($_POST["import"])){
			$fileName = $_FILES["excel"]["name"];
			$fileExtension = explode('.', $fileName);
             $fileExtension = strtolower(end($fileExtension));
			$newFileName = date("Y.m.d") . " - " . date("h.i.sa") . "." . $fileExtension;

			$targetDirectory = "uploads/" . $newFileName;
			move_uploaded_file($_FILES['excel']['tmp_name'], $targetDirectory);

			error_reporting(0);
			ini_set('display_errors', 0);

			require './exelreader/excel_reader2.php';
			require './exelreader/SpreadsheetReader.php';

			$reader = new SpreadsheetReader($targetDirectory);
			foreach($reader as $key => $row){
				
             

                $subject = trim($row [0]);
                $cell_no = trim($row [1]);
                $place = trim($row [2]) ;
        
                $tanod = trim($row [3]);
                $date =date("Y-m-d", strtotime($row[4]));
                $time = date("h:i:s A", strtotime($row [5]));;
        
                $status = trim($row [6]) ;
                // $id = trim($row [7]);
                $complainant = trim($row [8]) ;
                $age = trim($row [9]) ;
        
                $address_complainant = trim($row [10]) ;
                $complained_name = trim($row [11]) ;
                $add_complained_name = trim($row [12]) ;
        
                $details_reason = trim($row [13]) ;
                $type = trim($row [14]) ;


               
				mysqli_query($conn, "INSERT INTO barangay_blotter VALUES('$subject', '$cell_no', '$place', '$tanod' , '$date' , '$time' , '$status' , '' , '$complainant' , '$age' , '$address_complainant' , '$complained_name' , '$add_complained_name' , '$details_reason' , '$type' )");
			}

			echo
			"
			<script>
			alert('Succesfully Imported');
			document.location.href = '/BIS/administrator/admin_panel/blotter.php';
			</script>
			";
		}
		?>
</body>
</html>