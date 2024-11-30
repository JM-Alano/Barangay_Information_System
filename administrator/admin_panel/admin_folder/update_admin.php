<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="/BIS/administrator/admin_panel/admin_folder/update.php" method = "POST" enctype = "multipart/form-data">
    <h1>Edit Admin Account</h1>

       
    <div class = "container">

    <div class = "div_1">
        <img src="../../../asset/image/admin/<?php echo $admin_profile; ?>" alt="" id = "images_edit"> <br>
         <label for="">Upload Profile</label><br>
        <input name = "image" type="file" value = ""  accept = ".jpg, .jpeg, .png"><br>

        <label for="">Fisrtname</label><br>
        <input name = "firstname_edit" type="text" placeholder ="Enter Firstname" id = "firstname_edit" required><br>

        <label for="">Middlename</label><br>
        <input name = "middlename_edit" type="text" placeholder ="Enter Middlename" id = "middlename_edit"><br>

        <label for="">Lastname</label><br>
        <input name = "lastname_edit" type="text" placeholder ="Enter Lastname" required id = "lastname_edit"><br>

        <label for="">Gender</label><br>
        <select name="gender_edit" id = "gender_edit" required>
        
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        </select><br>

        <label for="">Age</label><br>
        <input name = "age_edit" type="number" min = "0" max = "110" placeholder ="Enter Age" id = "age_edit" required><br>
        
    
    </div>
        
    <div  class = "div_2" id = "div_2">

    <div class = "id_number">
        <label for="">User Number</label><br>
        <input type="number" name = "user_id" id = "id_edit" readonly><br>
    </div>
        
         <label for="">Date Created</label><br>
        <input name = "date_created_edit" type="date" required id = "date_created_edit"><br>
        <label for="">User Type</label><br>
        <select name="user_type_edit" id="user_type_edit">
            <option value="ADMINISTRATOR">ADMINISTRATOR</option>
            <option value="SECRETARY">SECRETARY</option>
            <option value="OFFICER">OFFICER</option>
        </select><br>
        <label for="">Status</label><br>
        <select name="status_edit" id="status_edit" required>
            <option value= 1>Active</option>
            <option value= 0>Inactive</option>
        </select><br>
        <label for="">Email</label><br>
        <input name = "email_edit" type="email" placeholder ="Enter Email" id = "email_edit" ><br>
        <label for="">Username</label><br>
        <input name = "username_edit" type="text" placeholder ="Enter Username" required id = "username_edit"><br>
        <label for="">Password</label><br>
        <input name = "password_edit" type="password" id = "password_edit" placeholder ="Enter Password" required>
      
        <input type="checkbox" id = "checkbox_edit" onclick="show_pwd_edit()"><br>
      
    </div>

  
        
    </div>
    <div class = "div_3">
        <input name = "submit_add_edit" type="submit" id = "submit_add">
        <input name = "reset_add_edit" type="reset"  id = "reset_add">
        
    </div>

        
    </form>


    
  


</body>
</html>