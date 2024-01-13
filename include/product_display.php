<?php
$page;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$row_per_page = 3;
$per_row = ($page - 1) * $row_per_page;
include "../include/product.php";
$result = mysqli_query($conn, $sql);
$total_record = $total_record->num_rows;
$total_page = ceil($total_record / $row_per_page);
?>
<div class="container-fluid border p-2">
    <div class="row">
        <?php
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <?php 
            include "product_detail.php";
            ?>
        <?php } ?>
    </div>
</div>
<?php

include "../include/pagination.php"; ?>