    <?php
        session_start();
        require("../database/conn_db.php");


        $sql = "SELECT * FROM barangay_information";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0){
            
        $row = mysqli_fetch_array($result);
        
            ?>
            <p hidden  id = "logo_get_image">../asset/image/logo/<?php echo  $row['logo'] ?></p>
            
            <?php
        
        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login | Barangay Information System</title>
    
    <link rel="stylesheet" href="login_user.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <header class = "header">
            <img src="../asset/image/logo/679b85db30f8c.png" alt="" id = "logo_image">

            <h1><span style = "color:#FCFAEE;">BARANGAY </span><span style = "color:#F5E402;">ONLINE CERTIFICATION REQUEST</span></h1>
    </header>


    <main id = "main">
        <div class = "sub_main_div">
    <form action="user_login_page.php" method = "POST">

    <h1><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" transform: ;msFilter:;"><path d="m13 16 5-4-5-4v3H4v2h9z"></path><path d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z"></path></svg></span>LOGIN</h1>

    <div>
    <label for=""><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" transform: ;msFilter:;"><path d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z"></path></svg></span>Username</label><br>
    <input type="text" id = "uname" name = "uname" placeholder = "Usename" required><br>

    <label for=""><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" transform: ;msFilter:;"><path d="M20 12c0-1.103-.897-2-2-2h-1V7c0-2.757-2.243-5-5-5S7 4.243 7 7v3H6c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-8zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v3H9V7z"></path></svg></span>Password</label><br>
    <input type="Password" id = "pwd" name = "pname" placeholder = "Password"><br>


    <input type="checkbox" id = "checkbox" onclick="show_pwd()"><label for="" id = "check_span">SHOW PASSWORD</label><br>

    <input type="submit" id = "submit" name = "user_login"> 
    </div>


    </form>

    <div class = "div_registration">
         <button id = "user_registration">
         <span>Click here to register!</span> 
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M399 384.2C376.9 345.8 335.4 320 288 320l-64 0c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z"/></svg>
        </button>
     </div>
    </div>
    
    <div id = "logo">
        <img src="../asset/image/logo/67a89c6822aa9.png" alt="" id = "img_logo">
    </div>



    <div id = "validation">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <p><?php include('user_validation.php'); ?></p>
        </div>

   

      
    </main>



      <!-- ADD FORM -->
      <div id="modal_add_blotter" class="modal_blotter">
                                <!-- Modal content -->
                                <div class="modal-content_blotter">
                                <span class="close">&times;</span>
                                    <?php  include('registration.php') ;?>
                                </div>
                        </div>
      <!-- Js function visibility eye -->
      <script>
    

    function show_pwd() {
        var x = document.getElementById("pwd");
        if (x.type === "password") {
            document.getElementById("checkbox");
            x.type = "text";
        } else {
            document.getElementById("checkbox");
            x.type = "password";
        }
        };
        
</script>

        <script src = "registration.js"></script>
        <script src = "validation.js"></script>


        <script>
        // Function to close the modal
        function closeModal() {
            document.getElementById('validation').style.display = 'none';
        }

        // Set a timer to automatically close the modal after 5 seconds (5000 ms)
        setTimeout(closeModal, 5000);   
    </script>

    
<script>
                let logo = document.getElementById("logo_get_image").textContent;
             
                ;
                document.getElementById("logo_image").src =  logo;
           
                
        </script>
</body>

</html>