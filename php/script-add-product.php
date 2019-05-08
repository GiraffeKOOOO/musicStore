<?php

include 'script-db.php';

if (isset($_POST['add-product-btn'])){
	$name = mysqli_real_escape_string($conn, $_POST['add-product-name']);
	$category = mysqli_real_escape_string($conn, $_POST['add-product-category']);
	$stock = mysqli_real_escape_string($conn, $_POST['add-product-stock']);
	$price = mysqli_real_escape_string($conn, $_POST['add-product-price']);
	$image = mysqli_real_escape_string($conn, $_POST['add-product-image']);

	$query_insert = "INSERT INTO products (product_name, category, stock_quantity, product_price, product_image) VALUES ('$name','$category','$stock','$price','$image')";

	if (mysqli_query($conn, $query_insert)) {
		header("Location: ../admin/addproduct_success.php");
	} else {
		header("Location: ../admin/addproduct_fail.php");
	}
} else {
	echo "button not pressed";
}

?>