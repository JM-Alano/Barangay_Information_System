

    <?php
        session_start();

        require("../database/conn_db.php");

            // Barangay Info
            $sql = "SELECT * FROM barangay_information";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0){
                
            $row = mysqli_fetch_array($result);
            
                ?>
                <p hidden  id = "logo_get">../asset/image/logo/<?php echo  $row['logo'] ?></p>
                
                
                <?php

            }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page | Barangayy Information System</title>
    <link rel = "stylesheet" href = "login.admin.css"/>
</head>
<body>
    <header class = "header">
            <img src="../asset/image/logo/679b85db30f8c.png" alt="" id = "logo">

            <h1><span style = "color:#FCFAEE;">BARANGAY </span><span style = "color:#F5E402;">INFORMATION SYSTEM</span></h1>
    </header>


        
   


    <main id = "main">

        <form action="login.php" method = "POST">

            <h1><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" transform: ;msFilter:;"><path d="m13 16 5-4-5-4v3H4v2h9z"></path><path d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z"></path></svg></span>LOGIN</h1>

            <div>
            <label for=""><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" transform: ;msFilter:;"><path d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z"></path></svg></span>Username</label><br>
            <input type="text" id = "uname" name = "uname" placeholder = "Usename" required><br>

            <label for=""><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" transform: ;msFilter:;"><path d="M20 12c0-1.103-.897-2-2-2h-1V7c0-2.757-2.243-5-5-5S7 4.243 7 7v3H6c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-8zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v3H9V7z"></path></svg></span>Password</label><br>
            <input type="Password" id = "pwd" name = "pname" placeholder = "Password" ><br>

          
            <input type="checkbox" id = "checkbox" onclick="show_pwd()"><label for="" id = "check_span">SHOW PASSWORD</label><br>
          
            <input type="submit" id = "submit" name = "login"> 
            </div>
            
          
        </form>
        

        <div id = "validation">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <p><?php include('login_validation.php'); ?></p>
        </div>

        <div>
            <h4>All records should be stored in a 
            secure and confidential.</h4>
            <img src="../asset/image/background/admin_bg/image-removebg-preview 1.png" alt="">
        </div>

    </main>
<?php

   

?>


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


    <script>
        // Function to close the modal
        function closeModal() {
            document.getElementById('validation').style.display = 'none';
        }

        // Set a timer to automatically close the modal after 5 seconds (5000 ms)
        setTimeout(closeModal, 5000);   
    </script>


<script>
                let logo = document.getElementById("logo_get").textContent;
             
                ;
                document.getElementById("logo").src =  logo;
           
                
        </script>
</body>
</html>