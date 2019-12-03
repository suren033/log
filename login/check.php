<?php
	session_start();
	if ( !empty($_POST['username']) && !empty($_POST['password']) ) {
		include ('config.php');
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = $db->query(" SELECT `id` FROM `user` WHERE `username`='$username' AND `password`='$password' ");

		$row = mysqli_num_rows($query);

		if ($row == 1) {
			$_SESSION['log'] = true;
			header('location: home.php');
		} else {
			header('location: index.php');
		}
	} else {
		header('location: index.php');
	}
?>