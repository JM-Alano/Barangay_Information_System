document.addEventListener("mouseover", function() {
     
    // Get modal and button elements
 let edit_modal_manage = document.getElementById("edit-modal_revenue");
 let editBtns_manage = document.querySelectorAll(".edit_revenue");
     


 // Show modal on edit button click
 editBtns_manage.forEach(function(btn) {
 btn.addEventListener("click", function() {
    edit_modal_manage.style.display = "block";
     // Get ID and data of record to edit
     let id = btn.getAttribute("data-id");
           
     let  firstname_upd = btn.parentNode.childNodes[1].textContent;
     let  middlename_upd = btn.parentNode.childNodes[3].textContent;
     let  lastname_upd = btn.parentNode.childNodes[5].textContent;

     let  amount_upd = btn.parentNode.childNodes[7].textContent;
     let  request_document_upd = btn.parentNode.childNodes[9].textContent;
     let  status_upd = btn.parentNode.childNodes[11].textContent;

     let  date_issue_upd = btn.parentNode.childNodes[13].textContent;
     let  OR_no_upd = btn.parentNode.childNodes[15].textContent;


     document.getElementById("id_upd_revenue").value = id;
     document.getElementById("firstname_upd_revenue").value = firstname_upd;
     document.getElementById("middlename_upd_revenue").value = middlename_upd;
     document.getElementById("lastname_upd_revenue").value = lastname_upd;

     document.getElementById("amount_upd_revenue").value = amount_upd;
     document.getElementById("request_document_upd_revenue").value = request_document_upd;
     document.getElementById("status_upd_revenue").value = status_upd;

     document.getElementById("date_issue_upd_revenue").value = date_issue_upd;
     document.getElementById("OR_no_upd_revenue").value = OR_no_upd;
    
    
 });
 });
         


     
 window.addEventListener("click", function(event) {
     if (event.target == edit_modal_manage) {
        edit_modal_manage.style.display = "none";
     }
 });



});