<?php
include 'script-db.php';

$id = $_GET['pid'];

$delete_query = "DELETE FROM `products` WHERE `products`.`product_ID` = $id ";

if (mysqli_query($conn, $delete_query)) {
	header("Location: ../admin/deleteproduct_success.php");
} else {
	header("Location: ../admin/deleteproduct_fail.php");
}

?>