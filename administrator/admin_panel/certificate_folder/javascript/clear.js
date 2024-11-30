document.addEventListener("mouseover", function() {
     
         
    
        // Get modal and button elements
        let clear_modal = document.getElementById("clear-modal");
        let clearBtns = document.querySelectorAll(".clear_btn");
        let confirmBtn = document.getElementById("confirm-clear");        
    
    
        // Show modal on edit button click
        clearBtns.forEach(function(btn) {
        btn.addEventListener("click", function() {
            clear_modal.style.display = "block";
            // Get ID and data of record to edit
            let id = btn.getAttribute("data-id");
            
            let  firstname = btn.parentNode.childNodes[1].textContent;
            let  middlename = btn.parentNode.childNodes[3].textContent;
            let  lastname = btn.parentNode.childNodes[5].textContent;

            let  age = btn.parentNode.childNodes[7].textContent;
            let  request_document = btn.parentNode.childNodes[9].textContent;
            let  address = btn.parentNode.childNodes[11].textContent;

            let birthday  = btn.parentNode.childNodes[13].textContent;
            let place_of_birth = btn.parentNode.childNodes[15].textContent;
            let contact_no = btn.parentNode.childNodes[17].textContent;

            let contact_person = btn.parentNode.childNodes[19].textContent;
            let contact_no_contact_person = btn.parentNode.childNodes[21].textContent;
            let live_since_year = btn.parentNode.childNodes[23].textContent;

            let purpose  = btn.parentNode.childNodes[25].textContent;
            let status = btn.parentNode.childNodes[27].textContent;
            let gender = btn.parentNode.childNodes[29].textContent;


           
           document.getElementById("id_cert").value = id;
           document.getElementById("firstname_cert").value = firstname;
           document.getElementById("middlename_cert").value = middlename;
           document.getElementById("lastname_cert").value = lastname;

           document.getElementById("age_cert").value = age;
           document.getElementById("request_document_cert").value = request_document;
           document.getElementById("address_cert").value = address;

           document.getElementById("birthday_cert").value = birthday;
           document.getElementById("place_of_birth_cert").value = place_of_birth;
           document.getElementById("contact_no_cert").value =  contact_no;

           document.getElementById("contact_person_cert").value =  contact_person;
           document.getElementById("contact_no_contact_person_cert").value =  contact_no_contact_person;
           document.getElementById("live_since_year_cert").value =  live_since_year;
           
           document.getElementById("purpose_cert").value =  purpose;
           document.getElementById("status_cert").value =  status;
           document.getElementById("gender_cert").value =  gender;

           
        });
        });
                
       

            
        window.addEventListener("click", function(event) {
            if (event.target == cert_modal) {
                cert_modal.style.display = "none";
            }
        });


    });