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
            <div class="col-3">
                <div class="card w-100">
                    <div class="img-top"><img src="../img/product/<?php echo $row['product_image'] ?>" width="100%"
                            height="200px" alt="image"></div>
                    <div class="card-body">
                        <h6 class="card-title">
                            <?php echo $row['product_name'] ?>
                            </h5>
                            <p class="card-text">
                                <?php echo $row['product_price'] ?>₫
                            </p>
                            <div class="text-center">
                                <?php if (empty($_SESSION['id'])) { ?>
                                    <a href="../front_web/signin.php"><button>Thêm vào giỏ hàng</button></a>

                                <?php } else { ?>
                                    <a href="../front_web/chitietsp.php?pro_id=<?php echo $row['product_id'] ?>"><button>Thêm
                                            vào giỏ hàng</button></a>
                                <?php } ?>
                            </div>

                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php

include "../include/pagination.php"; ?>