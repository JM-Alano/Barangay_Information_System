document.addEventListener("mouseover", function() {
     
           
    // Get the modal
     let modal_delete_manage = document.getElementById("delete-modal_manage");
     let deleteBtns_manage = document.querySelectorAll(".delete_btn_manage");
     let certDeleteBtn_manage = document.getElementById("confirm-delete_manage");
     let cancelDeleteBtn_manage = document.getElementById("cancel-delete_manage");
 
     deleteBtns_manage.forEach(function(btn) {
         btn.addEventListener("click", function() {
            modal_delete_manage.style.display = "block";
             // Store ID of record to delete
             let id = btn.getAttribute("data-id");
             certDeleteBtn_manage.setAttribute("data-id", id);
         });
     });
     // Hide modal on cancel button click or outside click
     cancelDeleteBtn_manage.addEventListener("click", function() {
        modal_delete_manage.style.display = "none";
     });
     window.addEventListener("click", function(event) {
         if (event.target == modal_delete_manage) {
            modal_delete_manage.style.display = "none";
         }
     });

       // Send delete request on confirm button click
       certDeleteBtn_manage.addEventListener("click", function() {
        let id = certDeleteBtn_manage.getAttribute("data-id");
        // Send AJAX request to delete.php
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "/BIS/administrator/admin_panel/certificate_folder/delete_manage.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send("id=" + id);
        xhr.onload = function() {
            if (xhr.status === 200) {
           
                const xhttp = new XMLHttpRequest();
                xhttp.open("POST", '/BIS/administrator/admin_panel/certificate_folder/manage_certificate.php');
                xhttp.send();
                xhttp.onreadystatechange = (e) => {
                    document.getElementById("content_certificate").innerHTML = xhttp.responseText;
                }
                
            } else {
                console.log("Error deleting record!");
            }
        };
        deleteBtns_manage.style.display = "none";
    });

});