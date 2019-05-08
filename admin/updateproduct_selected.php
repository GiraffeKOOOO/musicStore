<?php

session_start();

if($_SESSION['role'] != 'Admin'){
	header("Location: ../index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Selected Product</title>
	<link rel="stylesheet" type="text/css" href="../css/update_product_selected_theme.css">
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

		<div id="update-product-container">
			<p id="update-product-title">Product</p>

			<span id="button-span">
				<button onclick="location.href='updateproduct.php'" id="back-button"><img src="../media/back.png" id="back-icon">Back</button>
			</span>

			<?php

			include '../php/script-db.php';

					$pid = $_GET['pid'];

					$select_query = "SELECT * FROM products WHERE product_ID='$pid'";

					$product_id = array();
					$product_name = array();
					$product_category = array();
					$product_stock = array();
					$product_price = array();
					$product_picture = array();

					$result = mysqli_query($conn, $select_query);
					$divCounter = mysqli_num_rows($result);

					while ($row = mysqli_fetch_array($result)) {
						$product_id[] = $row['product_ID'];
						$product_name[] = $row['product_name'];
						$product_category[] = $row['category'];
						$product_stock[] = $row['stock_quantity'];
						$product_price[] = $row['product_price'];
						$product_picture[] = $row['product_image'];
					}

			?>

			<div id="current-info">
				<form method="POST" action="../php/script-update-product.php?pid=<?php echo $pid; ?>">
				<table id="current-info-table">
					<tr id="current-info-table-title">
						<th> </th>
						<th id="current-label">Current data </td>
						<th> </th>
						<th id="new-label">New data </td>
					</tr>

					<tr id="product-id">
						<td class="current">Product ID:</td>
						<td class="current"><?php

						for ($i=0; $i < $divCounter; $i++){
							echo $product_id[$i];
						}

						?></td>
						<td class="new">Product ID: </td>
						<td class="new"><input type="number" name="update-product_id" required placeholder="product_ID"></td>
					</tr>

					<tr id="product-name">
						<td class="current">Product Name: </td>
						<td class="current"><?php

						for ($i=0; $i < $divCounter; $i++){
							echo $product_name[$i];
						}

						?></td>
						<td class="new">Product name:</td>
						<td class="new"><input type="text" name="update-product_name" required placeholder="product name"></td>
					</tr>

					<tr id="product-category">
						<td class="current">Product Category: </td>
						<td class="current"><?php

						for ($i=0; $i < $divCounter; $i++){
							echo $product_category[$i];
						}

						?></td>
						<td class="new">Product Category: </td>
						<td class="new"><input type="text" name="update-product_category" required placeholder="product category"</td>
					</tr>

					<tr id="product-stock">
						<td class="current">Product Stock: </td>
						<td class="current"><?php

						for ($i=0; $i < $divCounter; $i++){
							echo $product_stock[$i];
						}

						?></td>
						<td class="new">Product Stock: </td>
						<td class="new"><input type="number" name="update-product_stock" required placeholder="product stock"</td>
					</tr>

					<tr id="product-price">
						<td class="current">Product Price: </td>
						<td class="current"><?php

						for ($i=0; $i < $divCounter; $i++){
							echo $product_price[$i];
						}

						?></td>
						<td class="new">Product Price: </td>
						<td class="new"><input type="number" name="update-product_price" required placeholder="product price"</td>
					</tr>

					<tr id='product-image'>
						<td class="current">Product Image: </td>
						<td class="current"><?php

						for ($i=0; $i < $divCounter; $i++){
							echo "<img src='../media/$product_picture[$i]' class='selected-image'>";
						}

						?></td>
						<td class="new">Product Image: </td>
						<td class="new"><input type="text" name="update-product_image" required placeholder="product image"</td>
					</tr>
				</table>
				<div id="button-container">
				<button type="reset" name="reset-btn" id="reset-button">Reset Form</button>
				<button type="submit" name="update-product-btn" id="update-button">Update Product</button>
				</div>
				</form>
			</div>
			

		</div>

	</div>

</body>
</html>