document.addEventListener("mouseover", function() {
    
    // Get modal and button elements
    let edit_modal = document.getElementById("view-modal_blotter");
    let editBtns = document.querySelectorAll(".view_btn");
       


    // Show modal on edit button click
    editBtns.forEach(function(btn) {
    btn.addEventListener("click", function() {
        edit_modal.style.display = "block";
        // Get ID and data of record to edit
        let id_blotters = btn.getAttribute("data-id");

        let  complainant_view = btn.parentNode.parentNode.parentNode.cells[0].textContent;
        let  respondent_view = btn.parentNode.parentNode.parentNode.cells[1].textContent;
        let  Victims_view = btn.parentNode.parentNode.parentNode.cells[2].textContent;
        let  incident_type_view = btn.parentNode.parentNode.parentNode.cells[3].textContent;
        let  location_view = btn.parentNode.parentNode.parentNode.cells[4].textContent;
        let  time_view = btn.parentNode.parentNode.parentNode.cells[10].textContent;
        let  status_view = btn.parentNode.parentNode.parentNode.cells[7].textContent;
        let  details_view = btn.parentNode.parentNode.parentNode.cells[8].textContent;
       
        let  date_view = btn.parentNode.parentNode.parentNode.cells[9].textContent;

        document.getElementById("complainant_view").innerHTML =  complainant_view;
        document.getElementById("respondent_view").innerHTML =  respondent_view;
        document.getElementById("victims_view").innerHTML =  Victims_view;
        document.getElementById("incident_type_view").innerHTML =  incident_type_view;
        document.getElementById("location_view").innerHTML =  location_view;
        document.getElementById("date_view").innerHTML = date_view;
        document.getElementById("time_view").innerHTML =  time_view;
        document.getElementById("details_view").innerHTML =  details_view;


        if(status_view == 1){
            document.getElementById("status_view").innerHTML = "Active";
            document.getElementById("status_view").style.color = "red";
        }else if(status_view == 2){
            document.getElementById("status_view").innerHTML = "Settled";
            document.getElementById("status_view").style.color = "green";
        }
        else if(status_view == 3){
            document.getElementById("status_view").innerHTML = "Scheduled";
            document.getElementById("status_view").style.color = "orange";
           
        }
    });
    });
            
    window.addEventListener("click", function(event) {
        if (event.target == edit_modal) {
            edit_modal.style.display = "none";
        }
    });

});