<?php
global $_SESSION;
session_start();


if (isset($_POST['form-login-btn'])) {
	include 'script-db.php';
	$username = mysqli_real_escape_string($conn, $_POST['Username']);
	$pwd = mysqli_real_escape_string($conn, $_POST['Password']);

	if(empty($username)){
		header("Location: ../login.php?Login=empty");
		exit();
	} else {
		$query = "SELECT * FROM users WHERE user_name='$username' AND user_password='$pwd'" ;
		$result = mysqli_num_rows(mysqli_query($conn, $query));

		if($result > 0){
			$_SESSION['user'] = $username;
			$query_admin = "SELECT * FROM users WHERE user_name='$username' AND user_password='$pwd' AND user_role='Admin'";
			$result_admin = mysqli_num_rows(mysqli_query($conn, $query_admin));
			if($result_admin > 0){
				$_SESSION['role'] = 'Admin';
				$expiry_time = 600;
				setcookie(session_name(),session_id(),time(),$expiry_time);
				header("Location: ../admin/admin.php");
			} else {
				header("Location: ../index.php");
			}
		} else {
			header("Location: ../login.php?incorrect");
		}
	}

} else {
	echo "no button has been pressed";
}

?>