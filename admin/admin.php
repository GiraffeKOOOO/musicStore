<?php

session_start();

if($_SESSION['role'] != 'Admin'){
	header("Location: ../index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
	<link rel="stylesheet" type="text/css" href="../css/admin_theme.css">
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
					<button type="button" id="header-logout-btn" name="logout-btn">Log Out</button>
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

		<div id="control-panel-container">
			<p id="control-panel-title"><u>Admin Control Panel</u></p>

			<div id="add-product" class="option">
				<button onclick="location.href='addproduct.php'" id="add-btn">Add Product <img src="../media/add.png"></button>
			</div>

			<div id="delete-product" class="option">
				<button onclick="location.href='deleteproduct.php'" id="delete-btn">Delete Product <img src="../media/minus.png"></button>
			</div>
 
			<div id="update-product" class="option">
				<button onclick="location.href='updateproduct.php'" id="update-btn">Update Product <img src="../media/edit.png"></button>
			</div>

		</div>

	</div>

</body>
</html>