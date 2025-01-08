document.addEventListener("mouseover", function() {
    
    // Get modal and button elements
    let edit_modal = document.getElementById("edit-modal_blotter");
    let editBtns = document.querySelectorAll(".update_btn");
    let updateBtn = document.getElementById("update-btn");        


    // Show modal on edit button click
    editBtns.forEach(function(btn) {
    btn.addEventListener("click", function() {
        edit_modal.style.display = "block";
        // Get ID and data of record to edit
        let id_blotter = btn.getAttribute("data-id");

        let  complainant = btn.parentNode.parentNode.parentNode.cells[0].textContent;
        let  respondent = btn.parentNode.parentNode.parentNode.cells[1].textContent;
        let  vitims = btn.parentNode.parentNode.parentNode.cells[2].textContent;
        let  incident_type = btn.parentNode.parentNode.parentNode.cells[3].textContent;
        let  location = btn.parentNode.parentNode.parentNode.cells[4].textContent;
        let  date_blotter = btn.parentNode.parentNode.parentNode.cells[5].textContent;
        let  time_blotter = btn.parentNode.parentNode.parentNode.cells[6].textContent;
        let  status_blotter = btn.parentNode.parentNode.parentNode.cells[7].textContent;
        let  details = btn.parentNode.parentNode.parentNode.cells[8].textContent;

        document.getElementById("id_blotter").value = id_blotter;
        document.getElementById("complainant").value = complainant;
        document.getElementById("respondent").value = respondent;
        document.getElementById("vitims").value = vitims;
        document.getElementById("incident_type").value = incident_type;
        document.getElementById("location").value = location;
        document.getElementById("date_blotter").value = date_blotter;
        document.getElementById("time_blotter").value = time_blotter;
        document.getElementById("status_blotter").value = status_blotter;
        document.getElementById("details").value = details;
        
    });
    });
            
    window.addEventListener("click", function(event) {
        if (event.target == edit_modal) {
            edit_modal.style.display = "none";
        }
    });

});




//live search//
document.addEventListener("mouseover", function() {
                
    // Get modal and button elements
    let edit_modals = document.getElementById("edit-modals");
    let editBtns = document.querySelectorAll(".update_btns");
    let updateBtns = document.getElementById("update-btns");        


    // Show modal on edit button click
    editBtns.forEach(function(btn) {
    btn.addEventListener("click", function() {
        edit_modals.style.display = "block";
        // Get ID and data of record to edit
        let id = btn.getAttribute("data-id");

        
        let  id_type = btn.parentNode.parentNode.parentNode.cells[2].textContent;
        let age = btn.parentNode.parentNode.parentNode.cells[3].textContent;
        let civil_status = btn.parentNode.parentNode.parentNode.cells[4].textContent;
        let gender = btn.parentNode.parentNode.parentNode.cells[5].textContent;
        let voter_status = btn.parentNode.parentNode.parentNode.cells[6].textContent;
        let house_no = btn.parentNode.parentNode.parentNode.cells[7].textContent;
        let firstname = btn.parentNode.parentNode.parentNode.cells[8].textContent;
        let middlename = btn.parentNode.parentNode.parentNode.cells[9].textContent;
        let lastname = btn.parentNode.parentNode.parentNode.cells[10].textContent;
        let alias = btn.parentNode.parentNode.parentNode.cells[11].textContent;
        let place_of_birthday = btn.parentNode.parentNode.parentNode.cells[12].textContent;
        let birthday = btn.parentNode.parentNode.parentNode.cells[13].textContent;
        let email = btn.parentNode.parentNode.parentNode.cells[14].textContent;
        let contact_no = btn.parentNode.parentNode.parentNode.cells[15].textContent;
        let citizenship = btn.parentNode.parentNode.parentNode.cells[16].textContent;
        let occupation = btn.parentNode.parentNode.parentNode.cells[17].textContent;
        let id_type_no = btn.parentNode.parentNode.parentNode.cells[18].textContent;
        let sitio_pook = btn.parentNode.parentNode.parentNode.cells[19].textContent;
        let image = btn.parentNode.parentNode.parentNode.cells[20].textContent;
        
    
    
    
        document.getElementById("id").value = id;

        document.getElementById("id_type").value = id_type;
        document.getElementById("age").value = age;
        document.getElementById("civil_status").value = civil_status;
        document.getElementById("gender").value = gender;
        document.getElementById("voter-status").value = voter_status;
        document.getElementById("house_no").value = house_no;
        document.getElementById("firstname").value = firstname;
        document.getElementById("middlename").value = middlename;
        document.getElementById("lastname").value = lastname;
        document.getElementById("alias").value = alias;
        document.getElementById("place_of_birth").value = place_of_birthday;
        document.getElementById("birthday").value = birthday;
        document.getElementById("email").value = email;
        document.getElementById("contact_no").value = contact_no;
        document.getElementById("citizenship").value = citizenship;
        document.getElementById("occupation").value = occupation;
        document.getElementById("id_number").value = id_type_no;
        document.getElementById("images").src = image;
        document.getElementById("sitio_pook_add").value = sitio_pook;
                        

    
    
    });
    });
            
    window.addEventListener("click", function(event) {
        if (event.target == edit_modals) {
            edit_modals.style.display = "none";
        }
    });
});
