<!DOCTYPE html>
<html>
<head>
	<title>product</title>
	<link rel="stylesheet" type="text/css" href="../css/product_theme.css">
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div id="main-container">

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
					<a href="../login.php">
					<button type="button" id="header-login-btn">Login</button>
					</a>
				</span>	
			</div>

			<div id="top-bar-2">
				<table id="menu-bar">
					<tr id="row-one">
						<td><a href="../index.php">Home</a></td>
						<td><a href="guitars.php">Guitars</a></td>
						<td><a href="bass.php">Bass</a></td>
						<td><a href="drums.php">Drums</a></td>
						<td><a href="keys.php">Keys</a></td>
						<td><a href="strings.php">Strings</a></td>
						<td><a href="brass.php">Brass</a></td>
						<td><a href="studio.php">Studio</a></td>
						<td><a href="accessories.php">Accessories</a></td>
					</tr>
				</table>
			</div>

		</div>

		<div id="product-container">

			<?php

			include '../php/script-db.php';

			$url = $_GET['pid'];

			$query_product = "SELECT * FROM products WHERE product_ID='$url'";

			$product_name = array();
			$product_price = array();
			$stock = array();
			$product_picture = array();

			$result = mysqli_query($conn, $query_product);
			$divCounter = mysqli_num_rows($result);

			while ($row = mysqli_fetch_array($result)) {
				$product_name[] = $row['product_name'];
				$product_price[] = $row['product_price'];
				$stock[] = $row['stock_quantity'];
				$product_picture[] = $row['product_image'];
			}

			?>

			<div id="product-left">
				<h1><?php echo $product_name[0]?></h1>
				<img src="../media/<?php echo $product_picture[0]?>" id="product-main-image">
				<table id="product-small-gallery">
					<tr>
						<td><img src="../media/<?php echo $product_picture[0]?>" class="product-table-gallery"></td>
						<td><img src="../media/<?php echo $product_picture[0]?>" class="product-table-gallery"></td>
						<td><img src="../media/<?php echo $product_picture[0]?>" class="product-table-gallery"></td>
					</tr>
					
				</table>
			</div>

			<div id="product-right">
				<h1 class="product-right-text" id="cost-text">Price: £<?php echo $product_price[0]?></h1>
				<h2 class="product-right-text" id="stock-text">In stock: <?php echo $stock[0]?></h2>
				<table class="product-right-text">
					<tr>
						<td>shipping details: </td>
						<td>1st class shipping - £4</td>
						<td>1-2 days</td>
					</tr>
					<tr>
						<td></td>
						<td>2nd class shipping - £3</td>
						<td>1-4 days</td>
					</tr>
					<tr>
						<td></td>
						<td>normal shipping - £1.50</td>
						<td>2-5 days</td>
					</tr>
					<tr>
						<td></td>
						<td>global shipping - £20</td>
						<td>15-30 days</td>
					</tr>
				</table>
				<button id="basket-btn">Add to basket<img src="../media/basket.png" id="basket-icon"></button>
				
				<div id="product-description">
					<h2 class="product-right-text" id="product-description-title">Product description</h2>
					<p>Product description goes here</p>

				</div>
				
			</div>

		</div>

		<div id="footer">
									
					<div id="faq">
						<p id="faq-p"><u>Frequently Asked Questions</u></p>
						<table id="faq-table">
							<tr>
								<td>"I've changed my mind about a product":</td>
								<td>Don't be afraid to give our help line team a call. They will happily help you out with whatever you would like to do about the product, whether its to change the product or to return it. Your happiness is our happiness</td>
							</tr>
							<tr>
								<td>Which countries do you ship to?:</td>
								<td>We ship our products globally. We are located in the UK, so outside of the UK shipping will cost more but we can guarantee it will be worth the extra shipping cost!</td>
							</tr>
							<tr>
								<td>What currencies do you accept?:</td>
								<td>We accept all currencies, however the currency exchange will depend on the method of payment, whether it's PayPal, or your Bank exchange rate</td>
							</tr>
						</table>
					</div>

					<div id="general-info">
						<p id="general-info-p"><u>General information</u></p>
						<table id="general-info-table">
							<tr>
								<td><u>30 day guarantee:</u></td>
								<td>All the products come with a 30 day warranty! If you're not enjoying your product just send it back to us within the 30 day period from your purchase date</td>
							</tr>
							<tr>
								<td><u>3 year warranty:</u></td>
								<td>All of the products that we make come with a 3 year warranty. We use high quality parts and materials, and we take pride in making these products and can guarantee for the products to last at minimum 3 years.</td>
							</tr>
							<tr>
								<td><u>Great help line team:</u></td>
								<td>Here at Musicstore we have a great help line team, where every person is eager to hear about your experience, problems, or even questions that you may have small or big. Just give us a call!</td>
							</tr>
						</table>
					</div>

					<div id="contact-info">
						<table id="contact-info-table">
							<p id="contact-p"><u>Contact us:</u></p>
							<tr>
								<td><img src="../media/email.png" id="email-ico"></td>
								<td>Email:</td>
								<td>info@musicstore.com</td>
							</tr>
							<tr>
								<td><img src="../media/telephone.png" id="tel-ico"></td>
								<td>Telephone:</td>
								<td>01208 123456</td>
							</tr>
							<tr>
								<td><img src="../media/clock.png" id="clock-ico"></td>
								<td>Opening hours:</td>
								<td>Monday-Friday</td>
								<td>9am-5pm</td>
							</tr>
						</table>
					</div>

				</div>

	
</div>

</body>
</html>