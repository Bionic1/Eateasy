<?php 
	session_start();
	require 'inc/db.php';
	$error = "";
	if(isset($_POST["submit"]))
	{
		$username = $_POST["username"];
		$password = $_POST["password"];
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$address = $_POST["address"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$query = mysqli_query($c, "SELECT username from users where username='$username'");
		if(empty($username) || empty($password) || empty($fname) || empty($lname) || empty($address) || empty($email) || empty($phone))
		{
			$error = '<div class="alert alert-danger"> Mandatory fields needed to be filled !</div>';
		}

		elseif(mysqli_num_rows($query) > 0) {
			$error = '<div class="alert alert-danger"> Username is already in use. </div>';
		}

		else {
			mysqli_query($c, "INSERT into users(username, password, fname, lname, address, email, phone) values('$username','$password','$fname','$lname','$address','$email','$phone')");
			$_SESSION["username"] = $username ;
			header("Location: index.php");
		}
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
<div class="container">
<div class="jumbotron">
<form method="post">
	<?php echo $error ?>
	<label>Enter Username</label>
	<input type="text" name="username" class="form-control">
	<label>Password</label>
	<input type="password" name="password" class="form-control">
	<label>First Name</label>
	<input type="name" name="fname" class="form-control">
	<label>Last Name</label>
	<input type="text" name="lname" class="form-control">
	<label>Address</label>
	<input type="text" name="address" class="form-control">
	<label>E-mail</label>
	<input type="text" name="email" class="form-control">
	<label>Phone</label>
	<input type="tel" name="phone" class="form-control"><br>
	<button type="submit" name="submit" class="btn btn-warning">SIGN UP</button>
	</div>
</div>
</form>
</body>
</html>