<?php
require('../db/connect.php');

$sql = "SELECT * FROM tbl_order_product GROUP BY product_id ORDER BY quantity DESC LIMIT 6";
$result = mysqli_query($conn, $sql);
while ($product = mysqli_fetch_array($result)) {
    $product_id = $product["product_id"];
    $sql = "SELECT * FROM tbl_sanpham WHERE product_id = $product_id";
    $result1 = mysqli_query($conn, $sql);
    $infor = mysqli_fetch_array($result1);
    ?>
    <div class="col-2">
        <div class="card w-100">
            <div class="img-top"><img src="../img/product/<?php echo $infor['product_image'] ?>" width="100%" height="200px"
                    alt="image"></div>
            <div class="card-body">
                <h6>
                    <?php echo $infor['product_name'] ?>
                </h6>
                <p>
                    <?php echo $infor['product_price'] ?>đ
                </p>
            </div>
            <div class="text-center">
                <?php if (empty($_SESSION['id'])) { ?>
                    <a href="../front_web/signin.php"><button>Thêm vào giỏ hàng</button></a>

                <?php } else { ?>
                    <a href="../front_web/chitietsp.php?pro_id=<?php echo $row['product_id'] ?>"><button>Thêm vào
                            giỏ hàng</button></a>
                <?php } ?>
            </div>
        </div>
    </div>
<?php }
mysqli_close($conn);
?>