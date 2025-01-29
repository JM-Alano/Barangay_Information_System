<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="user_register_folder/user.css.css">
</head>
<body>
    <h1 class = "registration_h1">Edit User List</h1>
    <form action="user_register_folder/update.php" class = "form_registration" method = "POST">
   
   <div class = "item1_user">
    <div>
    <label for="">Firstname</label><br>
    <input type="text" name = "firstname_user" id = "firstname_user"><br>
    </div>
    <div>
    <label for="">Middlename</label><br>
    <input type="text" name = "middlename_user" id = "middlename_user"><br>
    </div>
    <div>
    <label for="">Lastname</label><br>
    <input type="text" name = "lastname_user" id = "lastname_user">
    </div>
        
   </div>

   <div class = "item2_user">
    <div>
    <label for="">House NO.</label><br>
    <input type="text" name = "house_no_user" id = "house_no_user">
    </div>
    <div>
    <label for="">Sitio/Pook</label><br>
        <select id = "sitio_pook_user" name="sitio_pook_user" required>
               <option value="">--Select Pook/Sitio/Subdivision--</option>
                <option value="Iyala">Iyala</option>
                <option value="Sitio Burol">Sitio Burol</option>
                <option value="Sitio Kubuhan & Ridge View">Sitio Kubuhan & Ridge View</option>
                <option value="Mabuhay Homes 2000">Mabuhay Homes 2000</option>
                <option value="Sitio Pook Boundary">Sitio Pook Boundary</option>
                <option value="Camella at the Island Park">Camella at the Island Park</option>
         </select><br>
    </div>
       
       
   </div>
    
   <div class = "item3_user">
    <h1>Create Account</h1>
    <label for="">Username</label><br>
    <input type="text" name = "username_user" id = "username_user"><br>

    <label for="">Create Password</label><br>
    <input type="password" name = "password_user" id = "password_user"><br>

    <label for="">Show Password</label>
    <input type="checkbox" name = "checkbox_registered" id = "checkbox_registered" onclick="show_pwd()" name="" id="">

   </div>

    <input type="hidden" name = "id_user_edit" id = "id_user_edit">
   <div class = "item4_user">
   <input type="submit" name = "submit_user_edit" class = "submit_user_edit" value = "Save">
   <input type="reset" class = "reset_user_edit" name="" id="">
   </div>
   
    </form>
     
     
  


    <script src = "user_register_folder/validation.js"></script>

    <script>
        
    function show_pwd() {
        var x = document.getElementById("password_user");
        if (x.type === "password") {
            document.getElementById("checkbox_registered");
            x.type = "text";
        } else {
            document.getElementById("checkbox_registered");
            x.type = "password";
        }
        };
    </script>
</body>
</html>