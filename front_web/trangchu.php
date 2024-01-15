
    <main>
        <div id="carousel1" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#carousel1" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="./chitietsp.html" target="blank"><img
                            src="https://theme.hstatic.net/1000309753/1000718324/14/slideshow_1.jpg?v=209"
                            class="d-block w-100" alt="slideshow 1"></a>
                </div>
                <div class="carousel-item">
                    <a href="./chitietsp.html" target="blank"><img
                            src="https://theme.hstatic.net/1000309753/1000718324/14/slideshow_2.jpg?v=209"
                            class="d-block w-100" alt="slideshow 2"></a>
                </div>
                <div class="carousel-item">
                    <a href="./chitietsp.html" target="blank"><img
                            src="https://theme.hstatic.net/1000309753/1000718324/14/slideshow_3.jpg?v=209"
                            class="d-block w-100" alt="slideshow 3"></a>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://theme.hstatic.net/1000309753/1000718324/14/home_category_1_banner.jpg?v=209"
                            alt="" srcset="">
                        <div class="container-fluid title">
                            <h6>Món ngon buổi sáng</h6>
                            <a href="./blog.php" class="button">Xem ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://theme.hstatic.net/1000309753/1000718324/14/home_category_2_banner.jpg?v=209"
                            alt="">
                        <div class="container-fluid title">
                            <h6>Món ngon buổi sáng</h6>
                            <a href="./blog.php" class="button">Xem ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://theme.hstatic.net/1000309753/1000718324/14/home_category_3_banner.jpg?v=209"
                            alt="">
                        <div class="container-fluid title">
                            <h6>Món ngon buổi sáng</h6>
                            <a href="./blog.php" class="button">Xem ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://theme.hstatic.net/1000309753/1000718324/14/home_category_4_banner.jpg?v=209"
                            alt="">
                        <div class="container-fluid title">
                            <h6>Món ngon buổi sáng</h6>
                            <a href="./blog.php" class="button">Xem ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-5">
            <h2 class="text-center">Sản phẩm mới</h2>
            <div class="row justify-content-center">
                <?php include __DIR__.'/../include/new_product.php';?>
                
            </div>
        </div>
        <div class="container-fluid pt-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://theme.hstatic.net/1000309753/1000718324/14/block_home_category1.jpg?v=209"
                                class="img-top" alt="">
                        </div>
                        <div class="card-img-overlay">
                            <p>Sản phẩm bán chạy</p>
                            <h4>Món ngon buổi sáng</h4><br>
                            <a href="?tab=sanpham" class="button">Mua ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://theme.hstatic.net/1000309753/1000718324/14/block_home_category2.jpg?v=209"
                                class="img-top" alt="">
                        </div>
                        <div class="card-img-overlay">
                            <p>BOUILLABAISSE</p>
                            <h4>SALAD KIỂU PHÁP</h4><br>
                            <a href="?tab=sanpham" class="button">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://theme.hstatic.net/1000309753/1000718324/14/block_home_category3.jpg?v=209"
                                class="img-top" alt="">
                        </div>
                        <div class="card-img-overlay">
                            <p>Sản phẩm mới</p>
                            <h4>BUỔI SÁNG HEALTHY</h4><br>
                            <a href="?tab=sanpham" class="button">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-5">
            <h2 class="text-center" id="banchay">Sản phẩm bán chạy</h2>
            <div class="row justify-content-center">
                <?php include (__DIR__ ."/../include/sanphambanchay.php"); ?>
            
            </div>
        </div>
        <div class="container-fluid pt-5">
            <div class="row">
                <div class="col-6"
                    style="background: url(https://theme.hstatic.net/1000309753/1000718324/14/home_about_image.jpg?v=209);height: 700px; padding-top: 300px;padding-left: 60px;">
                    <h2 style="font-size: 55px;color:white;">Về chúng tôi</h2>
                    <a href="./gioithieu.php" class="button">Xem ngay</a>
                </div>
                <div class="col-6">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam deleniti, voluptas sequi
                        incidunt qui ex sit blanditiis dolorem dicta quod impedit dignissimos delectus, consequuntur,
                        hic culpa voluptate fugiat aut aperiam natus. Accusantium amet aliquid rem dolorem voluptate
                        necessitatibus at officiis voluptas voluptatum optio recusandae dolore quos facere autem neque,
                        quaerat molestias quis, nostrum ipsum? Velit doloribus dolor voluptatibus quibusdam debitis
                        ducimus reiciendis inventore a unde, iste harum rerum pariatur asperiores corrupti tempora nemo
                        quaerat praesentium voluptas consequatur repellat voluptate id eaque saepe? Reiciendis, vel.
                        Similique, non sunt. Voluptas, omnis. Fugiat ab tenetur culpa rem, repellendus nisi. Voluptatum
                        id assumenda earum veritatis. Dolor alias magni reprehenderit ipsa. Repudiandae dolorem culpa
                        eligendi iusto, deserunt, maxime nesciunt accusantium saepe ipsa placeat itaque impedit
                        laboriosam. Quae doloribus atque iste sint quisquam sunt nesciunt voluptates, reiciendis
                        voluptatem nam deleniti facilis recusandae commodi error, in architecto qui. Perferendis
                        quibusdam aspernatur, nulla esse nihil accusamus veritatis quis fugit debitis praesentium
                        nesciunt omnis et sequi quod sed expedita odit necessitatibus facere. Corporis omnis, suscipit,
                        perspiciatis nam, repudiandae aliquid delectus dolorum quia quos molestiae unde. Iusto delectus
                        voluptas veniam. Veritatis voluptates ipsum ut officiis maxime quae eaque. Vitae eveniet neque
                        illo ex asperiores tempora rerum praesentium velit ipsum! Voluptate!
                    </p>
                </div>
            </div>
        </div>
    </main>
    
    