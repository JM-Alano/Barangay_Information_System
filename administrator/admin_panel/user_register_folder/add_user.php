<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.user.css">
</head>
<body>
    <h1 class = "registration_h1">User Registration</h1>
    <form action="user_register_folder/regisration_validation.php" class = "form_registration" method = "POST">
   
    <div class = "item1">
      <div><label for="">Firstname</label><br>
      <input type="text" name = "fname" placeholder = "Enter Firstname" required><br></div>
      <div>   <label for="">Middlename</label><br>
      <input type="text" name = "mname" placeholder = "Enter Middlename"><br></div>
      <div><label for="">Lastname</label><br>
      <input type="text" name = "lname" placeholder = "Enter Lastname" required><br></div>
        

     

        
    </div>

    <div class = "item2">
        <div> <label for="">House no.</label><br>
        <input type="text" name = "house_no" placeholder = "Enter House. no" ><br>
    </div>

        <div>

         <label for="">Sitio/Pook/Subdivision </label><br>
        <select name="Sitio_Pook" id="select" required>
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
    <h2>Create Account</h2>
    <div class = "item3">
       
        <div><label for="">Username</label><br>
        <input type="text" name = "uname" placeholder = "Create username" required><br></div>
    
       
                <!-- password field -->
                <div id="message">
                    <h3>Password must contain the following:</h3>
                    <p id="letter" class="invalid">A lowercase letter</p>
                    <p id="capital" class="invalid">A capital (uppercase)letter</p>
                    <p id="number" class="invalid">A number</p>
                    <p id="length" class="invalid">Minimum 8 characters</p>
                </div>
                


                    <div>
                    <label for="lname" id = "plabel">Create your password</label><br>
                    <input type="Password"  id="pname" name="pword" placeholder = "Enter your password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required><br>
                    <i class="fa-solid fa-eye-slash" id = "eye" onclick="myFunction()"></i>
                    <br>
                    </div>

                
                <div>
                <label for="lname" id = "confirm_plabel">Confirm your password</label><br>
                <input type="Password" id="confirm_pname"  name="confirm_pword" placeholder = "Enter New password again" required><br>
                <i class="fa-solid fa-eye-slash" id = "eye_confirm" onclick="myFunction_confirm()"></i>
                </div>
                
              

                <div class = item4>
                <input type="submit" name = "registraion_user" value = "Submit"  id = "submit_btn" ><br>
                <input type="reset" name = "reset" value = "reset"  id = "reset">
                </div>

              
                

        
    </div>

   

    </form>
     
     
  


    <script src = "user_register_folder/validation.js"></script>
</body>
</html>