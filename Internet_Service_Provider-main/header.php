<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Internet Service Provider</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css?1" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<script src="js/confirmation.js"></script>
	</head>
	
	<body>

			<header id="header">
				<h1><a href="index.php">Internet Service Provider</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="branches.php">Branches</a></li>
						<?php
						session_start();
						if(isset($_SESSION['username'])){
							echo '<li><a href="admin.php">Users</a></li>';
						}
						if(isset($_SESSION['username'])){
								echo '<li><a class="button special" href="signout.php">Sign Out</a></li>';

						} else {
							echo '<li><a class="button special" href="signin.php">Sign In</a></li>';
						}
						?>
					</ul>
				</nav>
			</header>