<?php
   
    require('../session.php');
    require('db_data_user.php');
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document | Barangayy Information System</title>
    <link rel = "stylesheet" href = "style_user/user_style_main.css"/>
    <link rel = "stylesheet" href = "style_user/style_documnet.css"/>
    <link rel = "stylesheet" href = "style_user/style_respon.css"/>
</head>
<body>

    <div class = "sidebar">
        <div class = "logo_content">
            <div class = "logo">
            <img src="../../asset/image/logo/6798e21533658.png" alt="" id = "logo">
                <div class = "logo_name">BIS</div>
            </div>
            <span id = "btn_menu">
            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" ;transform: ;msFilter:;><path d="M4 11h12v2H4zm0-5h16v2H4zm0 12h7.235v-2H4z"></path></svg>
            </span>
           
        </div>


            <ul class = "nav_list">
            
                    <li>
                        <a href="user.php" >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" transform: ;msFilter:;"><path d="M4 13h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1zm-1 7a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v4zm10 0a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-7a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v7zm1-10h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1z"></path></svg><span class = "link_name">Dashboard</span></a>
                        <span class = "tooltip">Dashboard</span>
                    </li>

                    <li>
                        <a href="profile.php">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z"/></svg><span class = "link_name">My Profile</span></a>
                        <span class = "tooltip">My Profile</span>
                    </li>
                    <li >
                        <a href="document.php" id = "selected">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M211 7.3C205 1 196-1.4 187.6 .8s-14.9 8.9-17.1 17.3L154.7 80.6l-62-17.5c-8.4-2.4-17.4 0-23.5 6.1s-8.5 15.1-6.1 23.5l17.5 62L18.1 170.6c-8.4 2.1-15 8.7-17.3 17.1S1 205 7.3 211l46.2 45L7.3 301C1 307-1.4 316 .8 324.4s8.9 14.9 17.3 17.1l62.5 15.8-17.5 62c-2.4 8.4 0 17.4 6.1 23.5s15.1 8.5 23.5 6.1l62-17.5 15.8 62.5c2.1 8.4 8.7 15 17.1 17.3s17.3-.2 23.4-6.4l45-46.2 45 46.2c6.1 6.2 15 8.7 23.4 6.4s14.9-8.9 17.1-17.3l15.8-62.5 62 17.5c8.4 2.4 17.4 0 23.5-6.1s8.5-15.1 6.1-23.5l-17.5-62 62.5-15.8c8.4-2.1 15-8.7 17.3-17.1s-.2-17.4-6.4-23.4l-46.2-45 46.2-45c6.2-6.1 8.7-15 6.4-23.4s-8.9-14.9-17.3-17.1l-62.5-15.8 17.5-62c2.4-8.4 0-17.4-6.1-23.5s-15.1-8.5-23.5-6.1l-62 17.5L341.4 18.1c-2.1-8.4-8.7-15-17.1-17.3S307 1 301 7.3L256 53.5 211 7.3z"/></svg><span class = "link_name">Document</span></a>
                        <span class = "tooltip">Document</span>
                    </li>
                   
                   
                   

            </ul>
         

        </div>

        <div class = "dashboard_content">
                <div class = "text">
                    <h1>DOCUMENT</h1>
                    <div class = "setting">
                      
                       
                    <div class = "svg">
                            <a href="../logout.php">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 224c0 17.7 14.3 32 32 32s32-14.3 32-32l0-224zM143.5 120.6c13.6-11.3 15.4-31.5 4.1-45.1s-31.5-15.4-45.1-4.1C49.7 115.4 16 181.8 16 256c0 132.5 107.5 240 240 240s240-107.5 240-240c0-74.2-33.8-140.6-86.6-184.6c-13.6-11.3-33.8-9.4-45.1 4.1s-9.4 33.8 4.1 45.1c38.9 32.3 63.5 81 63.5 135.4c0 97.2-78.8 176-176 176s-176-78.8-176-176c0-54.4 24.7-103.1 63.5-135.4z"/></svg>
                            </a>
                       
                        </div>
                           
                            
                    </div>
                            


                </div>
                <div class = "date_today">
                    <a href="user.php">Go to Dashboard</a>
                        <p><?php
                            $date_today = date("F d, Y / l");
                            echo  $date_today;
                        ?></p>
                </div>
                
                <div class = "div_content">
                            
              

    <section id = "form_request" class = "form-request">
        
    
        <form action="submit_update.php" method = "POST">
            <h1><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160L0 416c0 53 43 96 96 96l256 0c53 0 96-43 96-96l0-96c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 96c0 17.7-14.3 32-32 32L96 448c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l96 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 64z"/></svg>Fill up the Form</h1>
            <label for="">Document Type</label>
            <select name="request_document" class ="select" required >
                <option value="">-- Select Document Request --</option>
                <option value="Barangay Clearance">Barangay Clearance</option>
                <option value="Barangay Certificate">Barangay Certificate</option>
                <option value="Barangay Indigency">Barangay Indigency</option>
                <option value="Barangay ID">Barangay ID</option>
           
            </select><br>
            

            <label for="" >House No : </label><br>
            <input type="text" id = "house_no_my_profile_id" name = "house_no" placeholder = "Enter House Number" required><br>

            <label for="" >Sitio/Pook/Subdivision : </label><br>
            <select   name="Sitio_Pook" id="select" class ="select">
               <option value="">--Select Pook/Sitio/Subdivision--</option>
                <option value="Iyala">Iyala</option>
                <option value="Sitio Burol">Sitio Burol</option>
                <option value="Sitio Kubuhan & Ridge View">Sitio Kubuhan & Ridge View</option>
                <option value="Mabuhay Homes 2000">Mabuhay Homes 2000</option>
                <option value="Sitio Pook Boundary">Sitio Pook Boundary</option>
                <option value="Camella at the Island Park">Camella at the Island Park</option>
            </select><br>
            
            <label for="">Birthday : </label><br>
            <input type="date" id = "birthday_my_profile_id" name = "date_birthday" required><br>


            <label for="">Place of birth : </label><br>
            <input type="text" id = "place_of_birth_my_profile_id" name = "place_of_birth" placeholder = "Ex. Dasmarinas" required><br>

            <label for="">Cell phone no : </label><br>
            <input type="tel" id = "contact_phone_my_profile_id" name = "contact_no" placeholder = "Ex. 09123456789" pattern="[0-9]{11}" ><br>
            
            <label for="">Contact Person : </label><br>
            <input type="text" id = "contact_person_my_profile_id" name = "contact_person" placeholder = "Enter your contact person" ><br>

            <label for="">Contact # of Contact Person : </label><br>
            <input type="tel" id = "contact_no_contact_person_my_profile_id" name = "contact_person_no" placeholder = "Ex. 09123456789"  pattern="[0-9]{11}"><br>
            
            <label for="">How long do you live here and what month/year.</label><br>
            <input type="month" id = "live_since_year_my_profile_id" name = "live_since_year" placeholder = "Answer the question" required><br>

            <label for="">Purpose : </label><br>
            <input type="text" id = "purpose_my_profile_id" name = "purpose" placeholder = "Purpose of request document"  required> <br>

            <input type="hidden" name = "firstname" id = "firstname_my_profile_id">
            <input type="hidden" name = "middlename" id = "middlename_my_profile_id">
            <input type="hidden" name = "lastname" id = "lastname_my_profile_id">

            <input type="hidden" name = "age" name = "" id = "age_my_profile_id">
            <input type="hidden" name = "gender" id = "gender_my_profile_id">
            <input type="hidden" name = "user_id" id = "user_id_my_profile_id">
            <input type="hidden" name = "status" value = 1 id = "status_my_profile_id">
            <input type="hidden" name = "id"  id = "id_my_profile_id">
            <input type="hidden" name = "profile_user"  id = "profile_user_display">

            <div class = "submit_reset_return_div">
                
                <input type="reset" id = "reset" value = "Reset">
                <input type="submit" id = "submit" name = "submit_request" value = "Submit">
            </div>
        </form>
    </section>
    
                           

                 
                            
                           
                          
                </div>
            <!-- ------------------------ -->
            </div>
          
            <footer style = "height:30vh;">

            </footer>
            
           
        </div>

     
