    
      <?php

        require('../session.php');


      echo $_SESSION['username'];
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Barangayy Information System</title>
</head>
<body>
    <h1>ADMINISTRATOR</h1>


    <form action="../logout.php">
        <input type="submit" value = "LOGOUT">
    </form>


</body>
</html>