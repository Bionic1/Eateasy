<?php session_start()?>

<!DOCTYPE html>
<html>
<head>
	<title>EatEasy:: Home</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
<div class="container">
	<header>
		<div class="logo">
			<span class="eat">EAT</span>
			<span class="easy">EASY</span>
		</div>
		<div class="pull-right">
			<?php if(isset($_SESSION["username"])): ?>
				Welcome <?=$_SESSION["username"]?>
				<a href="logout.php" class="btn btn-success">Logout</a>
			<?php else: ?>
				<a href="login.php" class="btn btn-danger">Login</a>
				<a href="signup.php" class="btn btn-primary">Sign Up</a>

			<?php endif?>

			
		</div>
		<div class="clearfix"></div>
		<nav>
			<ul class="navmenu">
				<li><a class="active" href="index.php">HOME</a></li>
				<li><a href="about.php">ABOUT US</a></li>
				<li><a href="services.php">SERVICES</a></li>
				<li><a href="restaurants.php">RESTAURANTS</a></li>
				<li><a href="#">MENUS <i class="fa fa-caret-down"></i></a>
				<ul>
					<li><a href="#">NEPALI</a></li>
					<li><a href="#">CONTINENTAL</a></li>
					<li><a href="#">THAKALI</a></li>
					<li><a href="#">CHINESE</a></li>
					<li><a href="#">INDIAN</a></li>
				</ul>
				</li>
				<li><a href="#contact">CONTACT US</a></li>
				<li class="phone"><i class="fa fa-phone"></i> 9840069126</li>
			</ul>
			<div class="clearfix"></div>
		</nav>
	</header>