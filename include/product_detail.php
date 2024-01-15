<?php 
$param = "";
if (isset($_GET["page"])) {
    $page1 = ($_GET["page"]);
    $param="&page=".$page1;
}
$url=$_SERVER['REQUEST_URI'];

?>
<div class="col-sm-3 mt-2" id=<?php echo $row["product_id"] ?>>
    <div class="card w-100">
        <div class="img-top"><a
                href="__DIR__ ./../front_web/chitietsp.php?pro_id=<?php echo $row['product_id'] ?>&url=<?php echo $url;?><?php echo $param; ?>"><img
                    src="./img/product/<?php echo $row['product_image'] ?>" width="100%" height="200px"
                    alt="image"></a></div>
        <div class="card-body">
            <h6 class="card-title">
                <?php echo $row['product_name'] ?>
                </h5>
                <p class="card-text">
                    <?php echo $row['product_price'] ?>₫ <span style="color:black">số lượng:
                    <?php echo $row['product_quantity'] ?></span>
                </p>
                <div class="text-center">
                    <?php 
                    if ($row['product_quantity']<=0) {
                        echo "Hết hàng";
                    }else{?>
                    <?php if (empty($_SESSION['id'])) { ?>
                        <a href="__DIR__ ./../front_web/signin.php"><button>Thêm vào giỏ hàng</button></a>

                    <?php } else { ?>
                        <a
                            href="__DIR__ ./../front_web/themgiohang.php?pro_id=<?php echo $row['product_id'] ?>&url=<?php echo $url;?><?php echo $param; ?>"><button>Thêm
                                vào giỏ hàng</button></a>
                    <?php } ?>
                    <?php }?>
                </div>

        </div>
    </div>
</div>