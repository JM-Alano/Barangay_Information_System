

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/BIS/administrator/admin_panel/incident_folder/brgy_incident.css"/>
</head>
<body>

    <header>
        <h4>INCIDENT REPORT FORM</h4>
    </header>


    <form action="/BIS/administrator/admin_panel/incident_folder/insert_incident.php" method = "POST">
    <h1 class = "h1">Add Incident Report:</h1>
    <div class = "main_div_blotter">
        <div>
           
           
            <label for="">Cause of the incident :</label><br>
            <input type="text" name="cause_incident" id="" placeholder = "Enter incident cause" required><br>

            <label for="">Time of the incident :</label><br>
            <input type="time" name="time" id=""  required ><br>

            <label for="">Date Happened :</label><br>
            <input type="date" name="date" id="" value = "" required><br>

            
            <label for="">Status</label><br>
                <select name="status" id="" required>
                     <option value="" readonly>--Select Blotter Status--</option>
                    <option value=1>Active</option>
                    <option value=2>Settled</option>
                    <option value=3>Scheduled</option>
                </select><br>
        </div>

     
        
    </div>

    <div class = "div_2nd">
        <h3 class = "h1">Parties involve</h3>
       <div class = "div">
        <div>
            <label for="">Names : </label>
            <input type="text" name = "person1">
            <label for="">address : </label>
            <input type="text" name = "address1">
            <label for="">vehicle : </label>
            <input type="text" name = "vehicle1">
            <label for="">License no : </label>
            <input type="text" name = "license1">
            <label for="">Plate : </label>
            <input type="text" name = "plate1">
        </div>
        <div>
        <label for="">Names : </label>
         <input type="text" name = "person2">
         <label for="">address : </label>
            <input type="text" name = "address2">
            <label for="">vehicle : </label>
            <input type="text" name = "vehicle2">
            <label for="">License no : </label>
            <input type="text" name = "license2">
            <label for="">Plate : </label>
            <input type="text" name = "plate2">
        </div>

        <div>
        <label for="">Names : </label>
        <input type="text" name = "person3">
        <label for="">address : </label>
            <input type="text" name = "address3">
            <label for="">vehicle : </label>
            <input type="text" name = "vehicle3">
            <label for="">License no : </label>
            <input type="text" name = "license3">
            <label for="">Plate : </label>
            <input type="text" name = "plate3">
        </div>
         
         <div>
         <label for="">Names : </label>
         <input type="text" name = "person4"/>
         <label for="">address : </label>
            <input type="text" name = "address4">
            <label for="">vehicle : </label>
            <input type="text" name = "vehicle4">
            <label for="">License no : </label>
            <input type="text" name = "license4">
            <label for="">Plate : </label>
            <input type="text" name = "plate4">
         </div>
      
        
            

       </div>
        
    </div>
        
    <div class = "div_3rd">
       
        <input type="reset" value = "Reset" id = "reset">
        <input type="submit" name = "save_incident" value = "Save" id = "save">
    </div>

    </form>
</body>
</html>