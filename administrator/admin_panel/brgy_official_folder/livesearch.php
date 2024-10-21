<?php
    require("../../../database/conn_db.php");
    
    if(isset($_POST['input'])){
        

        $input = $_POST['input']; 

        $query = "SELECT * FROM barangay_official WHERE fullname LIKE '{$input}%' OR id LIKE '{$input}%' OR id LIKE '{$input}%' OR chairmanship LIKE '{$input}%' OR position LIKE '{$input}%' OR term_start LIKE '{$input}%' OR term_end LIKE '{$input}%' ";

        
        $result = mysqli_query($conn,$query);

        if (mysqli_num_rows($result) > 0 ){?>
        
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
                                <td><?php 
                                 if ($status == 1){
                                    echo "<p style = 'color:blue;'>ACTIVE</p>";
                                }else {
                                    echo "<p style = 'color:red;'>INACTIVE</p>";
                                };
                                ?></td>
                                <td>
                                <button type = 'submit' id = 'update_btn' name = 'update_btn_official'>Update</button>|<button type = 'submit' id = 'delete_btn'>Delete</button>
                                </td>
                            </tr>
                           
                            <?php
                         }
                    
                    ?>
                
            </table>
        
        <?php
            
    }else{
        ?>
        <style>
            .div_data_not_found{
                position:absolute;
                margin-top:20%;
                margin-left:25%;
                font-size:1.7rem;
                font-family:san-serif;
                color:rgba(255, 0, 0, 0.192);
            }

        </style>
        <div class = "div_data_not_found"><h1>DATA NOT FOUND</h1></div>
        
        <?php  
    }
}

?>