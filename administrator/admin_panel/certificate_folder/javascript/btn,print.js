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
           
 
     let  request_document = btn.parentNode.childNodes[1].textContent;
     let  OR_no = btn.parentNode.childNodes[3].textContent;
     let  status = btn.parentNode.childNodes[5].textContent;
     let  purpose = btn.parentNode.childNodes[7].textContent;
    
     document.getElementById("id_print").value = id;

    document.getElementById("document_print").value = request_document;
    document.getElementById("OR.no_print").value = OR_no;
    document.getElementById("status_print").value = status;
    document.getElementById("purpose_print").value = purpose;

    
 });
 });
         


     
 window.addEventListener("click", function(event) {
     if (event.target == print_modal) {
         print_modal.style.display = "none";
     }
 });



});