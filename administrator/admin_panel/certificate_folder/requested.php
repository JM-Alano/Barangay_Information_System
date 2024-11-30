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
                                $gender = $row["gender"];
                                

                                $date_issue = date("Y-m-d");


                                $exp_date = strtotime("+12 Months");
                               
                                ?>
                                 <tr class = "table_hover">
                                    <td><?php echo $firstname ." ". $middlename ." ". $lastname; ?></td>
                                    <td><?php echo $gender; ?></td>
                                    <td><?php echo $contact_no; ?></td>
                                    <td><?php echo $purpose; ?></td>
                                    <td><?php echo $request_document; ?></td>
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
                                        
                                        <p hidden><?php echo  $firstname ?></p>   
                                        <p hidden><?php echo  $middlename ?></p>
                                        <p hidden><?php echo  $lastname ?></p>
                                        <p hidden><?php echo  $age ?></p>    
                                        <p hidden><?php echo  $request_document ?></p>    
                                        <p hidden><?php echo  $address ?></p>   
                                        <p hidden><?php echo  $birthday ?></p>   
                                        <p hidden><?php echo  $place_of_birth ?></p>   
                                        <p hidden><?php echo  $contact_no ?></p>   
                                        <p hidden><?php echo  $contact_person ?></p> 
                                        <p hidden><?php echo  $contact_no_contact_person ?></p> 
                                        <p hidden><?php echo $live_since_year ?></p> 
                                        <p hidden><?php echo $purpose ?></p> 
                                        <p hidden><?php echo $status ?></p> 
                                        <p hidden><?php echo $gender ?></p> 
                                        <p hidden><?php echo  $date_issue ?></p>
                                        <p hidden><?php echo  $exp_date; ?></p>

                                        <button id = "barangay_cert" class = "cert_btn" data-id= <?php echo $row ["id"] ?> >Barangay Certificate</button>

                                        </li>
                                        <li><button  id = "barangay_clear" class = "clear_btn" data-id= <?php echo $row ["id"] ?> >Barangay Clearance</button></li>
                                        <li><button id = "barangay_indigency" class = "indigency_btn" data-id= <?php echo $row ["id"] ?>>Barangay Indigency</button></li>
                                        <li><button id = "barangay_ID" class = "ID_btn" data-id= <?php echo $row ["id"] ?>>Barangay ID</button></li>
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
                <!-- MODAL Delete -->    
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

                <!-- MODAL CERT -->
            <div id = "cert-modal" class = "cert-modal">
                    <div class = "cert-modal-content">
                    <span onclick="this.parentElement.parentElement.style.display='none';" class = "cert-close-btn">&times;</span>
                        <?php include("barangay_cert_temp.php");?>
                        
                    </div>
               </div>


               
                <!-- MODAL CLEARANCE -->
            <div id = "clear-modal" class = "clear-modal">
                    <div class = "clear-modal-content">
                    <span onclick="this.parentElement.parentElement.style.display='none';" class = "clear-close-btn">&times;</span>
                        <?php include("barangay_clear_temp.php");?>
                        
                    </div>
               </div>


                   <!-- MODAL INDIGENCY -->
            <div id = "indigency-modal" class = "indigency-modal">
                    <div class = "indigency-modal-content">
                    <span onclick="this.parentElement.parentElement.style.display='none';" class = "indigency-close-btn">&times;</span>
                        <?php include("barangay_indigency_temp.php");?>
                        
                    </div>
               </div>


                     <!-- MODAL ID -->
            <div id = "ID-modal" class = "ID-modal">
                    <div class = "ID-modal-content">
                    <span onclick="this.parentElement.parentElement.style.display='none';" class = "ID-close-btn">&times;</span>
                        <?php include("barangay_ID_temp.php");?>
                        
                    </div>
               </div>

               
               
</body>
                               
</html>