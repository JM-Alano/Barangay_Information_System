    // Get modal and button elements
    let edit_modal = document.getElementById("edit-modal");
    let editBtns = document.querySelectorAll(".update_btn");
    let updateBtn = document.getElementById("update-btn");        


    // Show modal on edit button click
    editBtns.forEach(function(btn) {
    btn.addEventListener("click", function() {
        edit_modal.style.display = "block";
        // Get ID and data of record to edit
        let id = btn.getAttribute("data-id");

        
        let  id_type = btn.parentNode.parentNode.parentNode.cells[2].textContent;
        let age = btn.parentNode.parentNode.parentNode.cells[3].textContent;
        let civil_status = btn.parentNode.parentNode.parentNode.cells[4].textContent;
        let gender = btn.parentNode.parentNode.parentNode.cells[5].textContent;
        let voter_status = btn.parentNode.parentNode.parentNode.cells[6].textContent;
        let address = btn.parentNode.parentNode.parentNode.cells[7].textContent;
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
        let image = btn.parentNode.parentNode.parentNode.cells[19].textContent;
        
      
      
       
        document.getElementById("id").value = id;

        document.getElementById("id_type").value = id_type;
        document.getElementById("age").value = age;
        document.getElementById("civil_status").value = civil_status;
        document.getElementById("gender").value = gender;
        document.getElementById("voter-status").value = voter_status;
        document.getElementById("address").value = address;
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
        document.getElementById("address").value = address;
        document.getElementById("images").src = image;
     

       
    
    });
    });
            
    window.addEventListener("click", function(event) {
        if (event.target == edit_modal) {
            edit_modal.style.display = "none";
        }
    });