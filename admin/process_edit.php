<?php require('../include/check_admin.php')?>
<?php 
require('../db/connect.php');
if (isset($_GET["id"])) {
    $product_id = $_GET['id'];
    $name = $_POST["name"];
    $category = $_POST["loai"];
    $result_category = mysqli_query($conn, "SELECT * FROM tbl_danhmuc WHERE category_name = '$category'");
    $this_category = mysqli_fetch_array($result_category);
    $category_id = $this_category['category_id'];
    if(!isset($_FILES['image'])){
        $image = $_FILES['image']['name'];
        $tmp_image = $_FILES['image']['tmp_name'];
    }else {
        $image = $_POST['old_image'];
    }
    $price = $_POST["price"];
    $detail = "chưa có";
    if (!isset($_POST['detail'])) {
        $detail = $_POST['detail'];
    }
    $sql = "UPDATE tbl_sanpham SET category_id = '$category_id',product_image = '$image',product_name = '$name' ,product_price = '$price' ,detail = '$detail' WHERE product_id = '$product_id' AND active=1";
    $result = mysqli_query($conn, $sql);
    move_uploaded_file($tmp_image, '../img/product/' . $image);
    header('location:show_all_product.php');
    exit();
}
if (isset($_GET['cate_id'])) {
    $cate_id = $_GET['cate_id'];
    $cate_name = $_POST['cate_name'];

    $sql = "UPDATE tbl_danhmuc SET category_name = '$cate_name' WHERE category_id = $cate_id";
    $result = mysqli_query($conn,$sql);
    header('location:show_all_category.php');
    exit();
}
?>