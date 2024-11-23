<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/BIS/administrator/admin_panel/certificate_folder/request.css">
</head>
<body>
        <?php require("../../../database/conn_db.php");
                
                $sql = "SELECT * FROM barangay_request ORDER BY id DESC LIMIT 10";
                $result = $conn->query($sql);
    
                $result->num_rows > 0;
    
                if ($result->num_rows > 0) {?>
           
                <table>
                        <caption>Requested Certificate List</caption>
                        <tr>
                            <th>Fullname</th>
                            <th>Gender</th>
                            <th>Contact Number</th>
                            <th>Purpose</th>
                            <th>Document Requested</th>
                            <th>Status</th>
                            <th>Generate To:</th>
                            
                        </tr>
                        <?php
                             while($row = $result->fetch_assoc()) {
                                $id = $row['id'];
                                $firstname = $row["firstname"];
                                $lastname = $row["lastname"];
                                $middlename = $row["middlename"];
                                $purpose = $row["purpose"];
                                $gender = $row["gender"];
                                $contact_no = $row["contact_no"];
                                $address = $row["request_document"];
                                $status = $row["status"];
                                ?>
                                 <tr class = "table_hover">
                                    <td><?php echo $firstname ." ". $middlename ." ". $lastname; ?></td>
                                    <td><?php echo $gender; ?></td>
                                    <td><?php echo $contact_no; ?></td>
                                    <td><?php echo $purpose; ?></td>
                                    <td><?php echo $address; ?></td>
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
                                        <li><button>Barangay Certificate</button></li>
                                        <li><button>Barangay Clearance</button></li>
                                        <li><button>Barangay Indigency</button></li>
                                        <li><button>Barangay ID</button></li>
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
                                
                 <div id = "delete-modal" class = "delete-modal">
                          <div class = "delete-modal-content">
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c13.3 0 24 10.7 24 24l0 112c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-112c0-13.3 10.7-24 24-24zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg></span>
                                        <h2>Delete Confirmation</h2>
                                            <h3>Are you sure you want to delete this record!</h3>
                                            <div class = "div-delete">   
                                            <button id = "confirm-delete" class = "btn-delete">Delete</button>
                                            <button id = "cancel-delete" class = "btn-delete">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
               
</body>
                               
</html>