<?php
include("../db/connect.php");
$new_product = mysqli_query($conn, "SELECT * FROM tbl_sanpham WHERE active = '1'  ORDER BY product_id DESC LIMIT 5");
while ($product = mysqli_fetch_array($new_product)) {
    ?>
    <div class="col-md-2">
        <div class="card">
            <div class="img-top"><img src="../img/product/<?php echo $product['product_image'] ?>" width="100%"
                    height="250px" alt=""></div>
            <div class="card-body">
                <h6>
                    <?php echo $product['product_name'] ?>
                </h6>
                <p>
                    <?php echo $product['product_price'] ?>
                </p>
            </div>
        </div>
    </div>
<?php } ?>