    
    // ----------------------MODAL_ADD_OFFIICIAL--------------------
    // Get the modal
    let modal_user = document.getElementById("modal_import");

    // Get the button that opens the modal
    let btn_creates_user = document.getElementById("create_import");

    // Get the <span> element that closes the modal
    let spans_user = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn_creates_user.onclick = function() {
        modal_user.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    spans_user.onclick = function() {
        modal_user.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal_user) {
        modal_user.style.display = "none";
    }
    }