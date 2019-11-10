<?php

$dbServername = "127.0.0.1";
$dbUsername = "localhost";
$dbPassword = "password";
$dbName = "dbname";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
	echo "something failed";
	die('DB connection failed: ' . $conn->connect_error);
}
//db is not being reached

?>
