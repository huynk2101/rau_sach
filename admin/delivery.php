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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        <?php include("../css/style.css"); ?>
    </style>
</head>

<body>
    <div class="container">
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#menu0">Chờ giao</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#menu1">Đang giao</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#menu2">Đã giao</a>
        </li>
    </ul>
    <?php require("../db/connect.php");?>
    <!-- Tab panes -->
    <div class="tab-content">
        <div id="menu0" class="container tab-pane active"><br>
            <?php
            

            $sql = "SELECT * FROM tbl_order WHERE status = 0";
            $result = mysqli_query($conn, $sql);


            ?>
            <table>
                <tr>
                    <th>Tên người nhận</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại người nhận</th>
                    <th>Ngày đặt hàng</th>
                    <th>Tổng tiền</th>
                </tr>
                <?php while ($orders = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td>
                            <?php echo $orders['receiver_name'] ?>
                        </td>
                        <td>
                            <?php echo $orders['address'] ?>
                        </td>
                        <td>
                            <?php echo $orders['phone'] ?>
                        </td>
                        <td>
                            <?php echo $orders['created_at'] ?>
                        </td>
                        <td>
                            <?php echo $orders['total'] ?>
                        </td>
                        <td>
                            <a href="process_delivery.php?id=<?php echo $orders['id']?>" class="border">Giao hàng</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
        <div id="menu1" class="container tab-pane fade"><br>
            <?php

            $sql = "SELECT * FROM tbl_order WHERE status = 1 ";
            $result = mysqli_query($conn, $sql);


            ?>
            <table>
                <tr>
                    <th>Tên người nhận</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại người nhận</th>
                    <th>Ngày đặt hàng</th>
                    <th>Tổng tiền</th>
                </tr>
                <?php while ($orders = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td>
                            <?php echo $orders['receiver_name'] ?>
                        </td>
                        <td>
                            <?php echo $orders['address'] ?>
                        </td>
                        <td>
                            <?php echo $orders['phone'] ?>
                        </td>
                        <td>
                            <?php echo $orders['created_at'] ?>
                        </td>
                        <td>
                            <?php echo $orders['total'] ?>
                        </td>
                    </tr>
                    <?php
                }

                ?>
            </table>
        </div>
        <div id="menu2" class="container tab-pane fade"><br>
            <?php

            $sql = "SELECT * FROM tbl_order WHERE status = 2 ";
            $result = mysqli_query($conn, $sql);


            ?>
            <table>
                <tr>
                    <th>Tên người nhận</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại người nhận</th>
                    <th>Ngày đặt hàng</th>
                    <th>Tổng tiền</th>
                </tr>
                <?php while ($orders = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td>
                            <?php echo $orders['receiver_name'] ?>
                        </td>
                        <td>
                            <?php echo $orders['address'] ?>
                        </td>
                        <td>
                            <?php echo $orders['phone'] ?>
                        </td>
                        <td>
                            <?php echo $orders['created_at'] ?>
                        </td>
                        <td>
                            <?php echo $orders['total'] ?>
                        </td>
                    </tr>
                    <?php
                }

                ?>
            </table>
        </div>
    </div>
    </div>
<?php mysqli_close($conn);?>
</body>

</html>