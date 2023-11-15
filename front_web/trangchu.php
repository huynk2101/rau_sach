<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Site</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include "../include/header.php";
    ?>
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
        <div class="container-fluid">
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
                <?php include("../include/new_product.php") ?>
                <!-- <div class="col-md-2">
                    <div class="card">
                        <div class="img-top" id="change1"></div>
                        <div
                            style="position: absolute; top: 0;left: 0; color: red; border-right:solid lightgray 1px;border-bottom: solid lightgray 1px;">
                            -17%</div>
                        <div class="card-body">
                            <h6>Bánh quy hạt dẻ thơm ngon 600gr</h6>
                            <p>54,000₫ <span><del>65,000₫</del></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <div class="img-top" id="change2"></div>
                        <div
                            style="position: absolute; top: 0;left: 0; color: red; border-right:solid lightgray 1px;border-bottom: solid lightgray 1px;">
                            -17%</div>
                        <div class="card-body">
                            <h6>Bò bit tết kiểu Ý 500gr</h6>
                            <p>250,000₫ <span><del>300,000₫</del></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card" style="width: 100%">
                        <div class="img-top" id="change3"></div>
                        <div
                            style="position: absolute; top: 0;left: 0; color: red; border-right:solid lightgray 1px;border-bottom: solid lightgray 1px;">
                            -23%</div>
                        <div class="card-body">
                            <h6>Cà Ri cá Bớt Ấn Độ</h6>
                            <p>100,000₫ <span><del>100,000₫ </del></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <div class="img-top" id="change4"></div>
                        <div
                            style="position: absolute; top: 0;left: 0; color: red; border-right:solid lightgray 1px;border-bottom: solid lightgray 1px;">
                            -6%</div>
                        <div class="card-body">
                            <h6>Cherry Đỏ Mỹ Size 9.5 (Hộp 500G)</h6>
                            <p>150,000₫ <span><del>160,000₫</del></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <div class="img-top" id="change5"></div>
                        <div class="card-body">
                            <h6>Dưa Hấu Đỏ Không Hạt Long An Trái</h6>
                            <p>20,000₫</p>
                        </div>
                    </div>
                </div> -->
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
                            <p>Khuyến mãi tới 50%</p>
                            <h4>Món ngon buổi sáng</h4><br>
                            <a href="" class="button">Mua ngay</a>
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
                            <a href="" class="button">Xem thêm</a>
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
                            <a href="" class="button">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-5">
            <h2 class="text-center" id="banchay">Sản phẩm bán chạy</h2>
            <div class="row justify-content-center">
                <?php include ("../include/sanphambanchay.php"); ?>
                <!-- <div class="col-md-2">
                    <div class="card">
                        <div class="img-top" id="change5"></div>
                        <div class="card-body">
                            <h6>Dưa Hấu Đỏ Không Hạt Long An Trái</h6>
                            <p>20,000₫</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <div class="img-top" id="change6"></div>
                        <div class="card-body">
                            <h6>Cà Chua Đà Lạt tươi ngon 500gr -</h6>
                            <p>10,000₫</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <div class="img-top" id="change7"></div>
                        <div
                            style="position: absolute; top: 0;left: 0; color: red; border-right:solid lightgray 1px;border-bottom: solid lightgray 1px;">
                            -50%</div>
                        <div class="card-body">
                            <h6>Nấm Bào Ngư Xám Tươi - FoodMap</h6>
                            <p>100,000₫ <span><del>200,000₫</del></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <div class="img-top" id="change8"></div>
                        <div class="card-body">
                            <h6>Trứng Gà Thảo Mộc - Vỉ 10 Quả</h6>
                            <p>86,000₫</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <div class="img-top" id="change9"></div>
                        <div class="card-body">
                            <h6>Ức Gà Ướp gia vị siêu cay</h6>
                            <p>200,000₫</p>
                        </div>
                    </div>
                </div>
                <div class="w-100"></div><br>
                <div class="col-md-2">
                    <div class="card">
                        <div class="img-top" id="change10"></div>
                        <div class="card-body">
                            <h6>Khoai Tây Bi Đà Lạt</h6>
                            <p>90,000₫</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card" style="width: 100%;">
                        <div class="img-top" id="change11"></div>
                        <div
                            style="position: absolute; top: 0;left: 0; color: red; border-right:solid lightgray 1px;border-bottom: solid lightgray 1px;">
                            -20%</div>
                        <div class="card-body">
                            <h6>Cam Vàng Ai Cập</h6>
                            <p>40,000₫ <span><del>50,000₫</del></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <div class="img-top" id="change12"></div>
                        <div
                            style="position: absolute; top: 0;left: 0; color: red; border-right:solid lightgray 1px;border-bottom: solid lightgray 1px;">
                            -20%</div>
                        <div class="card-body">
                            <h6>Mỏng hạnh nhân nguyên Badam hạt</h6>
                            <p>60,000₫ <span><del>75,000₫</del></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <div class="img-top" id="change13"></div>
                        <div class="card-body">
                            <h6>Táo Juliet Hữu Cơ Pháp</h6>
                            <p>150,000₫</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <div class="img-top" id="change14"></div>
                        <div
                            style="position: absolute; top: 0;left: 0; color: red; border-right:solid lightgray 1px;border-bottom: solid lightgray 1px;">
                            -33%</div>
                        <div class="card-body">
                            <h6>Cải xanh Đà Lạt Tươi Ngon 500gr -</h6>
                            <p>54,000₫ <span><del>65,000₫</del></span></p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="container-fluid pt-5">
            <div class="row">
                <div class="col-5"
                    style="background: url(https://theme.hstatic.net/1000309753/1000718324/14/home_about_image.jpg?v=209);height: 700px; padding-top: 300px;padding-left: 60px;">
                    <h2 style="font-size: 55px;color:white;">Về chúng tôi</h2>
                    <a href="./gioithieu.php" class="button">Xem ngay</a>
                </div>
                <div class="col-7" style="padding: 90px;">
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
    <?php include "../include/footer.html"; ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <div><a href=""><img src="https://cdn.pixabay.com/photo/2016/07/03/18/35/messenger-1495274_1280.png" width="40px"
                alt="" class="float-end" style="position: fixed; top: 650px;right: 20px;"></a></div>
</body>

</html>