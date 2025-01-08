



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/BIS/administrator/admin_panel/brgy_blotter/blotter.css"/>
</head>
<body>


    <form action="brgy_blotter/update.php" method = "POST">
    <h1 class = "h1">Edit Blotter List</h1>
    <input type="hidden" name = "id_blotter" id = "id_blotter">
    <div class = "main_div_blotter">
        <div>
            <label for="">Complainant</label><br>
            <input type="text" name="complainant" id="complainant" placeholder = "Enter complainant" required><br>

            <label for="">Victim(s)</label><br>
            <input type="text" name="victims" id="vitims" placeholder = "Enter Vitim(s)" required ><br>

            <label for="">Location</label><br>
            <input type="text" name="location" id="location" placeholder = "Enter Location" ><br>
            
            <label for="">Time</label><br>
            <input type="time" name="time" id="time_blotter"><br>
        </div>

        <div>
            <label for="">Respondent</label><br>
            <input type="text" name="respondent" id="respondent" placeholder = "Enter Respondent" required><br>

            <label for="">Type</label><br>
                <select name="incident_type" id="incident_type" required>
                    <option value="Blotter">Blotter</option>
                    <option value="Incident">Incident</option>
                </select><br>

            <label for="">Date</label><br>
            <input type="date" name="date_blotter" id="date_blotter" required><br>

            <label for="">Status</label><br>
                <select name="status_blotter" id="status_blotter" required>
                     <option value="" readonly>--Select Blotter Status--</option>
                    <option value=1>Active</option>
                    <option value=2>Settled</option>
                    <option value=3>Scheduled</option>
                </select><br>
        </div>
        
    </div>

    <div class = "div_2nd">
        <label for="">Details</label><br>
        <textarea name="details" id="details" rows="4" cols="50" required>

        </textarea>
    </div>
        
    <div class = "div_3rd">
        <input type="submit" name = "edit_blotter" value = "Save" id = "save">
        <input type="reset" value = "Reset" id = "reset">
    </div>

    </form>
</body>
</html>