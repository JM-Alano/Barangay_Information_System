    // Get modal and button elements
    var edit_modal = document.getElementById("edit-modal");
    var editBtns = document.querySelectorAll(".update_btn");
    var updateBtn = document.getElementById("update-btn");        


    // Show modal on edit button click
    editBtns.forEach(function(btn) {
    btn.addEventListener("click", function() {
        edit_modal.style.display = "block";
        // Get ID and data of record to edit
        var id = btn.getAttribute("data-id");
        var fullname = btn.parentNode.parentNode.parentNode.cells[0].textContent;
        var chairman = btn.parentNode.parentNode.parentNode.cells[1].textContent;
        var position = btn.parentNode.parentNode.parentNode.cells[2].textContent;
        var term_start = btn.parentNode.parentNode.parentNode.cells[3].textContent;
        var term_end = btn.parentNode.parentNode.parentNode.cells[4].textContent;
        var status = btn.parentNode.parentNode.parentNode.cells[5].textContent;
        document.getElementById("id").value = id;
        document.getElementById("fullname").value = fullname;
        document.getElementById("chairmanship").value = chairman;
        document.getElementById("position").value = position;
        document.getElementById("term_start").value = term_start;
        document.getElementById("term_end").value = term_end;
        document.getElementById("status").value = status;
    });
    });
            
    window.addEventListener("click", function(event) {
        if (event.target == edit_modal) {
            edit_modal.style.display = "none";
        }
    });