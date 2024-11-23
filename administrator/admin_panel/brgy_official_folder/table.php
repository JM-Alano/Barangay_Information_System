 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Table</title>
   
</head>
<body>
                        
        

            <?php require("../../database/conn_db.php");
                
            $sql = "SELECT * FROM barangay_official LIMIT 5";
            $result = $conn->query($sql);

            $result->num_rows > 0;

            if ($result->num_rows > 0) {?>

            <table>
                    <caption>Barangay Official List</caption>
                    <tr>
                        <th>Fullname</th>
                        <th>Chairman</th>
                        <th>Position</th>
                        <th>Term_start</th>
                        <th>Term_end</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <?php
                         while($row = $result->fetch_assoc()) {
                            $id = $row['id'];
                            $fullname = $row["fullname"];
                            $chairman = $row["chairmanship"];
                            $position = $row["position"];
                            $term_start = $row["term_start"];
                            $term_end = $row["term_end"];
                            $status = $row["status"];


                            ?>
                             <tr class = "table_hover">
                                <td><?php echo $fullname; ?></td>
                                <td><?php echo $chairman; ?></td>
                                <td><?php echo $position; ?></td>
                                <td><?php echo $term_start; ?></td>
                                <td><?php echo $term_end; ?></td>
                                <td  style = 'color:blue;'><?php
                                    
                                    if($status == 1){
                                      echo "<p style = 'color:blue;'>Active</p>";
                                    }else{
                                        echo "<p style = 'color:red;'>Incative</p>";
                                    }
                                
                                ?></td>
                            
                                <td>
                                    <div id = "form_up_del_official">
                                      
                                        <button  id = "update_official_btn" class = "update_btn" data-id= <?php echo $row ["id"] ?>>Edit</button>
                                        <button id = "delete_official_btn" class = "delete_btn" data-id= <?php echo $row ["id"] ?>>Del</button>
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