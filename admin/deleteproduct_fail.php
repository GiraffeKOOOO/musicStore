<?php

session_start();

if($_SESSION['role'] != 'Admin'){
	header("Location: ../index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Product Fail</title>
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
			<p id="add-panel-success">Product Deletion Failed</p>
			<p id="add-panel-success">Please go back and try again</p>
			<div id="add-product-table-container">
				<button onclick="location.href='deleteproduct.php'" id="back-button"><img src="../media/back.png" id="back-icon">Back</button>
			</div>

		</div>

	</div>

</body>
</html>