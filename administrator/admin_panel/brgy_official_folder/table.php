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

            $sql = "SELECT fullname,chairmanship,position,term_start,term_end,status FROM barangay_official LIMIT 10";
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




            }
            ?>


</body>
</html>