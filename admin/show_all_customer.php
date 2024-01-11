<?php require('../include/check_admin.php') ?>
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
    <style>
        <?php include("../css/style.css") ?>
    </style>
</head>

<body>
    <?php
    require("../db//connect.php");
    $page;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    $row_per_page = 10;
    $per_row = ($page - 1) * $row_per_page;
    $sql = mysqli_query($conn, "SELECT * FROM tbl_khachhang WHERE permission = 0 LIMIT ".$per_row.",".$row_per_page);
    $total_record = mysqli_query($conn, "SELECT * FROM tbl_khachhang WHERE permission = 0");
    $total_record = $total_record->num_rows;
    $total_page = ceil($total_record / $row_per_page);
    ?>

    <table class="w-100">
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Email</th>
            <th>Mật khẩu</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
        </tr>
        <?php while ($row_cus = mysqli_fetch_array($sql)) { ?>
            <tr>
                <td>
                    <?php echo $row_cus['id'] ?>
                </td>
                <td>
                    <?php echo $row_cus['name'] ?>
                </td>
                <td>
                    <?php echo $row_cus['email'] ?>
                </td>
                <td>
                    <?php echo $row_cus['password'] ?>
                </td>
                <td>
                    <?php echo $row_cus['address'] ?>
                </td>
                <td>
                    <?php echo $row_cus['phone_number'] ?>
                </td>
            </tr>
        <?php } ?>

    </table>
    <ul class="pagination">
    <?php
    if ($page > 1) {
        $prev_page = $page - 1;
        ?>
        <li class="page-item">
            <a class="page-link" href="?page= <?php echo $prev_page ?>">
                Prev
            </a>
        </li>
    <?php } ?>
    <?php
    for ($num_page = 1; $num_page <= $total_page; $num_page++) { ?>
        <?php if ($num_page != $page) { ?>
            <?php if ($num_page > $page - 3 && $num_page < $page + 3) {
                ?>
                <li class="page-item">
                    <a class="page-link" href="?page= <?php echo $num_page;?>">
                        <?php echo $num_page;
                        ?>
                    </a>
                </li>
            <?php } ?>
        <?php } else { ?>
            <li class="page-item">
                <a class="page-link bg-dark">
                    <?php echo $num_page ?>
                </a>
            </li>
        <?php } ?>
    <?php } ?>
    <?php
    if ($page < $total_page) {
        $next_page = $page + 1;
        ?>
        <li class="page-item">
            <a class="page-link" href="?page= <?php echo $next_page ?>">
                Next
            </a>
        </li>
    <?php } ?>
</ul>
</body>

</html>