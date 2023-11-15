<?php require('../include/check_admin.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Site</title>
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
    <div class="container mt-3">
        <h2>Menu</h2>
        <p>Xin chào <?php echo $_SESSION['name']?></p>
        <a href="../front_web/signout.php">Đăng xuất</a>
        <ul class="list-group w-25">
            <li class="list-group-item"><a target="blank" href="show_all_product.php">Sản phẩm</a></li>
            <li class="list-group-item"><a target="blank" href="show_all_customer.php">Khách hàng</a></li>
            <li class="list-group-item"><a target="blank" href="delivery.php">Hóa Đơn</a></li>
            <li class="list-group-item"><a target="blank" href="sanphambanchay.php">Doanh số</a></li>
        </ul>
    </div>
</body>

</html>