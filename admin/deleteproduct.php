<?php

session_start();

if($_SESSION['role'] != 'Admin'){
	header("Location: ../index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Product</title>
	<link rel="stylesheet" type="text/css" href="../css/delete_product_theme.css">
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

		<div id="delete-panel-container">
			<p id="delete-panel-title"><u>Delete Product</u></p>
				<div id="search-div">
					<span id="button-span">
						<button onclick="location.href='admin.php'" id="back-button"><img src="../media/back.png" id="back-icon">Back</button>
					</span>
			
					<span id="search-bar-span">
						<form method="POST" action="../php/script-search-delete.php">
							<input type="text" name="search-bar-field" placeholder="search for product" id="search-bar-id">
							<button type="submit"><img src="../media/search.png" id="search-button-id"></button>
						</form>
					</span>
				</div>
			

			<table id="product-table">
				<tr id="product-table-headings">
					<th class="table-heading">Product ID number</th>
					<th class="table-heading">Product Name</th>
					<th class="table-heading">Product Category</th>
					<th class="table-heading">Product Price</th>
					<th class="table-heading">Product Image</th>
				</tr>
				<?php
					include '../php/script-db.php';

					$query_products = "SELECT * FROM products";

					$product_id = array();
					$product_name = array();
					$product_category = array();
					$product_price = array();
					$product_picture = array();

					$result = mysqli_query($conn, $query_products);
					$divCounter = mysqli_num_rows($result);

					while ($row = mysqli_fetch_array($result)) {
						$product_id[] = $row['product_ID'];
						$product_name[] = $row['product_name'];
						$product_category[] = $row['category'];
						$product_price[] = $row['product_price'];
						$product_picture[] = $row['product_image'];
					}

					for ($i=0; $i < $divCounter; $i++) { 
					echo "
						<tr class='scripted-data' id='scripted-data-id'>
							<td name='product-id-[$i]'>$product_id[$i]</td>
							<td>$product_name[$i]</td>
							<td>$product_category[$i]</td>
							<td>£$product_price[$i]</td>
							<td><a href='../category/product.php?pid=$product_id[$i]'><img src='../media/$product_picture[$i]' class='accessories-picture'> </a></td>
							<td><a href='../php/script-delete-product.php?pid=$product_id[$i]' name='button-id-[$i]' class='delete-button'>delete</a></td>
						</tr>
						";
					}

				?>
			</table>

		</div>

	</div>

</body>
</html>