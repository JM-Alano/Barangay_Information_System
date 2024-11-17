<?php
        require("../../../database/conn_db.php");
        // Get ID from AJAX request

        if (isset($_POST['view'])){

            $id = trim($_POST["id_view"]);
           

            $sql = "SELECT * FROM barangay_resident WHERE id = '$id'";


           
            $result = mysqli_query($conn, $sql);
      
            $row = mysqli_fetch_assoc($result);
            $birthday = $row['birthday'];
                  ?>
        
                  <!DOCTYPE html>
                  <html lang="en">
                  <head>
                      <meta charset="UTF-8">
                      <meta name="viewport" content="width=device-width, initial-scale=1.0">
                      <title>Document</title>
                      <link rel = "stylesheet"  href = "/BIS/administrator/admin_panel/brgy_resident_folder/view_resident.css"/>
                    
                  </head>
                  <body>

                  <header class = "header-div">
                    <h1>Generate Resident Profile</h1>
                  </header>
                      
                    
                    <main class = "main-div">
                        <div class = "div-main-1">
                            <h2>Resident Profile</h2>
                        </div><hr>
                        <div class = "heading">
                            <h3>Republic of the Philippines</h3>
                            <h3>Province of Dasmariñas Cavite</h3>
                            <h3><b>Paliparan II</b></h3>
                            <h3><i>Mobile No. 0951 385 6318</i></h3>
                            <br>
                            <h2>Resident Profile</h2>
                            <hr>
                        </div>

                    <section id = "section"> 
                       
                    <button onclick="window.print()">Print this page</button>
                        <div class = "info_div">
                            <div class = "item1">
                            <img src="../../../asset/image/resident_profile/<?php echo $row['image'] ?>" alt="">
                                <h2>INFORMATION</h2>
                                <p><?php echo "Birthday : " . date('F d, Y',strtotime($birthday)); ?></p>
                                <p><?php echo "Age: " . $row['age'] . " " . "yrs. old"; ?></p>
                                <p><?php echo "Civil Status: " . $row['civil_status'] ;?></p>
                                <p><?php echo "Gender: " . $row['gender'] ?></p>
                                <h2>ACCUPATION</h2>
                                <p><?php echo "Occupation: " . $row['occupation'] ?></p>
                            </div>
                            <div class = "item2">
                                <p><?php echo "Name : " . $row['firstname'] . " " . $row['middlename'] . " " . $row['lastname']?></p>
                                <p><?php echo $row['id_type'] . " : " . $row['id_type_no'] ?></p>
                                <p><?php echo "Address : " . $row['address'] ?></p>
                                <br>
                                <p><?php echo "Alias : " . $row['alias'] ?></p>
                                <hr style = "width:40vw; margin-top:20px;">
                                <h1>About</h1>
                                <div class = "item2-about">
                                   
                                    <div>   
                                    <p><?php echo "Birthplace : "?></p>
                                    <p><?php echo "Voter Status : "?></p>
                                    <p><?php echo "Phone : "?></p>
                                    <p><?php echo "Resident Type : "?></p>
                                    <p><?php echo "Remaks : "?></p>
                                    </div>
                                    <div>   
                                    <p><?php echo $row['place_of_birth'] ?></p>
                                    <p><?php echo $row['voter_status'] ?></p>
                                    <p><?php echo $row['contact_no'] ?></p>
                                    <p></p>
                                    <p></p>
                                    </div>
                               
                                </div>
                             
                            </div>
                        
                            
                        </div>

                       
                    </section>
                
                    


                    </main>
                     
                  </html>
                
                <?php
            // Close connection
            mysqli_close($conn);

        }
  
    

    
?>

