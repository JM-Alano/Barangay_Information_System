



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/BIS/administrator/admin_panel/incident_folder/brgy_incident_upd.css"/>
</head>
<body>


<form action="/BIS/administrator/admin_panel/incident_folder/update.php" method = "POST">
    <h1 class = "h1">Edit Incident Report :</h1>
    <div class = "main_div_blotter">
        <div>
           
           
            <label for="">Cause of the incident :</label><br>
            <input type="text" name="cause_incident_upd" id="cause_incident_upd" placeholder = "Enter incident cause" required><br>

            <label for="">Time of the incident :</label><br>
            <input type="time" name="time_upd" id="time_upd"  required ><br>

            <label for="">Date Happened :</label><br>
            <input type="date" name="date_upd" id="date_upd" value = "" required><br>

            
            <label for="">Status</label><br>
                <select name="status_upd" id="status_upd" required>
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
            <input type="text" name = "person1_upd" id = "person1_upd"><br>
            <label for="">address : </label>
            <input type="text" name = "address1_upd" id = "address1_upd"><br>
            <label for="">vehicle : </label>
            <input type="text" name = "vehicle1_upd" id = "vehicle1_upd"><br>
            <label for="">License no : </label>
            <input type="text" name = "license1_upd" id = "license1_upd"><br>
            <label for="">Plate : </label>
            <input type="text" name = "plate1_upd" id = "plate1_upd">
        </div>
      
      
        <input type="hidden" name="id_upd" id="id_upd">
            

       </div>
        
    </div>
        
    <div class = "div_3rd">
       
        <input type="reset" value = "Reset" id = "reset">
        <input type="submit" name = "save_incident_upd" value = "Save" id = "save">
    </div>

    </form>
</body>
</html>