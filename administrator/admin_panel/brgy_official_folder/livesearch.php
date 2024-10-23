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
                                    <div id = "form_up_del_official">
                                        <form action="#" method = "get" >
                                            <input type="submit" value = Update name = "update" id = "update_official_btn">
                                        </form>|
                                        <form action="#" method = "get">
                                            <input type="submit" value = Delete name = "delete" id = "delete_official_btn">
                                        </form>
                                    </div>
                                    
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
            #div_data_not_found{
                position:absolute;
                margin-top:20%;
                margin-left:30%;
                font-size:3rem;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                color:rgba(255, 10, 10, 0.39);
            }

        </style>
        <div id = "div_data_not_found">DATA NOT FOUND</div>
        
        <?php  
    }
}

?>