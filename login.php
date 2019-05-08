<?php

session_start();

if (isset($_SESSION['role'])) {
	
	if($_SESSION['role'] == 'Admin'){
		header("Location: admin/admin.php");
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<link rel="stylesheet" type="text/css" href="css/login_theme.css">
</head>
<body>

<div id="main_container">
		<div id="top-bar">
			<div id="top-bar-1">
				<span id="logo-span">
					<a href="index.php">
						<img id="logo" src="media/logo.png">
					</a>
				</span>
				<span id="search-span">
					<form id="search-bar" method="GET" action="">
					<input type="text" name="search-bar-input" placeholder="Search..." id="search-bar-input-id">
					<button type="submit" name="submit-search" id="submit-search-btn">
					<img src="media/search.png" alt="search" width="25px" height="25px"></button>
				</form>
				</span>
				<span id="login-acc-span">
					<a href="login.php">
					<button type="button" id="header-login-btn">Log in</button>
					</a>
				</span>	
			</div>
			<div id="top-bar-2">
				<table id="menu-bar">
				<tr id="row-one">
					<td><a href="index.php">Home</a></td>
					<td><a href="category/guitars.php">Guitars</a></td>
					<td><a href="category/bass.php">Bass</a></td>
					<td><a href="category/drums.php">Drums</a></td>
					<td><a href="category/keys.php">Keys</a></td>
					<td><a href="category/strings.php">Strings</a></td>
					<td><a href="category/brass.php">Brass</a></td>
					<td><a href="category/studio.php">Studio</a></td>
					<td><a href="category/accessories.php">Accessories</a></td>
				</tr>
			</table>
			</div>
		</div>

		<div id="login-div">
			<div id="login-text-div">
				<p id="login-text"><u>Login panel</u></p>
			</div>
			<div id="login-form-div">
				<form id="login-form" method="POST" action="php/script-login.php">
					<p>User name:</p>
					<input type="text" name="Username" placeholder="username" required>
					<p>Password:</p>
					<input type="password" name="Password" placeholder="password" required>
					<button name="form-login-btn" id="form-login-btn">Log in</button>
				</form>
				<a href="forgotpwd.php">
					<button type="" id="forgotpwd-btn">Forgot password</button>
				</a>
			</div>
		</div>

	</div>
</body>
</html>