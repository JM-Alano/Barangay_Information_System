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

                $query = "SELECT * FROM barangay_resident WHERE firstname LIKE '{$input}%' OR middlename LIKE '{$input}%' OR lastname LIKE '{$input}%' OR id_type LIKE '{$input}%' OR age LIKE '{$input}%' OR civil_status LIKE '{$input}%' OR gender LIKE '{$input}%' OR voter_status LIKE '{$input}%' ";

                
                $result = mysqli_query($conn,$query);

                if ($result->num_rows > 0) {?>

                    <table>
                            <caption>Barangay Official List</caption>
                            <tr>
                                <th>Fullname</th>
                                <th>National ID</th>
                                <th>Age</th>
                                <th>Civil Status</th>
                                <th>Gender</th>
                                <th>Voter Status</th>
                                <th>Action</th>
                            </tr>
                            <?php
                                 while($row = $result->fetch_assoc()) {
                                    $firstname = $row["firstname"];
                                    $middlename = $row["middlename"];
                                    $lastname = $row["lastname"];
                                    $id_type = $row["id_type"];
                                    $gender = $row["gender"];
                                    $age = $row["age"];
                                    $civil_status = $row["civil_status"];
                                    $voter_status = $row["voter_status"];
                                   
        
        
                                    ?>
                                     <tr class = "table_hover">
                                     <td><?php echo $firstname ." ".  $middlename ." ". $lastname ; ?></td>
                                    <td><?php echo $id_type; ?></td>
                                    <td><?php echo $age; ?></td>
                                    <td><?php echo $civil_status; ?></td>
                                    <td><?php echo $gender; ?></td>
                                    <td><?php echo $voter_status; ?></td>
                                    
                                        <td>
                                        <div id = "form_up_del_official">
                                        <button  id = "update_official_btn" class = "update_btn" data-id= <?php echo $row ["id"] ?>>view</button>
                                        <button  id = "update_official_btn" class = "update_btn" data-id= <?php echo $row ["id"] ?>>edit</button>
                                        <button id = "delete_official_btn" class = "delete_btn" data-id= <?php echo $row ["id"] ?>>del </button>
                                    </div>
                                    
                                            
                                        </td>
                                    </tr>
                                    
                                    <?php
                                
                                }
                            
                            
                            ?>
                       
                        
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
                  
                       <!-- AJAX SCRIPT FOR DELETE BUTTON -->
                    <script src = "/BIS/administrator/admin_panel/brgy_official_folder/delete_modal_button.js"></script>
        
                    <!-- MODAL UPDATE -->
                    <div id = "edit-modal" class = "edit-modal">
                            <div class = "edit-modal-content">
                            <span onclick="this.parentElement.parentElement.style.display='none';" class = "update-close-btn">&times;</span>
                                <?php include("update_temp.php");?>
                            </div>
                       </div>
                    <!-- UPDATE MODAL FUNCTION JS -->
                    <script src = "/BIS/administrator/admin_panel/brgy_official_folder/update_modal_button.js"></script>
        </body>
        </html>