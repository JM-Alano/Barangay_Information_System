<?php

    require("../../../database/conn_db.php");

  if(isset($_POST['submit_user_edit'])){
        
        $id_user_edit = trim($_POST["id_user_edit"]);
        
        $firstname_user = trim($_POST["firstname_user"]);
        $middlename_user = trim($_POST["middlename_user"]);
        $lastname_user = trim($_POST["lastname_user"]);

        $house_no_user = trim($_POST["house_no_user"]);
        $sitio_pook_user = trim($_POST["sitio_pook_user"]);
        $username_user = trim($_POST["username_user"]);
        $password_user = trim($_POST["password_user"]);

       
        
        
    
        $sql= "UPDATE user_account SET firstname='$firstname_user' , middlename='$middlename_user', lastname='$lastname_user' , house_no='$house_no_user' , sitio_pook='$sitio_pook_user' , username='$username_user', password='$password_user' WHERE id= $id_user_edit";
        
      
                
                if (mysqli_query($conn, $sql)) {

                  ?>
                    <script> window.location.href = "/BIS/administrator/admin_panel/user_register_folder/loading_update.php";</script>
                  <?php



                    
                  } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                  }
                  
                  mysqli_close($conn);
      
     }
?>