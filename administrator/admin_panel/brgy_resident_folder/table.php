<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Table</title>
    <link rel="stylesheet" href="table_sle.css" />
</head>
<body>
<?php 
require("../../database/conn_db.php");

// Get the current page and limit from query parameters, set defaults if not provided
$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$limit = isset($_GET['limit']) ? max(1, (int)$_GET['limit']) : 10;
$offset = ($page - 1) * $limit;

// Get the total number of records from the correct table
$countQuery = "SELECT COUNT(*) AS total FROM barangay_resident";
$countResult = $conn->query($countQuery);
$totalRows = $countResult->fetch_assoc()['total'];
$totalPages = max(1, ceil($totalRows / $limit));

// Fetch the records based on the current page and limit
$sql = "SELECT * FROM barangay_resident ORDER BY id DESC LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);

// Check if there are any records
if ($result->num_rows > 0) { ?>

    <!-- Limit Selector -->
    <div class="limit-selector">
        <form method="GET" action="">
            <label for="limit">Rows per page:</label>
            <select name="limit" id="limit" onchange="this.form.submit()">
                <option value="10" <?php if ($limit == 10) echo 'selected'; ?>>10</option>
                <option value="20" <?php if ($limit == 20) echo 'selected'; ?>>20</option>
                <option value="50" <?php if ($limit == 50) echo 'selected'; ?>>50</option>
            </select>
            <input type="hidden" name="page" value="<?php echo $page; ?>"> <!-- Preserve current page -->
        </form>
    </div>

    <table>
        <caption>Barangay Resident List</caption>
        <tr>
            <th>Fullname</th>
            <th>Contact no.</th>
            <th>Age</th>
            <th>Civil Status</th>
            <th>Gender</th>
            <th>Voter Status</th>
            <th>Action</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { 
            $firstname = $row["firstname"];
            $middlename = $row["middlename"];
            $lastname = $row["lastname"];

           
            $age = $row["age"];
            $civil_status = $row["civil_status"];
            $gender = $row["gender"];

            $voter_status = $row["voter_status"];
            $house_no = $row["house_no"];

            $place_of_birth = $row["place_of_birth"];
            $birthday = $row["birthday"];

            
            $email = $row["email"];
            $contact_no = $row["contact_no"];

            $citizenship = $row["citizenship"];
            $occupation = $row["occupation"];
            $sitio_pook = $row["sitio_pook"];

            $id = $row["id"];
        ?>
        <tr class="table_hover">
            <td><?php echo $firstname . " " . $middlename . " " . $lastname; ?></td>
      
            <td><?php echo $contact_no; ?></td>
            <td><?php echo $age; ?></td>
            <td><?php echo $civil_status; ?></td>
            <td><?php echo $gender; ?></td>
            <td><?php echo $voter_status; ?></td>
            <td hidden><?php echo $house_no; ?></td>

            <td hidden><?php echo  $firstname; ?></td>
            <td hidden><?php echo $middlename; ?></td>
            <td hidden><?php echo  $lastname; ?></td>

            <td hidden><?php echo   $place_of_birth ; ?></td>
            <td hidden><?php echo   $birthday; ?></td>
            <td hidden><?php echo  $lastname; ?></td>

            <td hidden><?php echo   $email; ?></td>

            <td hidden><?php echo    $citizenship; ?></td>
            <td hidden><?php echo   $occupation; ?></td>
            <td hidden><?php echo   $sitio_pook; ?></td>
           
            <td>
                                <div id = "form_up_del_official">
                                       
                                       <button  id = "update_official_btn" class = "update_btn" data-id= <?php echo $row ["id"] ?>><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160L0 416c0 53 43 96 96 96l256 0c53 0 96-43 96-96l0-96c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 96c0 17.7-14.3 32-32 32L96 448c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l96 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 64z"/></svg></button>
                                       <button id = "delete_official_btn" class = "delete_btn" data-id= <?php echo $row ["id"] ?>><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M135.2 17.7L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-7.2-14.3C307.4 6.8 296.3 0 284.2 0L163.8 0c-12.1 0-23.2 6.8-28.6 17.7zM416 128L32 128 53.2 467c1.6 25.3 22.6 45 47.9 45l245.8 0c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></button>
                                   </div>
            </td>
        </tr>
        <?php } ?>
    </table>

    <!-- Pagination Controls -->
    <div class="pagination">
        <?php if ($page > 1): ?>
            <a href="?page=<?php echo $page - 1; ?>&limit=<?php echo $limit; ?>">Previous</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <a href="?page=<?php echo $i; ?>&limit=<?php echo $limit; ?>" class="<?php echo $i == $page ? 'active' : ''; ?>">
                <?php echo $i; ?>
            </a>
        <?php endfor; ?>

        <?php if ($page < $totalPages): ?>
            <a href="?page=<?php echo $page + 1; ?>&limit=<?php echo $limit; ?>">Next</a>
        <?php endif; ?>
    </div>

<?php 
} else { ?>
    <style>
    .Data-not-found h1 {
        color: rgba(255, 0, 0, 0.37);
        position: absolute;
        top: 300px;
        left: 25%;
        font-size: 3.5rem;
    }
    </style>
    <div class="Data-not-found">
        <h1>DATA NOT FOUND</h1>
    </div>
<?php }

// Close the database connection
mysqli_close($conn);
?>

<!-- Modal for Delete -->
<div id="delete-modal" class="delete-modal">
    <div class="delete-modal-content">
        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c13.3 0 24 10.7 24 24l0 112c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-112c0-13.3 10.7-24 24-24zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg></span>
        <h2>Delete Confirmation</h2>
        <h3>Are you sure you want to delete this record?</h3>
        <div class="div-delete">
            <button id="confirm-delete" class="btn-delete">Delete</button>
            <button id="cancel-delete" class="btn-delete">Cancel</button>
        </div>
    </div>
</div>

<!-- Modal for Update -->
<div id="edit-modal" class="edit-modal">
    <div class="edit-modal-content">
        <span onclick="this.parentElement.parentElement.style.display='none';" class="update-close-btn">&times;</span>
        <?php include("update_temp.php"); ?>
    </div>
</div>

<script src="/BIS/administrator/admin_panel/brgy_resident_folder/delete_modal_button.js"></script>
<script src="/BIS/administrator/admin_panel/brgy_resident_folder/update_modal.js"></script>

</body>
</html>
