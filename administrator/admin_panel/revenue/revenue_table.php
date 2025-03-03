<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/BIS/administrator/admin_panel/revenue/table_rev.css">
</head>
<body>

<!-- SEARCH BUTTON -->
<input type="text" id="live_search" placeholder="SEARCH">

<!-- Month Filter Form -->
<form method="GET" action="" class = "form">
    <label for="month">Select Month:</label>
    <select name="month" id="month" onchange="this.form.submit()">
        <option value="">All Months</option>
        <option value="01" <?php if (isset($_GET['month']) && $_GET['month'] == '01') echo 'selected'; ?>>January</option>
        <option value="02" <?php if (isset($_GET['month']) && $_GET['month'] == '02') echo 'selected'; ?>>February</option>
        <option value="03" <?php if (isset($_GET['month']) && $_GET['month'] == '03') echo 'selected'; ?>>March</option>
        <option value="04" <?php if (isset($_GET['month']) && $_GET['month'] == '04') echo 'selected'; ?>>April</option>
        <option value="05" <?php if (isset($_GET['month']) && $_GET['month'] == '05') echo 'selected'; ?>>May</option>
        <option value="06" <?php if (isset($_GET['month']) && $_GET['month'] == '06') echo 'selected'; ?>>June</option>
        <option value="07" <?php if (isset($_GET['month']) && $_GET['month'] == '07') echo 'selected'; ?>>July</option>
        <option value="08" <?php if (isset($_GET['month']) && $_GET['month'] == '08') echo 'selected'; ?>>August</option>
        <option value="09" <?php if (isset($_GET['month']) && $_GET['month'] == '09') echo 'selected'; ?>>September</option>
        <option value="10" <?php if (isset($_GET['month']) && $_GET['month'] == '10') echo 'selected'; ?>>October</option>
        <option value="11" <?php if (isset($_GET['month']) && $_GET['month'] == '11') echo 'selected'; ?>>November</option>
        <option value="12" <?php if (isset($_GET['month']) && $_GET['month'] == '12') echo 'selected'; ?>>December</option>
    </select>

    <label for="year">Select Year:</label>
    <select name="year" id="year" onchange="this.form.submit()">
        <option value="">All Years</option>
        <?php 
        $current_year = date("Y");
        for ($year = 2020; $year <= $current_year; $year++) {
            echo "<option value='$year' " . (isset($_GET['year']) && $_GET['year'] == $year ? 'selected' : '') . ">$year</option>";
        }
        ?>
    </select>
</form>

<?php 
require("../../database/conn_db.php");

// Get the selected month and year from the form
$month = isset($_GET['month']) ? $_GET['month'] : '';
$year = isset($_GET['year']) ? $_GET['year'] : '';

// Get the current page and limit from query parameters, set defaults if not provided
$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$limit = isset($_GET['limit']) ? max(1, (int)$_GET['limit']) : 10;
$offset = ($page - 1) * $limit;

// Get the total number of records from the correct table with filtering by month and year
$countQuery = "SELECT COUNT(*) AS total FROM barangay_revenue WHERE 1";

if ($month) {
    $countQuery .= " AND MONTH(date_issue) = '$month'";
}

if ($year) {
    $countQuery .= " AND YEAR(date_issue) = '$year'";
}

$countResult = $conn->query($countQuery);
$totalRows = $countResult->fetch_assoc()['total'];
$totalPages = max(1, ceil($totalRows / $limit));

$sql = "SELECT * FROM barangay_revenue WHERE 1";

if ($month) {
    $sql .= " AND MONTH(date_issue) = '$month'";
}

if ($year) {
    $sql .= " AND YEAR(date_issue) = '$year'";
}

$sql .= " ORDER BY OR_no DESC LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);

