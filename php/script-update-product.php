<?php

include 'script-db.php';

$url = $_GET['pid'];

$pid = mysqli_real_escape_string($conn, $_POST['update-product_id']);
$name = mysqli_real_escape_string($conn, $_POST['update-product_name']);
$category = mysqli_real_escape_string($conn, $_POST['update-product_category']);
$stock = mysqli_real_escape_string($conn, $_POST['update-product_stock']);
$price = mysqli_real_escape_string($conn, $_POST['update-product_price']);
$image = mysqli_real_escape_string($conn, $_POST['update-product_image']);

$query_update = "UPDATE `products` SET `product_ID` = '$pid', `product_name` = '$name', `category` = '$category', `stock_quantity` = '$stock', `product_price` = '$price', `product_image` = '$image' WHERE `products`.`product_ID` = $url";

if(mysqli_query($conn, $query_update)) {
	header("Location: ../admin/updateproduct_success.php?pid=$pid");
} else {
	header("Location: ../admin/updateproduct_fail.php");
}

?>