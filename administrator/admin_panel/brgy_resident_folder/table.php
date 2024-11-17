 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Table</title>
    <link rel = "stylesheet" href = "table_style.css" />
</head>
<body>
                        
        

            <?php require("../../database/conn_db.php");

            $sql = "SELECT * FROM barangay_resident LIMIT 10";
            $result = $conn->query($sql);

            $result->num_rows > 0;

            if ($result->num_rows > 0) {?>

            <table>
                    <caption>Barangay Resident list</caption>
                    <tr>
                        <th>Profile</th>
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

                            $alias = $row["alias"];
                            $place_of_birthday = $row["place_of_birth"];
                            $birthday = $row["birthday"];

                            $age = $row["age"];
                            $civil_status = $row["civil_status"];
                            $gender = $row["gender"];

                            $voter_status = $row["voter_status"];
                            $email =$row["email"];
                            $contact_no =$row["contact_no"];

                            $citizenship =$row["citizenship"];
                            $address =$row["address"];
                            $id_type = $row["id_type"];

                            $id_type_no = $row["id_type_no"];
                            $precinct_no = $row["precinct_no"];
                            $occupation = $row["occupation"];
                           

                            $image = $row["image"];
                            $id = $row["id"];

                            ?>
                             <tr class = "table_hover">
                                <td class = "img"><img src="../../asset/image/resident_profile/<?php echo $image; ?>" alt="" width = 500/></td>
                                <td> <?php echo $firstname ." ".  $middlename ." ". $lastname ; ?></td>
                                <td><?php echo $id_type; ?></td>
                                <td><?php echo $age; ?></td>
                                <td><?php echo $civil_status; ?></td>
                                <td><?php echo $gender; ?></td>
                                <td><?php echo $voter_status; ?></td>
                                
                                <td hidden><?php echo $address; ?></td>
                                <td hidden><?php echo $firstname; ?></td>
                                <td hidden><?php echo $middlename; ?></td>
                                <td hidden><?php echo $lastname; ?></td>
                                <td hidden><?php echo $alias; ?></td>
                                <td hidden><?php echo $place_of_birthday; ?></td>
                                <td hidden><?php echo $birthday; ?></td>
                                <td hidden><?php echo $email; ?></td>
                                <td hidden><?php echo $contact_no; ?></td>
                                <td hidden><?php echo $citizenship; ?></td>
                                <td hidden><?php echo $occupation; ?></td>
                                <td hidden><?php echo $id_type_no; ?></td>

                                <td hidden><?php echo "../../asset/image/resident_profile/" . $image;  ?></td>

                                <td>
                                
                                   

                              
                                 
                             


                                    <div id = "form_up_del_official">
                                        <form action="/BIS/administrator/admin_panel/brgy_resident_folder/view.php" method = "post">
                                            <input type="submit" value = view  id = "view_resident_btn" class = "view_btn" name = "view">
                                            <input type="hidden" value = <?php echo $row ["id"] ?> name = "id_view" >
                                        </form>
                                       
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
            <script src = "/BIS/administrator/admin_panel/brgy_resident_folder/delete_modal_button.js"></script>

            <!-- MODAL UPDATE -->
            <div id = "edit-modal" class = "edit-modal">
                    <div class = "edit-modal-content">
                    <span onclick="this.parentElement.parentElement.style.display='none';" class = "update-close-btn">&times;</span>
                        <?php include("update_temp.php");?>
                    </div>
               </div>
          
            <!-- UPDATE MODAL FUNCTION JS -->
            <script src = "/BIS/administrator/admin_panel/brgy_resident_folder/update_modal_button.js"></script>\

               
               <script src = "/BIS/administrator/admin_panel/brgy_resident_folder/view_model.js"></script>
</body>
</html>