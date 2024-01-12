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
    include "../db/connect.php";
    include "../include/header.php";
    ?>
    <main>
        <img src="https://theme.hstatic.net/1000309753/1000718324/14/collection_banner.jpg?v=209" width="100%" alt="">
        <div class="container-fluid row mt-5">
            <div class="col-3">
                <div class="dropdown">
                    <button class="btn border dropdown-toggle" type="button" data-toggle="dropdown">Danh mục sản phẩm
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <?php include "../include/category_all.php" ?>
                    </ul>
                </div>
                

            </div>
            <div class="col-9">
                <div class="d-flex">
                    <h3>Tất cả sản phẩm</h3>
                    
                    
                </div>
                <?php include "../include/product_display.php"; ?>
            </div>
        </div>
    </main>
    <?php include "../include/footer.html"; ?>
    <div><a href=""><img src="https://cdn.pixabay.com/photo/2016/07/03/18/35/messenger-1495274_1280.png" width="40px"
                alt="" class="float-end" style="position: fixed; top: 650px;right: 20px;"></a></div>
    <?php mysqli_close($conn) ?>
</body>

</html>