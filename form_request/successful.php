<?php

    require('../user_login/session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Successfull Requested | Barangay Information System</title>
    <link rel = "stylesheet" href = "successfully.css">
    <link rel = "stylesheet" href = "new.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
</head>


            
<body> <div class = "container">
 
    <div class = "popup" id = "popup">
    
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
       
        </i>
        <h2>Request Submitted Successfully!!</h2>
        <p>Please take a screenshot for your reference. <br> Your document will be available within 3–5 working days</p>
        <p>Thank you for your patience.</p>
        
        <button type = "button" class = "btn" onclick = "closepopup()">Done</button>
    </div>
    </div>
    
</body>


<script>
    let popup = document.getElementById("popup");
    
    function closepopup(){
        popup.classList.remove("open-popup");
        window.location.href = "/BIS/form_request/form_request.php";
    }
    </script>
</html>