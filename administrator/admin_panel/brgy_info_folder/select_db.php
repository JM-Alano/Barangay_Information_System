<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

   <style>
    @font-face {
    font-family: "main_text";
   src: url(../../../asset/font/Syncopate/Syncopate-Regular.ttf);
   }
   @font-face {
       font-family: "sub_text";
       src: url(../../../asset/font/Afacad_Flux/AfacadFlux-VariableFont_slnt,wght.ttf);
   }
   *{
       margin: 0px;
       padding: 0px;
       box-sizing: content-box;
       list-style-type: none ;
   }
    .div-main{
        display:flex;
        color:#005720;
        font-size:0.7rem;
        justfy-content:space-between;
        margin-top:60px;
        width: 100%;
        line-height:50px;
        font-family:"sub_text";
    }
    .div-main .div-1{
        padding: 0px 0px 0px 10px;
        
    }
    .div-main .div-2{
        padding: 0px 0px 0px 10px;
    }
    #images{
        width: 170px;
        height:180px;
        margin-top:15px;
        
    }
   </style>
<body>
    <?php

    require("../../database/conn_db.php");


    $sql = "SELECT * FROM barangay_information";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0){
        
       $row = mysqli_fetch_array($result);
       $_SESSION['logo'] = $row['logo'];
        ?>
          <img src="../../asset/image/logo/<?php echo  $row['logo']?>" alt="" id ="images">
          <div class = "div-main">
                    <div class = "div-1">
                        <h2>Barangay name :</h2>
                        <h2>Municipality :</h2>
                        <h2>Address :</h2>
                        <h2>Phone no :</h2>
                        <h2>Email :</h2>
                        
                    </div>
                    <div class = "div-2">
                    <h2 class = "h2" id = "barangay_name_get"><?php echo  $row['barangay_name']?></h2>
                    <h2 id = "municipality_get"><?php echo $row['municipality']?></h2></span>
                    <h2 id = "address_get"><?php echo  $row['address']?></h2>
                    <h2 id = "phone_no_get"><?php echo   $row['phone_no']?></h2>
                    <h2 id = "email_get"><?php echo   $row['email']?></h2>
                    <p hidden  id = "image_get">../../asset/image/logo/<?php echo   $_SESSION['logo'] ?></p>
                    
                    </div>
         </div>


           
        <?php

    }
   
    ?>





</body>
</html>

