<?php

session_start();

if($_SESSION['role'] != 'Admin'){
	header("Location: ../index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
	<link rel="stylesheet" type="text/css" href="../css/add_product_theme.css">
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<div id="main_container">

		<div id="top-bar">

			<div id="top-bar-1">
				<span id="logo-span">
					<a href="../index.php">
						<img id="logo" src="../media/logo.png">
					</a>
				</span>
				<span id="search-span">
					<form id="search-bar" method="GET" action="">
					<input type="text" name="search-bar-input" placeholder="Search..." id="search-bar-input-id">
					<button type="submit" name="submit-search" id="submit-search-btn">
					<img src="../media/search.png" alt="search" width="25px" height="25px"></button>
				</form>
				</span>
				<span id="login-acc-span">
					<a href="../php/script-logout.php">
					<button type="button" id="header-logout-btn">Log Out</button>
					</a>
				</span>	
			</div>

			<div id="top-bar-2">
				<table id="menu-bar">
					<tr id="row-one">
						<td><a href="../index.php">Home</a></td>
						<td><a href="../category/guitars.php">Guitars</a></td>
						<td><a href="../category/bass.php">Bass</a></td>
						<td><a href="../category/drums.php">Drums</a></td>
						<td><a href="../category/keys.php">Keys</a></td>
						<td><a href="../category/strings.php">Strings</a></td>
						<td><a href="../category/brass.php">Brass</a></td>
						<td><a href="../category/studio.php">Studio</a></td>
						<td><a href="../category/accessories.php">Accessories</a></td>
					</tr>
				</table>
			</div>
		</div>
		
		<div id="add-panel-container">
			<p id="add-panel-title"><u>Add Product</u></p>

			<div id="add-product-table-container">
				<form method="POST" action="../php/script-add-product.php">
					<table id="add-product-table">
						<tr>
							<td>Product name: </td>
							<td><input type="text" name="add-product-name" placeholder="Product Name" required><td>
						</tr>
						<tr>
							<td>Product category: </td>
							<td><input type="text" name="add-product-category" placeholder="Product Category"required></td>
						</tr>
						<tr>
							<td>Product stock: </td>
							<td><input type="number" name="add-product-stock" placeholder="Product Stock"required></td>
						</tr>
						<tr>
							<td>Product price: </td>
							<td><input type="number" name="add-product-price" placeholder="Product Price" required></td>
						</tr>
						<tr>
							<td>Product image name: </td>
							<td><input type="text" name="add-product-image" placeholder="Product Image Name"required></td>
						</tr>
					</table>
					<button type="submit" name="add-product-btn" id="add-product-button">Add product</button>
					<button type="reset" name="reset-btn" id="reset-button">Reset Form</button>				
				</form>
				<button onclick="location.href='admin.php'" id="back-button"><img src="../media/back.png" id="back-icon">Back</button>
			</div>

		</div>

	</div>

</body>
</html>