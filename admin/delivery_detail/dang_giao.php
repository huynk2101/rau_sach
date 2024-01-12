<?php
$page;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$row_per_page = 1;
$per_row = ($page - 1) * $row_per_page;
$sql = mysqli_query($conn, "SELECT * FROM tbl_order WHERE status = 1 LIMIT " . $per_row . "," . $row_per_page);
$total_record = mysqli_query($conn, "SELECT * FROM tbl_order WHERE status = 1");
$total_record = $total_record->num_rows;
$total_page = ceil($total_record / $row_per_page);

?>
<table>
    <tr>
        <th>Tên người nhận</th>
        <th>Địa chỉ</th>
        <th>Số điện thoại người nhận</th>
        <th>Ngày đặt hàng</th>
        <th>Tổng tiền</th>
    </tr>
    <?php while ($orders = mysqli_fetch_array($sql)) { ?>
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