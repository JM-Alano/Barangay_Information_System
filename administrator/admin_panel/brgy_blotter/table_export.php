<?php  require("../../../database/conn_db.php"); ?>
<table border = 1>
<caption><h1>Barangay Blotter list</h1></caption>
                <tr>
                     <th>subject</th>
                     <th>cell_no</th>
                     <th>place</th>
                     <th>tanod</th>

                     <th>date</th>
                     <th>time</th>
                     <th>status</th>

                     <th>id</th>
                     <th>complainant</th>
                     <th>age</th>

                     <th>address_complainant</th>
                     <th>complained_name</th>
                

                     <th>add_complained_nam</th>
                     <th>details_reason</th>
                     <th>type</th>
                        
                 </tr>
  <?php
  $i = 1;
  $rows = mysqli_query($conn, "SELECT * FROM barangay_blotter");

  foreach($rows as $row) :
    $id = $row ["id"];
    $subject = $row ["subject"];
    $cell_no = $row ["cell_no"];
    $place = $row ["place"];

    $tanod = $row ["tanod"];
    $date = $row ["date"];
    $time = $row ["time"];

    $status = $row ["status"];
    $type = $row ["type"];
    $complainant = $row ["complainant"];
    $age = $row ["age"];

    $address_complainant = $row ["address_complainant"];
    $complained_name = $row ["complained_name"];
    $add_complained_name = $row ["add_complained_name"];

    $details_reason = $row ["details_reason"];
   
  ?>
  <tr>
                                <td> <?php echo $subject; ?></td>
                                <td> <?php echo  $cell_no  ; ?></td>
                                <td><?php echo $place;  ?></td>
                                <td><?php echo $tanod; ?></td>

                                <td><?php echo $date; ?></td>
                                <td><?php echo $time; ?></td>
                                <td><?php echo  $status; ?></td>

                                <td><?php echo $id; ?></td>
                                <td><?php echo $complainant; ?></td>
                                <td><?php echo $age; ?></td>

                                <td><?php echo $address_complainant; ?></td>
                                <td><?php echo $complained_name; ?></td>

                                <td><?php echo $add_complained_name; ?></td>
                                <td><?php echo $details_reason; ?></td>
                                <td><?php echo $type; ?></td>
  </tr>
  <?php endforeach; ?>
</table>
