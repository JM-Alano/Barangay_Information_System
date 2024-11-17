<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Resident</title>
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
            html {
                scroll-behavior: smooth;
            }
            :root{
                --bg-color: #FCFAEE;
                --2nd-bg-color:#4A9D4f;
                --sub-bg-color: #005720 ;
            
                --1st-text-color: #005720 ;
                --2nd-text-color: rgb(53, 53, 53);
                --3rd-text-color: #FCFAEE;
            
                --btn-color: #F5E402;

                --other-color :rgb(0, 183, 255);
            }
            body{
                background-color: var(--bg-color);
                overflow-x: hidden;
            }
            header h1{
                background-color: var(--2nd-bg-color);
                padding: 20px 20px 20px 70px;
                border-radius: 20px;
                margin-top: 5px;
                font-family: "sub_text";
                color: #d4b62f;
                margin-left: 1px;
                margin-right: 1px;
                animation-name: side_animation;
                animation-duration: 2s ;
                
            }
            .main_container{
                background-color: rgb(235, 235, 235);
                width: 90vw;
                height: max-content;
                margin-bottom: 5%;
                margin-top: 2%;
                border-radius: 4px;
            margin-left: 70px;
                color: #4A9D4f;
                padding-top: 10px;
                animation-name: side_animation;
                animation-duration: 2s ;
            
            }
            .img-profile-resident{
            
            
                margin-left: 40%;
                margin-top: 50px;
                border: 2px solid var(--2nd-bg-color);
                width: fit-content;
                box-shadow: 1px 1px 20px var(--btn-color);
                border-radius: 4px;
            }
            .main_container .item1{
            
                text-align: center;
                padding: 20px 0px 20px 0px;
                font-size: 1.4rem;
                font-family: "sub_text";
                letter-spacing: 2px;
                
            }
            .main_container .item1 input{
                border: 2px solid #4a9d5052;
                padding: 5px;
                margin-bottom: 40px;
                border-radius: 4px;
                font-family: "sub_text";
                color: #4A9D4f;
                cursor: pointer;

            }
            .main_container .item1 select{
            height: 25px;
                padding: 5px;
                margin-bottom: 20px;
                border-radius: 5px;
                width: 20%;
                margin-top: 20px;
                border: none;
                text-align: center;
                cursor: pointer;
                font-family: "sub_text";
                color: #4A9D4f;
                font-size: large;
              
            }
            .main_container .item-form{
            
                display: flex;
                justify-content: space-evenly;
                padding: 20px 50px 20px 50px;
                margin-top:30px;
                
            }
            .main_container .item-form input,#gender,#civil_status{
                width: 15vw;
                height: 35px;
                border-radius: 4px;
                padding-left: 10px;
                font-family: "sub_text";
                border: none;
                color: var(--1st-text-color);
                font-weight: 600;
                letter-spacing: 2px;
               
            }
            .main_container .item-form input:focus{
            outline: 3px solid var(--2nd-bg-color);
            }
            .main_container .item-form select:focus{
            outline: 3px solid var(--2nd-bg-color);
            }
            .main_container .item-form label{
            font-size: larger;
            font-family: "sub_text";
            color: var(--1st-text-color);
            }
            .main_container .item-form-other{
                  margin-top:30px;
                display: flex;
                justify-content: space-evenly;
                padding: 20px 50px 20px 50px;
            }
            .main_container .item-form-other input,#voter-status,#id_type{
                width: 15vw;
                height: 50px;
                border-radius: 4px;
                padding-left: 10px;
                font-family: "sub_text";
                border: none;
                color: var(--1st-text-color);
                letter-spacing:2px;
                margin-left:25px;
                
            }
            .main_container .item-form-other #voter-status:focus{
                outline: 3px solid var(--2nd-bg-color);
                
            }
            .main_container .item-form-other label{
            font-size: larger;
            font-family: "sub_text";
            color: var(--1st-text-color);
            }
            .submit_reset_div{
                display: flex;
                justify-content: space-evenly;
                padding: 40px 20px 40px 100px;
                
            }
            .submit_reset_div input{
                padding: 10px;
                width: 10vw;
                cursor: pointer;
                border-radius: 4px;
                border: none;
                height: 30px;
             
            }
            .main_container .item-form-other input:focus{
                outline: #4A9D4f 3px solid;
            }
            .submit_reset_div #submit{
                background-color: #4A9D4f;
                color: var(--bg-color);
            }
            .submit_reset_div #reset{
                background-color: red;
                color: var(--bg-color);
                margin-left:40px;
            }
            .submit_reset_div #return{
                padding: 10px;
                width: 10vw;
                height: 30px;
                cursor: pointer;
                border-radius: 4px;
                border: none;
                background-color: var(--other-color);
                color: var(--bg-color);
                margin-left:40px;
            
            }

            @keyframes side_animation {
                from {opacity: 1%;}
                to {opacity: 100%;}
                
            
            }
    </style>
