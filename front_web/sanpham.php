
<body>
    <?php
    include __DIR__."/../db/connect.php";
    ?>
    <main>
        <img src="https://theme.hstatic.net/1000309753/1000718324/14/collection_banner.jpg?v=209" width="100%" alt="">
        <div class="container-fluid row mt-5">
            <div class="col-3">
                <div class="dropdown">
                    <button class="btn border dropdown-toggle" type="button" data-toggle="dropdown">Danh mục sản phẩm
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <?php include __DIR__."/../include/category_all.php" ?>
                    </ul>
                </div>
                <div class="dropdown">
                    <button class="btn border dropdown-toggle" type="button" data-toggle="dropdown">Giá sản phẩm
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="?price=product_price >=0 &tab=sanpham">Tất cả giá</a></li>
                        <li><a href="?price=product_price >=0 &&product_price <= 50000 &tab=sanpham">0-50000₫</a></li>
                        <li><a href="?price=product_price >= 50000 &&product_price <= 100000 &tab=sanpham">50000-100000₫</a></li>
                        <li><a href="?price=product_price >= 100000 &&product_price <= 150000 &tab=sanpham">100000-150000₫</a></li>
                        <li><a href="?price=product_price >= 150000 &tab=sanpham">Trên 150000₫</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-9">
                <div class="d-flex">
                    <h3>Tất cả sản phẩm</h3>


                </div>
                <?php include __DIR__."/../include/product_display.php"; ?>
            </div>
        </div>
    </main>
    <?php mysqli_close($conn) ?>
</body>

