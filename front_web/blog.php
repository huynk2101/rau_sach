<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <style>
    <?php include('../css/style.css')?>
  </style>
</head>
<body>
    <?php
    include "../include/header.php";
    ?>
    <main>
        <div class="row">
            <div class="col-3" style="border: solid 1px;">
                <h4 class="text-center">Bài viết mới nhất</h4>
                <ul>
                    <li>
                        <div class="d-flex">
                            <a target="blank" href="./tintuc1.html"><img src="https://file.hstatic.net/1000309753/article/untitled-1_84e935c86ef94ae282bc4c723e44f985_large.jpg" width="80px" height="60px" alt=""></a>
                            <p class="ml-4">7 loại giò ngon nức tiếng không thể thiếu trong ngày Tết cổ truyền Việt Nam <br><br>Fresh Organic Food 05.07.2021</p>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <a target="blank" href="./tintuc2.html"><img src="https://file.hstatic.net/1000309753/article/blog07_large.jpg" width="80px" height="60px" alt=""></a>
                            <p class="ml-4">Bài viết mẫu 2 <br><br>Duyên Nguyễn 21.08.2018</p>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <a target="blank" href="./tintuc3.html"><img src="https://file.hstatic.net/1000309753/article/blog02_large.jpg" width="80px" height="60px" alt=""></a>
                            <p class="ml-4">Bài viết mẫu 3 <br><br>Duyên Nguyễn 21.08.2018</p>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <a target="blank" href="./tintuc4.html"><img src="https://file.hstatic.net/1000309753/article/blog01_large.jpg" width="80px" height="60px" alt=""></a>
                            <p class="ml-4">Bài viết mẫu 4 <br><br>Duyên Nguyễn 21.08.2018</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-9">
                <h3>Tin tức</h3>
                <div class="d-flex">
                    <a target="blank" href="./tintuc1.html"><img src="https://file.hstatic.net/1000309753/article/untitled-1_84e935c86ef94ae282bc4c723e44f985_large.jpg" width="280px" height="180px" alt=""></a></a>
                    <p class="ml-4"><a target="blank" href="./tintuc1.html">7 loại giò ngon nức tiếng không thể thiếu trong ngày Tết cổ truyền Việt Nam</a> <br>
                        Người viết: Fresh Organic Food 05.07.2021 <br>
                        Giò là món ăn truyền thống của người Việt Nam bởi nó vừa dân giã, vừa ngon miệng vừa sang trọng khi tiếp khách. Việt...</p>
                </div>
                <div class="d-flex">
                    <a target="blank" href="./tintuc2.html"><img src="https://file.hstatic.net/1000309753/article/blog07_large.jpg" width="280px" height="180px" alt=""></a></a>
                    <p class="ml-4"><a target="blank" href="./tintuc2.html">Bài viết mẫu 2</a> <br>
                        Người viết: Duyên Nguyễn 21.08.2018 <br>
                        Đây là trang blog của cửa hàng. Bạn có thể dùng blog để quảng bá sản phẩm mới, chia sẻ trải nghiệm của khách hàng,...</p>
                </div>
                <div class="d-flex">
                    <a target="blank" href="./tintuc3.html"><img src="https://file.hstatic.net/1000309753/article/blog02_large.jpg" width="280px" height="180px" alt=""></a></a>
                    <p class="ml-4"><a target="blank" href="./tintuc3.html">Bài viết mẫu 3</a> <br>
                        Người viết: Duyên Nguyễn 21.08.2018 <br>
                        Đây là trang blog của cửa hàng. Bạn có thể dùng blog để quảng bá sản phẩm mới, chia sẻ trải nghiệm của khách hàng,...</p>
                </div>
                <div class="d-flex">
                    <a target="blank" href="./tintuc4.html"><img src="https://file.hstatic.net/1000309753/article/blog01_large.jpg" width="280px" height="180px" alt=""></a></a>
                    <p class="ml-4"><a target="blank" href="./tintuc4.html">Bài viết mẫu 4 </a><br>
                        Người viết: Duyên Nguyễn 21.08.2018 <br>
                        Đây là trang blog của cửa hàng. Bạn có thể dùng blog để quảng bá sản phẩm mới, chia sẻ trải nghiệm của khách hàng,...</p>
                </div>
            </div>
        </div>
    </main>
    <?php include "../include/footer.html"; ?>
    <div><a href=""><img src="https://cdn.pixabay.com/photo/2016/07/03/18/35/messenger-1495274_1280.png" width="40px" alt="" class="float-end" style="position: fixed; top: 650px;right: 20px;"></a></div>
</body>
</html>