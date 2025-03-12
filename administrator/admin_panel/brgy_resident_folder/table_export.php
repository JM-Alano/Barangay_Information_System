<?php  require("../../../database/conn_db.php"); ?>
<table border = 1>
  <?php
  $i = 1;
  $rows = mysqli_query($conn, "SELECT * FROM barangay_resident");

  foreach($rows as $row) :
    $firstname = $row["firstname"];
    $middlename = $row["middlename"];
    $lastname = $row["lastname"];
  
  
    $place_of_birthday = $row["place_of_birth"];
    $birthday = $row["birthday"];
  
    $age = $row["age"];
    $civil_status = $row["civil_status"];
    $gender = $row["gender"];
  
    $voter_status = $row["voter_status"];
    $email =$row["email"];
    $contact_no =$row["contact_no"];
  
    $citizenship =$row["citizenship"];
    $house_no =$row["house_no"];
   
  
   
    $occupation = $row["occupation"];
   
    $sitio_pook =$row["sitio_pook"];
  
    $id = $row["id"];
  ?>
  <tr>
                                <td> <?php echo $id ?></td>
                                <td> <?php echo $firstname ." ".  $middlename ." ". $lastname ; ?></td>
                                <td><?php echo $house_no  ?></td>
                                <td><?php echo $place_of_birthday; ?></td>

                                <td><?php echo $birthday; ?></td>
                                <td><?php echo $age; ?></td>
                                <td><?php echo  $civil_status; ?></td>

                                <td><?php echo $gender; ?></td>
                                <td><?php echo $voter_status; ?></td>
                                <td><?php echo $email; ?></td>

                                <td><?php echo $contact_no; ?></td>
                                <td><?php echo $occupation; ?></td>

                                <td><?php echo $citizenship; ?></td>
                                <td><?php echo $sitio_pook; ?></td>

  </tr>
  <?php endforeach; ?>
</table>
