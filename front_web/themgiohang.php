<?php session_start();?>
<?php
if (empty($_SESSION['id'])) {
    header('location:signin.php');
    exit();
} 
$id = $_GET['pro_id'];
if (empty($_SESSION['cart'][$id])) {
    include '../db/connect.php';
    $sql = "SELECT * FROM tbl_sanpham WHERE active = '1'&&product_id = $id";
    $result = mysqli_query($conn, $sql);
    $product = mysqli_fetch_array($result);
    $_SESSION['cart'][$id]['product_name'] = $product['product_name'];
    $_SESSION['cart'][$id]['product_image'] = $product['product_image'];
    $_SESSION['cart'][$id]['product_price'] = $product['product_price'];
    $_SESSION['cart'][$id]['product_quantity'] = 1;
}else{
    $_SESSION['cart'][$id]['product_quantity']++;
}
header("Location:xemgiohang.php");
?>