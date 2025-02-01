<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/BIS/administrator/admin_panel/certificate_folder/t_style.css">
</head>
<body>


               
                     
                     <!-- SEARCH BUTTON -->
                     <input type="text" id = "live_search" placeholder = "SEARCH">
             
            
        <?php require("../../../database/conn_db.php");
                
                $sql = "SELECT DISTINCT * FROM barangay_request WHERE request_document = 'Barangay Certificate' ORDER BY id DESC LIMIT 12";
                $result = $conn->query($sql);
    
                $result->num_rows > 0;
    
                if ($result->num_rows > 0) {?>
           
                <table>
                        <caption>Barangay Certificate Request</caption>
                        <tr>
                            <th>Profile</th>
                            <th>Fullname</th>
                            <th>Gender</th>
                            <th>Contact Number</th>
                            <th>Purpose</th>
                            
                            <th>Date:</th>
                            <th>Status</th>
                          
                            <th>Tools</th>
                            
                        </tr>
                        <?php
                             while($row = $result->fetch_assoc()) {
                                $id = $row['id'];
                                $user_id = $row['user_id'];
                                $firstname = $row["firstname"];
                                $lastname = $row["lastname"];
                                $middlename = $row["middlename"];

                                $age = $row["age"];
                                $request_document = $row["request_document"];
                                $house_no = $row["house_number"];

                                $sitio_pook = $row["sitio_pook"];

                                $birthday = $row["birthday"];
                                $place_of_birth = $row["place_of_birth"];
                                $contact_no = $row["contact_no"];

                                $contact_person = $row["contact_person"];
                                $contact_no_contact_person = $row["contact_no_contact_person"];
                                $live_since_year = $row["live_since_year"];

                                $purpose = $row["purpose"];
                                $status = $row["status"];
                                $gender = $row["gender"];

                                $profile = $row["profile"];
                                $date_request = $row["date_request"];

                                date_default_timezone_set("Asia/Manila");
                                $date_issue = date("Y-m-d");

                                ?>
                                 <tr class = "table_hover">
                                 <td class = "img"><img src="/BIS/asset/image/user_profile/<?php echo $profile; ?>" alt="" width = 500/></td>
                                    <td><?php echo $firstname ." ". $middlename ." ". $lastname; ?></td>
                                    <td><?php echo $gender; ?></td>
                                    <td><?php echo $user_id . $id; ?></td>
                                    <td><?php echo $purpose; ?></td>
                                    
                                    <td><?php echo  date('m/d/Y',strtotime($date_request));?></td>
                                    <td  style = 'color:blue;'>
                                        <?php
                                            $satus_document =  $row['status'] ;

                                            if ($satus_document == 0){
                                                echo "<p style = 'color:#00572060;'>No data</p>";
                                            }
                                            else if ($satus_document == 1){
                                                echo "<p style = 'color:red;'>Pending</p>";
                                            }
                                            else if ($satus_document == 2){
                                                echo "<p style = 'color:orange;'>Processing</p>";
                                            }
                                            else if ($satus_document == 3){
                                                echo "<p style = 'color:blue;'>Ready to Pick-up</p>";


                                            }
                                            else if ($satus_document == 4){
                                                echo "<p style = 'color:#00cc0e;'>Released</p>";
                                            }
                                            else if ($satus_document == 5){
                                                echo "<p style = 'color:red;'>Invalid Purpose</p>";
                                            }
                                        ?>
                                    </td>
                                
                                    <td>
                                        
                                        <button class="dropdown-btns">Action<i class="arrow down"></i></button>
                                        <ul class="dropdown-contents">
                                            <li>
                                               
                                                <p hidden><?php echo $request_document?></p>
                                                <p hidden><?php echo $id?></p>
                                                <p hidden><?php echo $status?></p>
                                                <p hidden><?php echo $purpose?></p>
                                                
                                                <button  id = "barangay_print" class = "print_btn" data-id= <?php echo $row ["user_id"] ?> >PRINT</button>
                                            </li>
                                            <li><button id = "add_list" class = "add_btn_manage" data-id= <?php echo $row ["id"] ?>>Add List</button></li>
                                            <li>
    
                                                <p hidden><?php echo $firstname ?></p>
                                                <p hidden><?php echo $middlename ?></p>
                                                <p hidden><?php echo $lastname ?></p>
    
                                                <p hidden><?php echo  $age ?></p>
                                                <p hidden><?php echo $birthday ?></p>
                                                <p hidden><?php echo $place_of_birth ?></p>
    
                                               
                                                <p hidden><?php echo $gender ?></p>
                                                <p hidden><?php echo $house_no ?></p>
                                                <p hidden><?php echo $sitio_pook ?></p>
                                             
                                               
                                                <p hidden><?php echo  $contact_no ?></p>
                                                <p hidden><?php echo $contact_person ?></p>
                                                <p hidden><?php echo $contact_no_contact_person ?></p>
    
                                                <p hidden><?php echo $request_document ?></p>
                                                <p hidden><?php echo  $date_issue ?></p>
                                                <p hidden><?php echo  $expired_date ?></p>
                                                
                                                <p hidden><?php echo $live_since_year ?></p>
                                                <p hidden><?php echo $status ?></p>
                                                <p hidden><?php echo  $OR_no ?></p>
                                                <p hidden><?php echo $purpose ?></p>
                                                
                                                <button id = "edit_list" class = "edit_btn_manage" data-id= <?php echo $row ["user_id"] ?>>Edit List</button></li>
                                           <li><button id = "delete_official_btn" class = "delete_btn_manage" data-id= <?php echo $row ["user_id"] ?>>Delete List</button></li>
                                        </ul>
                                       
                                  
                                           
                                        </td>
                                  
                                        
                                    
                                                                    
                                </tr>
                               
                                <?php
                            
                            }
                            2
                        
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
                            <?php include("print.php");?>  
                        </div>
            </div>
                    <!-- MODAL UPDATE -->
                    <div id = "edit-modal_manage" class = "edit-modal_manage">
                <div class = "edit-modal-content_manage">
                    <span onclick="this.parentElement.parentElement.style.display='none';" class = "update-close-btn_manage">&times;</span>
                        <?php include("update_manage_list.php");?>
                    </div>
           </div>
        <!-- MODAL ADD -->
        <div id = "add-modal_manage" class = "add-modal_manage">
                <div class = "add-modal-content_manage">
                    <span onclick="this.parentElement.parentElement.style.display='none';" class = "add-close-btn_manage">&times;</span>
                        <?php include("add_manage_list.php");?>
                    </div>
           </div>
               <!-- MODAL Delete -->    
              <div id = "delete-modal_manage" class = "delete-modal_manage">
                          <div class = "delete-modal-content_manage">
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c13.3 0 24 10.7 24 24l0 112c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-112c0-13.3 10.7-24 24-24zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg></span>
                                        <h2>Delete Confirmation</h2>
                                            <h3>Are you sure you want to delete this record!</h3>
                                            <div class = "div-delete">   
                                            <button id = "confirm-delete_manage" class = "btn-delete_manage">Delete</button>
                                            <button id = "cancel-delete_manage" class = "btn-delete_manage">Cancel</button>
                                            </div>
                                        </div>
             </div>

        


               
    

     

               
               
</body>
                               
</html>