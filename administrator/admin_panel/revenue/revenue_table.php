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
 <input type="text" id = "live_search" placeholder = "SEARCH" >
            
        <?php require("../../database/conn_db.php");
                    
                // Get the current page and limit from query parameters, set defaults if not provided
                $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                $limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 10;
                $limit = $limit > 0 ? $limit : 10; // Ensure the limit is positive
                $offset = ($page - 1) * $limit;

                // Get the total number of records
                $countQuery = "SELECT COUNT(*) AS total FROM barangay_official";
                $countResult = $conn->query($countQuery);
                $totalRows = $countResult->fetch_assoc()['total'];
                $totalPages = ceil($totalRows / $limit);
                
                $sql = "SELECT DISTINCT * FROM barangay_revenue  ORDER BY OR_no DESC LIMIT $limit OFFSET $offset";
                $result = $conn->query($sql);
    
           
    
                if ($result->num_rows > 0) {?>


    <div id = "searchresult">
                     <!-- Limit Selector -->
                     <div class="limit-selector">
                        <form method="GET" action="">
                            <label for="limit">Rows per page:</label>
                            <select name="limit" id="limit" onchange="this.form.submit()">
                                <option value="10" <?php if ($limit == 10) echo 'selected'; ?>>10</option>
                                <option value="20" <?php if ($limit == 20) echo 'selected'; ?>>20</option>
                                <option value="30" <?php if ($limit == 30) echo 'selected'; ?>>30</option>
                            </select>
                            <input type="hidden" name="page" value="<?php echo $page; ?>">
                        </form>
                    </div>

   

    <table >
    <caption>Income List</caption>
  
    <tr>
        <th>Fullname</th>
        <th>Document Type</th>
        <th>Date</th>
        <th>Amount</th>
        <th>Control No.</th>
        <th>Generate To</th>
    </tr>
    
    <?php
        $total_amount = 0; // Initialize total amount
        
        while($row = $result->fetch_assoc()) {
            $OR_no = $row['OR_no'];
            $firstname = $row["firstname"];
            $lastname = $row["lastname"];
            $middlename = $row["middlename"];
            $amount = $row["document_amount"];
            $request_document = $row["document_type"];
            $date_issue = $row["date_issue"];

        

            date_default_timezone_set("Asia/Manila");
            $date_issue = date("Y-m-d");

            $total_amount += $amount; // Accumulate the amount
    ?>
        <tr class="table_hover">
            <td><?php echo $firstname . " " . $middlename . " " . $lastname; ?></td>
            <td><?php echo $request_document; ?></td>
            <td><?php echo date('m/d/Y', strtotime($date_issue)); ?></td>
            <td><?php echo "₱" . number_format($amount, 2); ?></td>
            <td><?php echo $OR_no . "-" . date("Y"); ?></td>
            <td>
                <button class="dropdown-btns">Action<i class="arrow down"></i></button>
                <ul class="dropdown-contents">
                    <li>
                        <p hidden><?php echo $amount;  ?></p>
                        
                        <p hidden><?php echo $OR_no ?></p>
                        <button id="barangay_cert" class="edit_revenue" data-id="<?php echo $row["OR_no"]; ?>">Edit</button>
                    </li>
                    <li><button id="delete_official_btn" class="delete_btn_revenue" data-id="<?php echo $row["OR_no"]; ?>">Delete</button></li>
                 
                </ul>
            </td>
        </tr>
    <?php } ?>  
    
            <!-- Footer row -->
            <tfoot style = "background-color:rgba(4, 129, 12, 0.65); color:rgba(255, 251, 199, 0.75);">
                <tr >
                    <td colspan="0" style="text-align: right; ">Total Amount :</td>
                    <td></td>
                    <td></td>
                    <td  colspan="0" style="font-weight: bold;">₱<?php echo number_format($total_amount, 2); ?></td>
                    <td></td>
                    <td></td>
                </tr>
            </tfoot>
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

</div>


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

            
            
                <?php
                }   
                // -- close connection 
                mysqli_close($conn);
                ?> 
</body>
                               
</html>