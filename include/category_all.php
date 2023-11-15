<?php
$sql_category = mysqli_query($conn,"SELECT * FROM tbl_danhmuc WHERE active = 1");
while ($row_category = mysqli_fetch_array($sql_category)) {
?>
<li><a href="?category_id=<?php echo $row_category['category_id'] ?>"><?php echo $row_category['category_name'] ?></a></li> 
<?php } ?>