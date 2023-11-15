<?php
session_start();
$id = $_GET['id'];
$type = $_GET['type'];

if ($type === 'decrease') {
    if ($_SESSION['cart'][$id]['product_quantity'] > 1) {
        $_SESSION['cart'][$id]['product_quantity']--;
    }else{
        unset($_SESSION['cart'][$id] );
    }
}else{
    if ($_SESSION['cart'][$id]['product_quantity'] < 50) {
    $_SESSION['cart'][$id]['product_quantity']++;
    }
}
header('location:xemgiohang.php');
?>