<!-- -------------------------------------JAVASCRIPT--------------------------------------------- -->
             <!-- SIDEBAR FUNCTION SCRIPT -->
             <script src = "../javascript_folder/sidebar.js"></script>
        
        <script>
                
                let house_no_my_profile = document.getElementById("house_no_my_profile").textContent;
                document.getElementById("house_no_my_profile_id").value = house_no_my_profile;

                let sitio_pook_my_profile = document.getElementById("sitio_pook_my_profile").textContent;
                document.getElementById("select").value = sitio_pook_my_profile;

                let birthday_my_profile = document.getElementById("birthday_my_profile").textContent;
                document.getElementById("birthday_my_profile_id").value = birthday_my_profile;

                let firstname_my_profile = document.getElementById("firstname_my_profile").textContent;
                document.getElementById("firstname_my_profile_id").value =  firstname_my_profile;

                let middlename_my_profile = document.getElementById("middlename_my_profile").textContent;
                document.getElementById("middlename_my_profile_id").value =  middlename_my_profile;
                
                let lastname_my_profile = document.getElementById("lastname_my_profile").textContent;
                document.getElementById("lastname_my_profile_id").value =  lastname_my_profile;

                let age_my_profile = document.getElementById("age_my_profile").textContent;
                document.getElementById("age_my_profile_id").value =  age_my_profile;

                let gender_my_profile = document.getElementById("gender_my_profile").textContent;
                document.getElementById("gender_my_profile_id").value =  gender_my_profile;

                 let user_id_my_profile = document.getElementById("user_id_my_profile").textContent;
                document.getElementById("user_id_my_profile_id").value = user_id_my_profile;

                let contact_phone_my_profile = document.getElementById("contact_phone_my_profile").textContent;
                document.getElementById("contact_phone_my_profile_id").value = contact_phone_my_profile;

                
                let contact_person_my_profile = document.getElementById("contact_person_my_profile").textContent;
                document.getElementById("contact_person_my_profile_id").value = contact_person_my_profile;
                
                let place_of_birth_my_profile = document.getElementById("place_of_birth_my_profile").textContent;
                document.getElementById("place_of_birth_my_profile_id").value = place_of_birth_my_profile;
                
                let contact_no_contact_person_my_profile = document.getElementById("contact_no_contact_person_my_profile").textContent;
                document.getElementById("contact_no_contact_person_my_profile_id").value = contact_no_contact_person_my_profile;

                
                let live_since_year_my_profile = document.getElementById("live_since_year_my_profile").textContent;
                document.getElementById("live_since_year_my_profile_id").value = live_since_year_my_profile;

                let purpose_my_profile = document.getElementById("purpose_my_profile").textContent;
                document.getElementById("purpose_my_profile_id").value = purpose_my_profile;

                
                let id_my_profile = document.getElementById("id_my_profile").textContent;
                document.getElementById("id_my_profile_id").value = id_my_profile;

                let profile_user = document.getElementById("profile_profile").textContent;
                document.getElementById("profile_user_display").value =  profile_user;

        </script>
</body>
</html>