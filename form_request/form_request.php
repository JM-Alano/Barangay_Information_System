<?php
    require('../select_data_db.php');
    require('../user_login/session.php');

   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Request | Barangayy Information System</title>

    <link rel = "stylesheet" href = "form.css"/>
</head>
<body>
    
    <main id = "main">
        <h1 >BARANGAY <span id = "barangay_name"> PALIPARAN II</span>  </h1>
        <h2 ><span id = "municipality" >DASMARIÑIAS</span> CITY</h2>
        <img src="../asset/image/logo/New Project.png" alt="" id = "logos">
        <h3>ONLINE BARANGAY CERTIFICATION REQUEST</h3>
    </main>

    <section id = "form_request" class = "form-request">
        
        <div class = "officer_div">

            <div class = "img_div">
                <img src="../asset/image/official/RolandoAmbal.jpg" alt="">
                <div>
                    <h5>PB. ROLANDO C. AMBAL</h5>
                    <h6>BARANGAY CHAIRMAN</h6>
                </div>
            </div>

            <div class = "name_official">
                <h4>kag. Oscar B. Alvarez</h4>
                <p>Com. on Environmental Protection</p>
                <h4>kag. Rosalie M. Andaya</h4>
                <p>Com. on Health and Sanitation</p>
                <h4>kag. Alvin A. Andaya</h4>
                <p>Com. on Cooperative and Livelihood</p>
                <h4>kag. Resie Martinez</h4>
                <p>Com. on Peace & Order and Public safety</p>
                <h4>kag. Mark Jester M. Asilo</h4>
                <p>Com. on Education and Culture</p>
                <h4>kag. Gilberto A. Magtaas</h4>
                <p>Com. on Finance, Ways & Means, Budget <br> and Appropriation</p>
                <h4>kag. Ma. Teresa D. Sanchez</h4>
                <p>Com. on Infrastructure & Public Works</p>
                <h4>Ken Elderrine Ofianga</h4>
                <p>Com. on Youth & Sport Development <br> <p>SK Chairman</p></p>
                <br>
                <br>
                <h4>Lucila T. Anasco</h4>
                <p>Barangay Secretary</p>
                <br>
                <h4>Miguel Ryan H. Alvarez</h4>
                <p>Barangay Treasurer</p>
            </div>
            
        </div>
        <form action="request_validation.php" method = "POST">
            <h1><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160L0 416c0 53 43 96 96 96l256 0c53 0 96-43 96-96l0-96c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 96c0 17.7-14.3 32-32 32L96 448c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l96 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 64z"/></svg>Fill up the Form</h1>
            <select name="request_document" id="select" required >
                <option value="">-- Select Document Request --</option>
                <option value="Barangay Clearance">Barangay Clearance</option>
                <option value="Barangay Certificate">Barangay Certificate</option>
                <option value="Barangay Indigency">Barangay Indigency</option>
                <option value="Barangay ID">Barangay ID</option>
           
            </select>
            <div class = "item1">

            <div>
                <label for="">Firstname: </label><br>
                <input type="text" name = "firstname" placeholder = "Enter your fullname" id = "firstname" required>
                
            </div>
           
            <div>
                <label for="">Age: </label><br>
                <input type="number" name = "age"  placeholder = "Enter your age" id = "age" max = "110" min = "1" required><br>
            </div>
           
            </div>
           
            <label for="">Middlename: </label><br>
            <input type="text" name = "middlename"  placeholder = "Enter your fullname" id = "middlename" >
            <label for="">Lastname: </label><br>
            <input type="text" name = "lastname"  placeholder = "Enter your fullname" id = "lastname" required>
            <label for="">Gender: </label><br>
            <select name="gender" id="select">
                <option value="">--Select Gender--</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select><br>
            <label for="">House Number : </label><br>
            <input type="text"name = "house_no" placeholder = "Enter House Number" required><br>

            <label for="">Sitio/Pook/Subdivision : </label><br>
            <select name="Sitio_Pook" id="select">
               <option value="">--Select Pook/Sitio/Subdivision--</option>
                <option value="Iyala">Iyala</option>
                <option value="Sitio Burol">Sitio Burol</option>
                <option value="Sitio Kubuhan & Ridge View">Sitio Kubuhan & Ridge View</option>
                <option value="Mabuhay Homes 2000">Mabuhay Homes 2000</option>
                <option value="Sitio Pook Boundary">Sitio Pook Boundary</option>
                <option value="Camella at the Island Park">Camella at the Island Park</option>
            </select><br>
            
            <label for="">Birthday : </label><br>
            <input type="date" name = "date" required><br>


            <label for="">Place of birth : </label><br>
            <input type="text" name = "place_of_birth" placeholder = "Ex. Dasmarinas" ><br>

            <label for="">Cell phone no : </label><br>
            <input type="tel" name = "control_no" placeholder = "Ex. 09123456789" pattern="[0-9]{11}" ><br>
            
            <label for="">Contact Person : </label><br>
            <input type="text" name = "contact_person" placeholder = "Enter your contact person" ><br>

            <label for="">Contact # of Contact Person : </label><br>
            <input type="tel" name = "contact_person_no" placeholder = "Ex. 09123456789"  pattern="[0-9]{11}"><br>
            
            <label for="">How long do you live here and what year.</label><br>
            <input type="month" name = "live_since_year" placeholder = "Answer the question" required><br>

            <label for="">Purpose : </label><br>
            <input type="text" name = "purpose" placeholder = "Purpose of request document" id = "purpose" required> <br>

            <input type="hidden" value = "1" name = "status"> 

            <div class = "submit_reset_return_div">
                <input type="submit" id = "submit" name = "submit_request" value = "Submit">
                <input type="reset" id = "reset" value = "Reset">
                <a href="../user_login/logout.php"><input type="button" value = "Logout" id = "return"></a>
            </div>
        </form>
    </section>
    


       <script>
             
                let barangay_name = document.getElementById("barangay_get").textContent;
                let municipality = document.getElementById("municipality_get").textContent;
                let logo_request = document.getElementById("logo-request").textContent;

                document.getElementById("municipality").innerHTML =  municipality;
                document.getElementById("barangay_name").innerHTML =  barangay_name;
                
                document.getElementById("logos").src =  logo_request;
                
        </script>
</body>
</html>