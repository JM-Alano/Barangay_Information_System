<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator Account</title>
    <link rel = "stylesheet" href = "/BIS/administrator/admin_panel/admin_folder/admin_style.css">
</head>
<body>
            <header class = "admin_header">
            <div>
                <h1>Administrator Management</h1>
            
            </div>
                <h4>Manage Other Account<span><a href="../dashboard.php">Back to Dashboard</a></span></h4>
               
        </header>
            <div class = "main_content">
                    <!-- ADD BUTTON -->
                    <button id = "add_account">+Account</button>
            </div>

            <?php require("../../../database/conn_db.php");
             
       
            $sql = "SELECT * FROM admin_account ORDER BY user_id ASC" ;
            $result = $conn->query($sql);

            $result->num_rows > 0;

            if ($result->num_rows > 0) {?>

            <table>
                    <caption>Administrators Account List</caption>
                    <tr>
                        <th>Profile</th>
                        <th>Fullname</th>
                        <th>User Type</th>
                        <th>Admin ID</th>
                        <th>Username</th>
                        <th>Gender</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <?php
                         while($row = $result->fetch_assoc()) {

                            $id = $row["user_id"];
                            $firstname = $row["firstname"];
                            $middlename = $row["middlename"];
                            $lastname = $row["lastname"];

                             $user_type = $row["user_type"];
                             $gender = $row["gender"];
                             $status = $row["status"];
                             $age = $row["age"];
                             $date_created = $row["date_created"];
                             $username = $row["username"];
                            $email = $row["email"];
                             $admin_profile = $row["admin_profile"];
                            $password = $row["password"];

                         


                            ?>
                             <tr class = "table_hover">
                                
                                <td hidden> <?php  echo $firstname;?></td>
                                <td hidden> <?php  echo $middlename; ?></td>
                                <td hidden> <?php  echo $lastname; ?></td>
                                <td hidden><?php  echo  $age; ?></td>
                                <td hidden><?php  echo  $date_created; ?></td>
                                <td hidden><?php  echo  $gender; ?></td>
                                <td hidden><?php  echo   $user_type; ?></td>
                                <td hidden><?php  echo   $status; ?></td>
                                <td hidden><?php  echo   $email; ?></td>
                                <td hidden><?php  echo   $username; ?></td>
                                <td hidden><?php  echo  $password; ?></td>
                                <td hidden><?php  echo "../../../asset/image/admin/".$admin_profile; ?></td>



                                <td class = "img"><img src="../../../asset/image/admin/<?php echo $admin_profile; ?>" alt="" width = 500/></td>
                                <td> <?php echo $firstname ." ".  $middlename ." ". $lastname ; ?></td>
                                <td><?php echo $user_type ?></td>
                                <td><?php echo  $id ?></td>
                                <td><?php echo   $username ?></td>
                                <td><?php echo   $gender ?></td>
                                <td><?php 
                                
                                $status;
                                
                                if ($status == 1){
                                    echo "<p style = 'color: blue;'>Active</p>";
                                }else if ($status == 0){
                                    echo "<p style = 'color: red;'>Inactive</p>";
                                }

                                    
                            
                            
                                ?>
                                </td>
                                <td>

                                



                                     <div id = "admin_manage_btn">
                                        
                                        
                                     
                                       
                                        <button  id = "update_official_btn" class = "update_btn" data-id= <?php echo $id ?>><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160L0 416c0 53 43 96 96 96l256 0c53 0 96-43 96-96l0-96c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 96c0 17.7-14.3 32-32 32L96 448c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l96 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 64z"/></svg></button>
                                        <button id = "delete_official_btn" class = "delete_btn" data-id= <?php echo $id ?>><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M135.2 17.7L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-7.2-14.3C307.4 6.8 296.3 0 284.2 0L163.8 0c-12.1 0-23.2 6.8-28.6 17.7zM416 128L32 128 53.2 467c1.6 25.3 22.6 45 47.9 45l245.8 0c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></button>
                                    </div>
                                   
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
    



              <!-- ADD FORM modal-->
              <div id="modal_add_admin" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                    <span class="close">&times;</span>
                        <?php include ("add_admin.php") ;?>
                    </div>
            </div>



              <!-- MODAL DELETE -->
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

              <!-- MODAL UPDATE -->
            <div id = "edit-modal" class = "edit-modal">
                    <div class = "edit-modal-content">
                    <span onclick="this.parentElement.parentElement.style.display='none';" class = "update-close-btn">&times;</span>
                        <?php include("update_admin.php");?>
                    </div>
               </div>
         
           
          <!-- ADD ACCOUNT ADMIN  -->
          <script src = "/BIS/administrator/admin_panel/admin_folder/btn_function.js"></script>

           <!-- DELETE ACCOUNT BTN ADMIN  -->
           <script src = "/BIS/administrator/admin_panel/admin_folder/delete_btn.js"></script>

             <!-- UPDATE ACCOUNT BTN ADMIN  -->
               <script src = "/BIS/administrator/admin_panel/admin_folder/update_btn.js"></script>
</body>
</html>