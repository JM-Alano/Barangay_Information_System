<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
        <?php
            require("../../../database/conn_db.php");

            
            
            if(isset($_POST['input'])){
                
               
                $input = $_POST['input']; 

                $query = "SELECT * FROM barangay_revenue WHERE OR_no LIKE '{$input}%' OR firstname LIKE '{$input}%' OR middlename LIKE '{$input}%' OR lastname LIKE '{$input}%' OR document_type LIKE '{$input}%' OR date_issue LIKE '{$input}%' OR expired_date LIKE '{$input}%' OR document_amount LIKE '{$input}%' ";

                
                $result = mysqli_query($conn,$query);

                if ($result->num_rows > 0) {?>


                    
                <table >
    <caption>Income List</caption>
  
    <tr>
        <th>Fullname</th>
        <th>Document Type</th>
        <th>Date</th>
        <th>Amount</th>
        <th>Control No.</th>
        <th>Generate To</th>
    </tr>
    
    <?php
        $total_amount = 0; // Initialize total amount
        
        while($row = $result->fetch_assoc()) {
            $OR_no = $row['OR_no'];
            $firstname = $row["firstname"];
            $lastname = $row["lastname"];
            $middlename = $row["middlename"];
            $amount = $row["document_amount"];
            $request_document = $row["document_type"];
            $date_issue = $row["date_issue"];

        

            date_default_timezone_set("Asia/Manila");
            $date_issue = date("Y-m-d");

            $total_amount += $amount; // Accumulate the amount
    ?>
        <tr class="table_hover">
            <td><?php echo $firstname . " " . $middlename . " " . $lastname; ?></td>
            <td><?php echo $request_document; ?></td>
            <td><?php echo date('m/d/Y', strtotime($date_issue)); ?></td>
            <td><?php echo "₱" . number_format($amount, 2); ?></td>
            <td><?php echo $OR_no . "-" . date("Y"); ?></td>
            <td>
                <button class="dropdown-btns">Action<i class="arrow down"></i></button>
                <ul class="dropdown-contents">
                    <li>
                        <p hidden><?php echo $amount;  ?></p>
                        
                        <p hidden><?php echo $OR_no ?></p>
                        <button id="barangay_cert" class="edit_revenue" data-id="<?php echo $row["OR_no"]; ?>">Edit</button>
                    </li>
                    <li><button id="delete_official_btn" class="delete_btn_revenue" data-id="<?php echo $row["OR_no"]; ?>">Delete</button></li>
                 
                </ul>
            </td>
        </tr>
    <?php } ?>  
    
            <!-- Footer row -->
            <tfoot style = "background-color:rgba(4, 129, 12, 0.65); color:rgba(255, 251, 199, 0.75);">
                <tr >
                    <td colspan="0" style="text-align: right; ">Total Amount :</td>
                    <td></td>
                    <td></td>
                    <td  colspan="0" style="font-weight: bold;">₱<?php echo number_format($total_amount, 2); ?></td>
                    <td></td>
                    <td></td>
                </tr>
            </tfoot>
</table>

                                    
       

                    
                    <?php
                    } else {
                        ?>
                            <style>
                                    .Data-not-found h1{
                                        color:rgba(255, 0, 0, 0.37);
                                        position:absolute;
                                        top:300px;
                                        left:25%;
                                        font-size:3.5rem;
                                    }
                            </style>
                            <div class = "Data-not-found">
                                <h1>DATA NOT FOUND</h1>
                            </div>

                        <?php
                       
                    }
                }
                    // -- close connection 
                    mysqli_close($conn);
                    ?>          
        
                     <!-- MODAL DELETE -->
             <div id = "delete-modals" class = "delete-modals">
                <div class = "delete-modal-contents">
                    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c13.3 0 24 10.7 24 24l0 112c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-112c0-13.3 10.7-24 24-24zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg></span>
                    <h2>Delete Confirmation</h2>
                    <h3>Are you sure you want to delete this record!</h3>
                    <div class = "div-delete">   
                    <button id = "confirm-deletes" class = "btn-deletes">Delete</button>
                    <button id = "cancel-deletes" class = "btn-deletes">Cancel</button>
                    </div>
                </div>
             </div>

              <!-- MODAL UPDATE -->
            <div id = "edit-modals" class = "edit-modals">
                    <div class = "edit-modal-contents">
                    <span onclick="this.parentElement.parentElement.style.display='none';" class = "update-close-btn">&times;</span>
                        <?php include("update_temp.php");?>
                    </div>
               </div>


        
        </body>
        </html>