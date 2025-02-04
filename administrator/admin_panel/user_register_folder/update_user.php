<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="user_register_folder/user_res.css">
   
</head>
<body>
    <h1 class = "registration_h1">Edit User List</h1>
    <form action="user_register_folder/update.php" class = "form_registration" method = "POST">
    <h2>Personal Info</h2>
    <div class = "item1">
      <div><label for="">Firstname</label><br>
      <input type="text" name = "firstname_user" placeholder = "Enter Firstname" id = "firstname_user" required><br></div>
      <div>   <label for="">Middlename</label><br>
      <input type="text" name = "middlename_user" placeholder = "Enter Middlename" id = "middlename_user"><br></div>
      <div><label for="">Lastname</label><br>
      <input type="text" name = "lastname_user" placeholder = "Enter Lastname" id = "lastname_user" required><br></div>
        

     

        
    </div>

    <div class = "item2">
        <div> <label for="">Gender</label><br>
       <select name="gender_user" id="gender_user" required>
        
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Prefer not to say">Prefer not to say</option>
       </select>
    </div>

        <div>

         <label for="" style = "margin-left:-30px;">Age</label><br>
        <input type="number" name = "age_user" style = "margin-left:-30px;" id = "age_user" min = "0" max = "120" placeholder = "Enter Age" required>
     </div>
      
       
    </div>
    <h2>Create Account</h2>
    <div class = "item3">
       
        <div><label for="">Username</label><br>
        <input type="text" id = "username_user" name = "username_user" placeholder = "Create username" required><br></div>
    
       
        


                    <div>
                    <label for="lname" id = "plabel">Create your new password</label><br>
                    <input type="Password"  id="password_user" name="password_user" placeholder = "Enter your password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required><br>
                    <i class="fa-solid fa-eye-slash" id = "eyes" onclick="myFunc()"></i>
                    <br>
                    </div>

                    
              

            
                <input type="hidden" name = "profile_default" value = "images.png">
              
                <input type="hidden" id = "id_user_edit" name = "id_user_edit">

                <div class = item4>
                <input type="reset" name = "reset" value = "Reset"  id = "reset">
                <input type="submit" name = "submit_user_edit" value = "Submit"  id = "submit_btn" ><br>
              
                </div>

            
                

        
    </div>

   

    </form>
     
     
     
  


    <script src = "user_register_folder/validation.js"></script>

    <script>
        
    // password visibility //
function myFunc() {
var x = document.getElementById("password_user");
if (x.type === "password") {
   document.getElementById("eyes").className = "fa-solid fa-eye";
   x.type = "text";
} else {
   document.getElementById("eyes").className = "fa-solid fa-eye-slash";
   x.type = "password";
}
}
    </script>
</body>
</html>