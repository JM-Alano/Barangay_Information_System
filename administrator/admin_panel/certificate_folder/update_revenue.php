


<?php

    require("../../../database/conn_db.php");

  if(isset($_POST['sub_upd_revenue'])){
        
        $id = trim($_POST["id_upd_revenue"]);
        
        $firstname = trim($_POST["firstname_upd_revenue"]);
        $middlename = trim($_POST["middlename_upd_revenue"]);
        $lastname = trim($_POST["lastname_upd_revenue"]);

        $amount = trim($_POST["amount_revenue"]);
        $doc_type = trim($_POST["request_document_upd_revenue"]);
        $status = trim($_POST["status_upd_revenue"]);
        $data_issue = trim($_POST["date_issue_upd_revenue"]);

        $OR_num = trim($_POST["OR_no_upd_revenue"]);

        
        
    
        $sql= "UPDATE barangay_revenue SET firstname='$firstname' , middlename='$middlename', lastname='$lastname' , document_amount='$amount' , document_type='$doc_type', status='$status', date_issue='$data_issue' WHERE ID_incre=$id ";
        
      
                
                if (mysqli_query($conn, $sql)) {

                    ?>
                    <script>
                        window.location.href = "/BIS/administrator/admin_panel/certificate_folder/loading_update.php";
                    </script>
                    
                    <?php
                   



                    
                  } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                  }
                  
                  mysqli_close($conn);
      
     }
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
            #OR_no_upd_revenue,#firstname_upd_revenue,#middlename_upd_revenue,#lastname_upd_revenue,#amount_upd_revenue,#request_document_upd_revenue,#status_upd_revenue,#date_issue_upd_revenue{
                width: 100%;
                height:30px;
                padding :0px 0px 0px 10px;
                margin-top:10px;
                margin-bottom:10px;
                border:none;
                color: #005720;
                border-radius:4px;
            }
            label{
                color: #005720;
                font-size:1.1rem;
                font-family: "sub_text";
                font-weight:700;
            }
            input:focus,select:focus{
                outline:3px solid #4A9D4f;
            }

            .action_submit {
            margin-top: 20px;
            display: flex;
            justify-content: space-evenly;
            }
            #submit_revenue,#cancel_revenue{
            padding: 15px;
            margin-right:20px;
            margin-top:20px;
            margin-bottom:20px;
            cursor:pointer;
            border:none;
            border-radius:2px;
            color:white;
            width: 100px;
            margin-top: 40px;
            }
            #submit_revenue{
            background-color:#4A9D4f;
            }
            #submit_revenue:focus{
                outline:none;
            }
            #submit_revenue:hover{
            background-color:#3cca46;
            }
            #cancel_revenue{
            background-color:red;
            }
            #cancel_revenue:focus{
                outline:none;
            }
            #cancel_revenue:hover{
            background-color:rgb(255, 113, 113);
            }

        </style>
</head>
<body>
   

    <form action="certificate_folder/update_revenue.php" class = "form_manage" method = "POST">
    <h1>Edit Revenue List</h1>

    <label for="">OR no.</label><br>
    <input type="text" name = "OR_no_upd_revenue" id = "OR_no_upd_revenue" readonly ><br>
    <input type="hidden" name = "id_upd_revenue" id = "id_upd_revenue">
    <label for="">Firstname</label><br>
    <input type="text" name = "firstname_upd_revenue" id = "firstname_upd_revenue" required><br>
    <label for="">Middlename</label><br>
    <input type="text" name = "middlename_upd_revenue" id = "middlename_upd_revenue" required><br>
    <label for="">Lastname</label><br>
    <input type="text" name = "lastname_upd_revenue" id = "lastname_upd_revenue" required><br>
    <label for="">Amount</label><br>
    <input type="number" name = "amount_revenue" min = "0" id = "amount_upd_revenue" step="0.00001" required><br>
    
    
    <label for="">Document Type</label><br>
                <select id="request_document_upd_revenue" name = "request_document_upd_revenue" required> 
                    <option value="Barangay Certificate">Barangay Certificate</option>
                    <option value="Barangay Clearance">Barangay Clearance</option>
                    <option value="Barangay Indigency">Barangay Indigency</option>
                    <option value="Barangay ID">Barangay ID</option>
                </select><br>
    
    <label for="">Status</label><br>
            <select id="status_upd_revenue" name = "status_upd_revenue" required>
                <option value=0>Decline</option>
                <option value=1>Pending</option>
                <option value=2>Processing</option>
                <option value=3>Completed</option>
            </select><br>
    <label for="">Date Issue</label><br>
    <input type="date" id = "date_issue_upd_revenue" name = "date_issue_upd_revenue" required><br>
  
       

    <div class = "action_submit">
            <input type="submit" id = "submit_revenue" name = "sub_upd_revenue">
            <input type="reset" id = "cancel_revenue" name = "cancel_upd_revenue">
    </div>



    </form>
</body>
</html>



