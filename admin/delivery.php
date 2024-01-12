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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        <?php include("../css/style.css"); ?>
    </style>
</head>

<body>
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="?detail=1">Chờ giao</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?detail=2">Đang giao</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?detail=3">Đã giao</a>
            </li>
        </ul>
        <?php require("../db/connect.php");
        $detail = "";
        if (isset($_GET["detail"])) {
            $detail = $_GET["detail"];
        } else {
            $detail = "1";
        }

        if ($detail == "1") {
            require "./delivery_detail/cho_giao.php";
        } else if ($detail == "2") {
            require "./delivery_detail/dang_giao.php";
        } else {
            require "./delivery_detail/da_giao.php";
        }

        ?>
        <ul class="pagination">
            <?php
            if ($page > 1) {
                $prev_page = $page - 1;
                ?>
                <li class="page-item">
                    <a class="page-link" href="?page=<?php echo $prev_page;?>&detail=<?php echo $detail;?>">
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
                            <a class="page-link" href="?page= <?php echo $num_page; ?>&detail=<?php echo $detail;?>">
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
                    <a class="page-link" href="?page= <?php echo $next_page; ?>&detail=<?php echo $detail;?>">
                        Next
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>

    </div>
    <?php mysqli_close($conn); ?>
</body>

</html>