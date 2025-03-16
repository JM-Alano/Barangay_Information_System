
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    @font-face {
    font-family: "main_text";
    src: url(../asset/font/Syncopate/Syncopate-Regular.ttf);
}
@font-face {
    font-family: "sub_text";
    src: url(../asset/font/Afacad_Flux/AfacadFlux-VariableFont_slnt,wght.ttf);
}
*{
    margin: 0px;
    padding: 0px;
    box-sizing: content-box;
}
html {
    scroll-behavior: smooth;
  }
:root{
    --bg-color:#FCFAEE;
    --2nd-bg-color:#4A9D4f;
    --sub-bg-color: #005720 ;
 
    --1st-text-color: #005720 ;
    --2nd-text-color: rgb(53, 53, 53);
    --3rd-text-color: #FCFAEE;
   
    --btn-color: #F5E402;

    --other-color :rgb(0, 183, 255);
}





  
  /* The message box is shown when the user clicks on the password field */
  #message {
    display: block;
    color: #000;
    position: relative;
    padding: 20px;
    margin-top: -20px;
  }
  #message h3{
    margin-bottom: 10px;
    font-size: medium;
    letter-spacing: 1px;
    font-family: sans-serif;
    color: var(--2nd-bg-color);
    text-align: left;
  }
  #message p {
    text-align: left;
    font-size: 18px;
    font-size: medium;
    font-family: sans-serif;
    letter-spacing: 1px;
    margin-left: 50px;
    padding-top: 1px;
  }
  
  /* Add a green text color and a checkmark when the requirements are right */
  .valid {
    color: rgb(45, 192, 45);
  }
  
  .valid::before {
    position: relative;
    left: -35px;
    content: "✔";
  }


  /* Add a red text color and an "x" icon when the requirements are wrong */
  .invalid {
    color: rgb(218, 15, 0);
  }
  
  .invalid:before {
    position: relative;
    left: -35px;
    content: "✖";
  }



  #btn_confirm {
    display: none;
    position: relative;
    bottom: 40px;
    background-color: black;

  } 
    .valid_confirm {
      color: rgb(2, 148, 2);
    }
    
    
  .invalid_confirm {
    color: blue;
  }
  
  

  .form_registration .item3 #eye{
    position: relative;
    left: 370px;
    bottom: 29px;
    font-size: 1.5vw;
    cursor: pointer;
    color: var(--1st-text-color);
    width: 20px;
}

.form_registration .item3 #eye_confirm{
    position: relative;
    left: 370px;
    bottom: 29px;
    font-size: 1.5vw;
    cursor: pointer;
    color: var(--1st-text-color);
}
form h1{
    font-size:1.2rem;
    padding: 10px 10px 10px 0px;
    color:rgb(2, 148, 2);
    font-family:"sub_text";
}
.input_pass input{
    width: 100%;
    height:30px;
    padding:5px;
    border-radius:4px;
    border:none;
    margin-top:10px;
    font-family:"sub_text";
}
.input_pass label{
   font-size:0.9rem;
   color:#005720;
   font-family:"sub_text";
}
.input_pass input:focus{
    outline:solid 2px rgb(2, 148, 2);
}
 #submit{
    width: 120px;
    padding: 5px;
    border:none;
    height: 20px;
    border-radius:4px;
    background-color: #4A9D4f;
    color: var(--bg-color);
    
    cursor: pointer;
}
 #submit:focus{
    outline: none;
  }
 #submit:hover{
    background-color:#65bb6b ;
  }
  
 #eye{
    position: relative;
    left: 370px;
    bottom: 29px;
    font-size: 1.5vw;
    cursor: pointer;
    color: var(--1st-text-color);
    width: 20px;
}
</style>
<body>
   
    <form action="/BIS/user_login/user_panel/new_pass_validation.php" method = "POST">
    <h1>Change Password</h1><hr><br><br>
                 <div class = "input_pass">
                    <label for="lname" id = "plabel">Create your new password</label><br>
                    <input type="Password"  id="pname" name="pword" placeholder = "New password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required><br>
                    <i class="fa-solid fa-eye-slash" id = "eye" onclick="myFunction()"></i>
                    <br>

                    <input type="hidden" name = "id" value = "<?php echo $_SESSION['user_id']; ?>">
                </div>

                    
                <!-- password field -->
                <div id="message">
                    <h3>Password must contain the following:</h3>
                    <p id="letter" class="invalid">A lowercase letter</p>
                    <p id="capital" class="invalid">A capital (uppercase)letter</p>
                    <p id="number" class="invalid">A number</p>
                    <p id="length" class="invalid">Minimum 8 characters</p>
                </div><hr><br>

                <div>
                    <input type="submit" id = "submit" name = "update_pass"value = "Save Cahanges">
                </div>

    </form>

    
    <script src = "new_pass_validation.js"></script>
</body>
</html>