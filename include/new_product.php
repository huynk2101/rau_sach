<?php
include("../db/connect.php");
$new_product = mysqli_query($conn, "SELECT * FROM tbl_sanpham WHERE active = '1'  ORDER BY product_id DESC LIMIT 5");
while ($row = mysqli_fetch_array($new_product)) {
    ?>
    <div class="col-2">
        <div class="card w-100">
            <div class="img-top"><img src="../img/product/<?php echo $row['product_image'] ?>" width="100%" height="200px"
                    alt="image"></div>
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