



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/BIS/administrator/admin_panel/brgy_blotter/brgy_blotter_upd.css"/>
</head>
<body>


<form action="/BIS/administrator/admin_panel/brgy_blotter/update.php" method = "POST">
    <h1 class = "h1">Edit Blotter List</h1>
    <div class = "main_div_blotter">
        <div>
           
           
            <label for="">SUBJECT :</label><br>
            <input type="text" name="subject_upd" id="subject_blotter" placeholder = "Enter Subject" ><br>

            <label for="">CELLPHONE NUMBER :</label><br>
            <input type="text" name="cell_no_upd" id="cell_no_blotter" placeholder = "Enter Phone number" pattern="[0-9]{11}" required ><br>

            <label for="">PLACE :</label><br>
            <input type="text" name="place_upd" id="place_blotter" value = "Barangay Paliparan II" readonly><br>

            <label for="">TANOD DUTY :</label><br>
            <input type="text" name="tanod_upd" id="tanod_blotter" placeholder = "Enter Tanod duty" required><br>
        </div>

        <div>
           

         

            <label for="">DATE :</label><br>
            <input type="Date" name="date_upd" id="date_blotter" required><br>

            <label for="">TIME :</label><br>
                <input type = "time" name="time_upd" id="time_blotter"  required />
                   
               <br>
            <label for="">STATUS :</label><br>
                <select name="status_upd" id="status_blotter" required>
                     <option value="" readonly>--Select Blotter Status--</option>
                    <option value=1>Active</option>
                    <option value=2>Settled</option>
                    <option value=3>Scheduled</option>
                </select><br>
                    <input type="text" name = "id_blotter" id = "id_blotter">
                <input type="hidden" name = "type_of_blotter" id = "type_blotter"value = "Blotter">
        </div>
        
    </div>

    <div class = "div_2nd">
        <h3 class = "h1">Details</h3>
       <div class = "div">
        <p>Ako si <input type="text" id = "complainant_blotter" name = "complainant_upd" style= "width:200px; margin-right:20px;">Edad <input type="number" id = "age_blotter" name = "age_upd" min = "1" max = "105"style = "width:50px; "><br>
        Nakatira sa <input type="text" name = "address_complainant_upd" id = "address_complainant_blotter" style= "width:300px;"> ay dumudulong sahimpilan ng Barangay Paliparan II upang aking ireklamo si <input type="text" name = "complained_name_upd" id = "complained_name_blotter" style= "width:300px;"><br>
        Address <input type="text" name = "add_complained_name_upd" id = "add_complained_name_blotter" style= "width:400px;"> sa kadahilanan na
        <textarea name="details_reason_upd" id="details_reason_blotter" >
        
        </textarea>
        </p>
       </div>
        
    </div>
        
    <div class = "div_3rd">
       
        <input type="reset" value = "Reset" id = "reset">
        <input type="submit" name = "save_blotter_upd" value = "Save" id = "save">
    </div>

    </form>
</body>
</html>