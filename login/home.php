<?php
	session_start();
	if(!isset($_SESSION['log']) ) {
		header('location: index.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>But</h1>
</body>
</html>