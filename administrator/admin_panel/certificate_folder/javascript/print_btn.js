document.addEventListener("mouseover", function() {
     
    // Get modal and button elements
 let print_modal = document.getElementById("print-modal");
 let printBtns = document.querySelectorAll(".print_btn");
 let confirmBtn = document.getElementById("print-clear");        


 // Show modal on edit button click
 printBtns.forEach(function(btn) {
 btn.addEventListener("click", function() {
     print_modal.style.display = "block";
     // Get ID and data of record to edit
     let id = btn.getAttribute("data-id");
           
     let  date_issue = btn.parentNode.childNodes[1].textContent;
     let  firstname = btn.parentNode.childNodes[3].textContent;
     let  middlename = btn.parentNode.childNodes[5].textContent;
     let  lastname = btn.parentNode.childNodes[7].textContent;
     let  request_document = btn.parentNode.childNodes[9].textContent;
     let  OR_no = btn.parentNode.childNodes[11].textContent;
     let  status = btn.parentNode.childNodes[13].textContent;
     
    
     document.getElementById("id_print").value = id;
    document.getElementById("date_issue_print").value = date_issue;
    document.getElementById("firstname_print").value = firstname;
    document.getElementById("middlename_print").value = middlename;
    document.getElementById("lastname_print").value = lastname;
    document.getElementById("document_print").value = request_document;
    document.getElementById("OR.no_print").value = OR_no;
    document.getElementById("status_print").value = 2;


    
 });
 });
         


     
 window.addEventListener("click", function(event) {
     if (event.target == print_modal) {
         print_modal.style.display = "none";
     }
 });



});