</head>
<body>
    <header>
        <h1>ADD RESIDENT LIST</h1>
    </header>
    <main class = "main_container">
        <div class = "img-profile-resident">
            <img src="../../../asset/image/official/images.png" alt="">
        </div>
        <form action="/BIS/administrator/admin_panel/brgy_resident_folder/create.php" method = "post" enctype = "multipart/form-data">
            <div class = "item1">
                <input type="file" name = "image" value = "" accept = ".jpg, .jpeg, .png" required><br>
                
            </div>
            <div class = "item-form">
            <label for="">ID Type</label><br>
                <select name="id_type" id="id_type" style = "margin-left:-190px;">
                   <option value="No ID">No ID</option>
                   <optgroup label = "Recommended">
                        <option value="Barangay ID">Barangay ID</option>
                        <option value="National ID">National ID</option>
                        <option value="UMID">UMID</option>
                        <option value="TIN ID">TIN ID</option>
                        <option value="Philhealth Card">Philhealth Card</option>
                        <option value="Drivers License">Drivers License</option>
                  </optgroup>
                  <optgroup label = "Other ID">
                        <option value="Passport">Passport</option>
                        <option value="Students ID">Students ID</option>
                        <option value="Voters ID">Voters ID</option>
                        <option value="SSS ID">SSS ID</option>
                        <option value="Alien/Immigrant COR">Alien/Immigrant COR</option>
                        <option value="Government Office/GOCC ID">Government Office/GOCC ID</option>
                        <option value="HDMF ID (Pagibig)">HDMF ID (Pagibig)</option>
                        <option value="Postal ID">Postal ID</option>
                        <option value="PRC ID">PRC ID</option>
                  </optgroup>

                   
                    
                </select>
                <label for="" >ID Number</label>
                <input type="text" name = "id_number" style = "margin-left:-100px;" placeholder = "Enter Your ID Number">
            </div>
            <div class = "item-form">
                <label for="">Firstname :</label><br>
                <input type="text" name = "firstname" placeholder = "Enter name" required><br>
                <label for="">Middlename :</label><br>
                <input type="text" name = "middlename" placeholder = "Enter Middlename" ><br>
                <label for="">Lastname :</label><br>
                <input type="text" name = "lastname" placeholder = "Enter Lastname" required>
            </div>
            <div class = "item-form">
                <label for="" style = "margin-left:30px;">Alias :</label><br>
                <input type="text" name = "alias" placeholder = "Enter Alias"><br>
                <label for="">Place of birth :</label><br>
                <input type="text" name = "place_of_birth" placeholder = "Enter Place of Birth" required><br>
                <label for="">Birthday :</label><br>
                <input type="date" name = "date" required>
            </div>
            <div class = "item-form">
                <label for="" style = "margin-left:30px;">Age :</label><br>
                <input type="number" name = "age" placeholder = "Enter Age"  max = "110" min = "1" required ><br>
                <label for="">Civil Status :</label><br>
                <select name="civil-status" id = "civil_status"required>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Seperated">Seperated</option>
                    <option value="Widowed">Widowed</option>
                    <option value="Divorced">Divorced</option>
                </select>

                <label for="">Gender :</label><br>
                <select name="gender" id="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Transgender">Transgender</option>
                    <option value="Gender Neutral">Gender Neutral</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class = "item-form">
                <label for="" style = "margin-left:40px;">Email :</label><br>
                <input type="email" name = "email" placeholder = "Enter email"><br>
                <label for="">Contact number :</label><br>
                <input type="tel" name = "contact_no" placeholder = "Enter Contact.no" pattern="[0-9]{11}"><br>
                <label for="">Occupation</label><br>
                <input type="text" name = "occupation" placeholder = "Enter Occupation">
            </div>
            <div class = "item-form-other">
                <label for="">Voter Status :</label>
                <select name="voter-status" id="voter-status">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                <label for="" style = "margin-left:30px;">Citizenship :</label><br>
                <input type="text" name = "citezenship" placeholder = "Enter Citezenship"><br>
                <label for="">Address :</label><br>
                <input type="text" name = "address" placeholder = "Enter Complete Address" required><br>
            </div>

            <div class = "submit_reset_div">
                <input type="submit" name = "submit_resident" id = "submit">
                <a href="../resident.php"><button id = "return" type = "button">Return</button></a>
                <input type="reset" id = "reset">
               
            </div>
        </form>
    
    </main>
</body>
</html>