if ($result->num_rows > 0) { ?>

<div id="searchresult">
    <table>
        <caption>Income List</caption>
        <tr>
            <th>Fullname</th>
            <th>Document Type</th>
            <th>Date</th>
            <th>Amount</th>
            <th>Control No.</th>
            <th>Action</th>
        </tr>

        <?php
        $total_amount = 0;
        while ($row = $result->fetch_assoc()) {
            $OR_no = $row['OR_no'];
            $firstname = $row["firstname"];
            $lastname = $row["lastname"];
            $middlename = $row["middlename"];
            $amount = $row["document_amount"];
            $request_document = $row["document_type"];
            $date_issue = $row["date_issue"];

            date_default_timezone_set("Asia/Manila");
            $date_issue = date("Y-m-d");

            $total_amount += $amount;
        ?>
        <tr class="table_hover">
            <td><?php echo $firstname . " " . $middlename . " " . $lastname; ?></td>
            <td><?php echo $request_document; ?></td>
            <td><?php echo date('m/d/Y', strtotime($date_issue)); ?></td>
            <td><?php echo "₱" . number_format($amount, 2); ?></td>
            <td><?php echo $OR_no . "-" . date("Y"); ?></td>
            <td>
                
            <div id="form_up_del_official">
                    <button id="barangay_cert" class="edit_revenue" data-id="<?php echo $row["OR_no"]; ?>"><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160L0 416c0 53 43 96 96 96l256 0c53 0 96-43 96-96l0-96c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 96c0 17.7-14.3 32-32 32L96 448c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l96 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 64z"/></svg></button>

                    <button id="delete_official_btn" class="delete_btn_revenue" data-id="<?php echo $row["OR_no"]; ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M135.2 17.7L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-7.2-14.3C307.4 6.8 296.3 0 284.2 0L163.8 0c-12.1 0-23.2 6.8-28.6 17.7zM416 128L32 128 53.2 467c1.6 25.3 22.6 45 47.9 45l245.8 0c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></button>
                </div>  



            </td>
        </tr>
        <?php } ?>

        <tfoot style="background-color:rgba(4, 129, 12, 0.65); color:rgba(255, 251, 199, 0.75);">
            <tr>
                <td colspan="0" style="text-align: right;">Total Amount :</td>
                <td></td>
                <td></td>
                <td colspan="0" style="font-weight: bold;">₱<?php echo number_format($total_amount, 2); ?></td>
                <td></td>
                <td></td>
            </tr>
        </tfoot>
    </table>

    <!-- Pagination Controls -->
    <div class="pagination">
        <?php if ($page > 1): ?>
            <a href="?page=<?php echo $page - 1; ?>&limit=<?php echo $limit; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>">Previous</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <a href="?page=<?php echo $i; ?>&limit=<?php echo $limit; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>" class="<?php echo $i == $page ? 'active' : ''; ?>">
                <?php echo $i; ?>
            </a>
        <?php endfor; ?>

        <?php if ($page < $totalPages): ?>
            <a href="?page=<?php echo $page + 1; ?>&limit=<?php echo $limit; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>">Next</a>
        <?php endif; ?>
    </div>

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

mysqli_close($conn);
?>


  <!-- MODAL Delete -->    
  <div id = "delete-modal_revenue" class = "delete-modal_revenue">
                            <div class = "delete-modal-content_revenue">
                                <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c13.3 0 24 10.7 24 24l0 112c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-112c0-13.3 10.7-24 24-24zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg></span>
                                     <h2>Delete Confirmation</h2>
                                                        <h3>Are you sure you want to delete this record!</h3>
                                                        <div class = "div-delete">   
                                                        <button id = "confirm-delete_revenue" class = "btn-delete_revenue">Delete</button>
                                                        <button id = "cancel-delete_revenue" class = "btn-delete_revenue">Cancel</button>
                                     </div>
                             </div>
                        </div>
                    
               <!-- MODAL UPDATE -->
            <div id = "edit-modal_revenue" class = "edit-modal_revenue">
                <div class = "edit-modal-content_revenue">
                    <span onclick="this.parentElement.parentElement.style.display='none';" class = "update-close-btn_revenue">&times;</span>
                        <?php include('edit.php')?>
                    </div>
            </div>
         

</body>
</html>
