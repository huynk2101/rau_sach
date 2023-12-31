<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body {
            position: relative;
        }

        ul.nav-pills {
            top: 20px;
            position: fixed;
        }

        div.col-sm-7 div {
            height: 750px;
            font-size: 28px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <?php
        include("../db/connect.php");
        $product = mysqli_query($conn, "SELECT * FROM tbl_sanpham where product_id =" . $_GET['pro_id']);
        $result = mysqli_fetch_assoc($product);
        ?>
        <div class="row">
            <div class="col-sm-8">
                <img src="../img/product/<?php echo $result['product_image'] ?>" width="100%" height="100%" alt="">
            </div>
            <div class="col-sm-4" style="position: fixed;top: 0;right: 0;">
                <h3>
                    <?php echo $result['product_name'] ?>
                </h3><br>
                <div style="border-top: solid 1px;border-bottom: solid 1px;padding: 15px 0px;">
                    <p><span style="color: red;font-size: 30px;">
                            <?php echo $result['product_price'] ?>₫
                        </span>
                    </p>
                </div><br>
                <div class="text-center">
                    <a href="themgiohang.php?pro_id=<?php echo $result['product_id'] ?>">
                        <button style="background-color:green;width:100%;height:30px;border:0;">Thêm vào giỏ</button>
                    </a>
                </div>

                <h4>Mô tả</h4>
                <?php echo $result['detail'] ?>
            </div>
        </div>
    </div>

</body>

</html>