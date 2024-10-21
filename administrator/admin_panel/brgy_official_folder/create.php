
<?php
       
       require('../../database/conn_db.php');
       if(isset($_POST["create_submit"])){
         $fullname = trim($_POST["fullname"]);
         $chairman = trim($_POST["chairman"]);
         $position = trim($_POST["position"]);
         $date_start = trim($_POST["date_start"]);
         $date_end = trim($_POST["date_end"]);
         $active = trim($_POST["active"]);

         if(empty($fullname) || empty($chairman) || empty($position) || empty($date_start) || empty($date_end) ){
             echo"Complete the Form";
           echo"
                  <script> 
                       document.getElementById('pop_success').style.display = 'block';
                         document.getElementById('form_add_official').style.display = 'block';
                   </script> ";
               

         }else {
                       
           $sql = "INSERT INTO barangay_official (fullname, chairmanship, position, term_start, term_end, status)
           VALUES ('$fullname', '$chairman', '$position','$date_start','$date_end','$active')";

            
              $result = $conn->multi_query($sql);


           if ($result === TRUE) {
             echo "New record created successfully";

             echo"
                  <script> 
                       document.getElementById('pop_success').style.display = 'block';
                        document.getElementById('pop_success').style.width = '17vw';
                        document.getElementById('pop_success').style.height = '70px';
                        document.getElementById('pop_success').style.background = 'rgb(0, 183, 255)';

                        window.location.href = '/BIS/administrator/admin_panel/brgy_official.php'
                   </script> ";
                  
             
           } else {
             echo "Error: " . $sql . "<br>" . $conn->error;
           }
         

         }

       }
       
       
       ?>