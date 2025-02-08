document.addEventListener("mouseover", function() {
    
    // Get modal and button elements
    let edit_modal = document.getElementById("view-modal_blotter");
    let editBtns = document.querySelectorAll(".view_btn");
       


    // Show modal on edit button click
    editBtns.forEach(function(btn) {
    btn.addEventListener("click", function() {
        edit_modal.style.display = "block";
        // Get ID and data of record to edit
        let id_view = btn.getAttribute("data-id");
      
        let  date = btn.parentNode.parentNode.parentNode.cells[0].textContent;
        let  time = btn.parentNode.parentNode.parentNode.cells[1].textContent;
        let  name_involve = btn.parentNode.parentNode.parentNode.cells[2].textContent;
        let  address = btn.parentNode.parentNode.parentNode.cells[3].textContent;
        let  vehicle = btn.parentNode.parentNode.parentNode.cells[4].textContent;
        let  license = btn.parentNode.parentNode.parentNode.cells[5].textContent;
        let  plate_no = btn.parentNode.parentNode.parentNode.cells[6].textContent;
        let  cause_incident = btn.parentNode.parentNode.parentNode.cells[7].textContent;
        let  status = btn.parentNode.parentNode.parentNode.cells[8].textContent;


       
        document.getElementById("id_view").value = id_view;

        document.getElementById("date_view").value = date;
        document.getElementById("time_view").value = time;
        document.getElementById("person1_view").value = name_involve;
        document.getElementById("address1_view").value = address;
        document.getElementById("vehicle1_view").value = vehicle;
        document.getElementById("license1_view").value = license;
        document.getElementById("plate1_view").value = plate_no; 
        document.getElementById("cause_incident_view").value = cause_incident; 
 

        if(status == 1){
             document.getElementById("status_view").value = "Active";
             document.getElementById("status_view").style.color = "red";
        }else if (status == 2){
            document.getElementById("status_view").value = "Settled";
            document.getElementById("status_view").style.color = "green";
        }else if (status == 3){
            document.getElementById("status_view").value = "Schedule";
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