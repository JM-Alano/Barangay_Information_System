<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/BIS/administrator/admin_panel/certificate_folder/table.css">
</head>
<body>
<?php require("../../../database/conn_db.php");
                
                $sql = "SELECT * FROM barangay_manage ORDER BY OR_no DESC";
                $result = $conn->query($sql);
    
                $result->num_rows > 0;
    
                if ($result->num_rows > 0) {?>
           
                <table>
                        <caption>Manage Certificate List</caption>
                        <tr>
                            <th>Fullname</th>
                            <th>Trasaction type</th>
                            <th>Date Issued</th>
                            <th>Date Expired</th>
                            <th>Control #</th>
                            <th>Status</th>
                            <th>Tools:</th>
                            
                        </tr>
                        <?php
                             while($row = $result->fetch_assoc()) {
                                $id = $row['id'];
                                $firstname = $row["firstname"];
                                $lastname = $row["lastname"];
                                $middlename = $row["middlename"];

                                $age = $row["age"];
                                $request_document = $row["request_document"];
                                $address = $row["address"];

                                $birthday = $row["birthday"];
                                $place_of_birth = $row["place_of_birth"];
                                $contact_no = $row["contact_no"];

                                $contact_person = $row["contact_person"];
                                $contact_no_contact_person = $row["contact_no_contact_person"];
                                $live_since_year = $row["live_since_year"];

                                $purpose = $row["purpose"];
                                $status = $row["status"];
                                $request_document = $row["request_document"];

                                $date_issue = $row["date_issue"];

                                $expired_date = $row["expired_date"];

                                $OR_no = $row["OR_no"];
                                ?>
                                 <tr class = "table_hover">
                                    <td><?php echo $firstname ." ". $middlename ." ". $lastname; ?></td>
                                    <td><?php echo $request_document; ?></td>
                                    <td><?php echo date('m/d/Y',strtotime($date_issue)); ?></td>
                                    <td><?php echo date('m/d/Y',strtotime($expired_date)); ?></td>
                                    <td><?php echo $OR_no ."-". date("Y")?></td>
                                    <td  style = 'color:blue;'><?php
                                        
                                        if($status == 0){
                                          echo "<p style = 'color:red;'>Decline</p>";
                                        }elseif($status == 1){
                                            echo "<p style = 'color:orange;'>Pending</p>";
                                        }
                                        elseif($status == 2){
                                            echo "<p style = 'color:rgb(0, 183, 255);'>Processing</p>";
                                        }
                                        elseif($status == 3){
                                            echo "<p style = 'color:green'>Completed</p>";
                                        }
                                    
                                    ?></td>
                                
                                    <td>
                                        
                                    <button class="dropdown-btns">Action<i class="arrow down"></i></button>
                                    <ul class="dropdown-contents">
                                        <li>
                                            <p hidden><?php echo $date_issue?></p>
                                            <p hidden><?php echo $firstname?></p>
                                            <p hidden><?php echo $lastname?></p>
                                            <p hidden><?php echo $middlename?></p>
                                            <p hidden><?php echo $request_document?></p>
                                            <p hidden><?php echo $OR_no?></p>
                                            <p hidden><?php echo $status?></p>
                                            
                                            <button  id = "barangay_print" class = "print_btn" data-id= <?php echo $row ["id"] ?> >PRINT</button>
                                        </li>
                                        <li><button id = "barangay_indigency" class = "indigency_btn" data-id= <?php echo $row ["id"] ?>>Add List</button></li>
                                        <li><button id = "barangay_ID" class = "ID_btn" data-id= <?php echo $row ["id"] ?>>Edit List</button></li>
                                       <li><button id = "delete_official_btn" class = "delete_btn" data-id= <?php echo $row ["id"] ?>>Delete List</button></li>
                                    </ul>
                                   
                                     <!-- MODAL DELETE -->
                                       
                                    </td>
                                  
                                        
                                    
                                                                    
                                </tr>
                               
                                <?php
                            
                            }
                            
                        
                        ?>
                   
                    
                </table>
            
            
                <?php
                }   
                // -- close connection 
                mysqli_close($conn);
                ?>
           <!-- print CERT -->
           <div id = "print-modal" class = "print-modal">
                    <div class = "print-modal-content">
                    <span onclick="this.parentElement.parentElement.style.display='none';" class = "print-close-btn">&times;</span>
                        <?php include("create_payment.php");?>
                        
                    </div>
          </div>





</body>
</html>