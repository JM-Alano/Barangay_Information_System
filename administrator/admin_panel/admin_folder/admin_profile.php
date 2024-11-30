
<?php
   session_start();
   require("../../../database/conn_db.php");

    $user_id = $_SESSION['user_id'];
   $sql = "SELECT *  FROM admin_account WHERE user_id =  $user_id";
    
   
   $result = $conn->query($sql);

   $result->num_rows > 0;

   if ($result->num_rows > 0) {
       
    $row = mysqli_fetch_array($result);
 

      ?>
      
      
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator Profile</title>
    <link rel = "stylesheet" href = "/BIS/administrator/admin_panel/admin_folder/admin_style.css">
</head>
<body>


        <header class = "admin_header">
            <div>
                <h1>Administrator Profile</h1>
            
            </div>
                <h4>View your personal information <span><a href="../dashboard.php">Back to Dashboard</a></span></h4>
               
        </header>

    <h1></h1>
        <form action="/BIS/administrator/admin_panel/admin_folder/update.php" method = "POST" class = "form">

        <div class = "profile">
            <h1>Profile</h1>

            <div class = "img">
            <img src="../../../asset/image/admin/<?php echo $row['admin_profile']?>" alt=""><br>
             <input type="file" readonly>
            </div>
            
        </div>

        <div class="container">
    <div class="label_div">
        
        <label for="">Usertype</label>
        <label for="">User ID</label>
        <label for="">Firstname</label>
        <label for="">Middlename</label>
        <label for="">Lastname</label>
        <label for="">Age</label>
        <label for="">Gender</label>
        <label for="">Email</label>
        <label for="">Username</label>
        <label for="">Password</label>
        <label for="">Date Created</label>
    </div>
    <div class="input_div">
        <input type="text" name = "user_type" value = "<?php echo  $row['user_type'] ?>" readonly>
        <input type="number" value="<?php echo $row['user_id']; ?>" readonly>
        <input type="hidden" name = "user_id" value="<?php echo $row['user_id']; ?>" readonly>
        <input type="text" name = "firstname" value ="<?php echo $row['firstname'] ?>" readonly>
        <input type="text" name = "middlename" value ="<?php echo $row['middlename'] ?>" readonly>
        <input type="text" name = "lastname" value ="<?php echo $row['lastname'] ?>" readonly>
        <input type="number" name = "age" value = "<?php echo  $row['age'] ?>" min = "0" max = "110" readonly>
        <input type="text" name = "gender" value = "<?php echo $row['gender'] ?>" readonly>
        <input type="email" name = "email" value = "<?php echo  $row['email'] ?>"readonly>
        <input type="text" name = "username" value = "<?php echo $row['username']?>"readonly>
        <input type="password" name = "password" value = "<?php echo $row['password']?>"readonly>
        <input type="date"  value="<?php echo $row['date_created']; ?>" readonly>
        <input type="hidden" name = "date" value="<?php echo $row['date_created']; ?>" readonly>
    </div>
    
</div>
    
 


        </form>
        
    
    
</body>
</html>
      
      
      <?php


   }
   
?>

